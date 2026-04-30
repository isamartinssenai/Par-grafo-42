<?php

namespace App\Http\Controllers;

use App\Models\Favorito;
use App\Models\EbookModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use App\Jobs\RenovaCache;
use Illuminate\Support\Facades\Cache;

class EbookController extends Controller
{
    public function generate($id)
    {
        ini_set('memory_limit', '512M'); 

        $ebook = EbookModel::find($id);

        if (!$ebook) {
            return response()->json(['erro' => 'E-book não encontrado'], 404);
        }

        $pdf = Pdf::loadView("pdf.invoice", [
            "ebook" => $ebook
        ])->setPaper("a4", "portrait");

        return $pdf->download($ebook->titulo . ".pdf");
    }

    public function update(Request $request, $id)
    {
        $ebook = EbookModel::find($id);

        if (!$ebook) {
            return response()->json(['erro' => 'E-book não encontrado'], 404);
        }

        if ($ebook->hash_conteudo != md5($request->texto)) {
            return response()->json([
                'erro' => 's',
                'msg' => 'O conteúdo foi alterado!'
            ]);
        }

        $ebook->texto = $request->texto;
        $ebook->hash_conteudo = md5($request->texto);
        $ebook->save();

        RenovaCache::dispatch($request->usuario); // ✅

        return response()->json([
            'erro' => 'n',
            'msg' => 'Salvo com sucesso!'
        ]);
    }

    public function cadastra_ebook(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'genero' => 'required',
            'sinopse' => 'required',
            'texto' => 'required',
        ]);

        try {
            $user = $request->usuario;

            $ebook = new EbookModel();
            $ebook->titulo = $request->titulo;
            $ebook->autor = $request->autor;
            $ebook->genero = $request->genero;
            $ebook->sinopse = $request->sinopse;
            $ebook->texto = $request->texto;
            $ebook->user_id = $user->id;
            $ebook->save();

            RenovaCache::dispatch($user); // ✅

            return response()->json([
                'erro' => 'n',
                'data' => $ebook
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'erro' => 's',
                'msg' => 'Erro ao cadastrar'
            ], 500);
        }
    }

    public function altera_ebook(Request $request)
    {
        $request->validate([
            'id_ebook' => 'required',
            'titulo' => 'required',
            'autor' => 'required',
            'genero' => 'required',
            'sinopse' => 'required',
            'texto' => 'required',
        ]);

        try {
            $usuario = $request->usuario;

            $ebook = EbookModel::find($request->id_ebook);

            if (!$ebook) {
                return response()->json(['erro' => 'E-book não encontrado'], 404);
            }

            $ebook->titulo = $request->titulo;
            $ebook->autor = $request->autor;
            $ebook->genero = $request->genero;
            $ebook->sinopse = $request->sinopse;
            $ebook->texto = $request->texto;
            $ebook->save();

            RenovaCache::dispatch($usuario); // ✅

            return response()->json([
                'erro' => 'n',
                'ebook' => $ebook,
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'erro' => 's',
                'msg' => 'Erro ao alterar'
            ], 500);
        }
    }

    public function todos_ebook(Request $request)
    {
        $usuario = $request->usuario;

        $ebooks = EbookModel::where('user_id', $usuario->id)->get(); // ✅ corrigido

        return response()->json([
            'erro' => 'n',
            'ebook' => $ebooks,
        ], 200);
    }

    public function visualiza_ebook($id_ebook)
    {
        $ebook = EbookModel::find($id_ebook);

        return view('visualiza_ebook', ['ebook' => $ebook]);
    }

    public function deleta_ebook($id_ebook)
    {
        $ebook = EbookModel::find($id_ebook);

        return view('deleta_ebook')->with('ebook', $ebook);
    }

    public function apaga_ebook(Request $request)
    {
        $request->validate([
            'id_ebook' => 'required',
        ]);

        $usuario = $request->usuario;
        $ebook = EbookModel::find($request->id_ebook);

        if (!$ebook) {
            return response()->json([
                'erro' => 's',
                'msg' => 'E-book não encontrado!'
            ]);
        }

        if ($ebook->user_id != $usuario->id) {
            return response()->json([
                'erro' => 's',
                'msg' => 'Você não tem permissão!'
            ]);
        }

        $ebook->delete();

        RenovaCache::dispatch($usuario); // ✅

        return response()->json([
            'erro' => 'n',
            'msg' => 'E-book deletado com sucesso!'
        ]);
    }

    public function todos_ebooks()
    {
        $ebooks = EbookModel::all();
        return view('vendas')->with('ebooks', $ebooks);
    }

    public function favoritar(Request $request)
    {
        $user = $request->usuario;

        if (!$user) {
            return response()->json([
                'erro' => 's',
                'msg' => 'Usuário não autenticado'
            ]);
        }

        Favorito::create([
            'user_id' => $user->id,
            'livro_id' => $request->livro_id ?? $request->ebook_id
        ]);

        RenovaCache::dispatch($user); // ✅ ESSENCIAL

        return response()->json([
            'erro' => 'n',
            'msg' => 'Favoritado com sucesso'
        ]);
    }

    public function prevendas()
    {
        $ebooks = EbookModel::all();
        return view('vendas')->with('ebooks', $ebooks);
    }

    public function dashboard(Request $request)
    {
        try {
            if (!$request->usuario) {
                return response()->json([
                    'erro' => 's',
                    'msg' => 'Usuário não autenticado'
                ], 401);
            }

            $user = $request->usuario;

            $dash = Cache::remember('dashboard_'.$user->id, 60 * 5, function () use ($user) {

                $data = [];

                $data['totalEbook'] = EbookModel::where('user_id', $user->id)->count();
                $data['favoritos'] = Favorito::where('user_id', $user->id)->count();

                $ebooksPorMes = EbookModel::where('user_id', $user->id)
                    ->select(DB::raw('MONTH(created_at) as mes'), DB::raw('count(*) as total'))
                    ->groupBy('mes')
                    ->pluck('total', 'mes');

                $grafico = array_fill(0, 12, 0);

                foreach ($ebooksPorMes as $mes => $total) {
                    $grafico[$mes - 1] = $total;
                }

                $data['grafico'] = $grafico;
                $data['ebooksPorMes'] = $ebooksPorMes->toArray();

                return $data;
            });

            $grafico = $dash['grafico'] ?? array_fill(0, 12, 0);
            $ebooksPorMes = $dash['ebooksPorMes'] ?? [];

            foreach ($ebooksPorMes as $mes => $total) {
                $grafico[$mes - 1] = $total;
            }

            return response()->json([
                'total_ebooks' => $dash['totalEbook'] ?? 0,
                'favoritos' => $dash['favoritos'] ?? 0,
                'grafico' => $grafico,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'erro' => 's',
                'msg' => 'Erro ao carregar dashboard: ' . $th->getMessage()
            ], 500);
        }
    }
    
}