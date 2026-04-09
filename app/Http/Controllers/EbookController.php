<?php

namespace App\Http\Controllers;

use App\Models\Favorito;
use App\Models\EbookModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class EbookController extends Controller
{
    public function generate($id){
    $ebook = EbookModel::find($id);

    $pdf = Pdf::loadView("pdf.invoice", [
        "ebook" => $ebook
    ])
    ->setPaper("a4", "portrait")
    ->setOption(["dpi" => "300"]);

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

    return response()->json([
        'erro' => 'n',
        'msg' => 'Salvo com sucesso!'
    ]);
}


    public function cadastra_ebook(Request $request){
        
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

            $data =[
                'erro' => 'n',
                'data' => $ebook
            ];

            return response()->json($data,200);
        } catch (\Throwable $th) {
            throw $th;
            $date =[
                'erro' => 's',
                'data' => 'erro ao se cadastrar'
            ];
        }

    }


    public function altera_ebook(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'genero' => 'required',
            'sinopse' => 'required',
            'texto' => 'required',
        ]);

        try {
            $usuario = $request->usuario;
            $ebook = EbookModel::find($request->id_ebook);
            $ebook->titulo = $request->titulo;
            $ebook->autor = $request->autor;
            $ebook->genero = $request->genero;
            $ebook->sinopse = $request->sinopse;
            $ebook->texto = $request->texto;
            $ebook->save();

            $data = [
                'erro' => 'n',
                'ebook' => $ebook,
            ];


            return response()->json($data, 200);

        } catch (\Throwable $th) {
            throw $th;
        }

    }

        public function exibe_ebook($id)
    {
        $usuario = $request->usuario;
        $ebook = EbookModel::find($id);
     

        $data = [
            'erro' => 'n',
            'ebook' => $ebook,
        ];
        

        return response()->json($data, 200);
    }

    public function todos_ebook(Request $request)
    {
        $usuario = $request->usuario;
        $ebookr = EbookModel::get()->all();
        if ($ebook->user_id == $usuario->user_id){

        $data = [
            'erro' => 'n',
            'ebook' => $ebook,
        ];
        }

        return response()->json($data, 200);
    }

    public function visualiza_ebook($id_ebook)
    {
     
        $ebook= EbookModel::find($id_ebook);
      

        $info = [];
        $info['ebook'] = $ebook;
        return view('visualiza_ebook',$info);
       

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
        ], 200);
    }

    if ($ebook->user_id != $usuario->id) {
        return response()->json([
            'erro' => 's',
            'msg' => 'Você não tem permissão!'
        ], 200);
    }

    $ebook->delete();

    return response()->json([
        'erro' => 'n',
        'msg' => 'E-book deletado com sucesso!'
    ], 200);
}   

    public function todos_ebooks()
{
    $ebooks = EbookModel::all();
    return view('vendas')->with('ebooks', $ebooks);
}

    public function favoritar(Request $request)
{
    $user = auth('api')->user(); // ou seu método de auth

    if (!$user) {
        return response()->json([
            'erro' => 's',
            'msg' => 'Usuário não autenticado'
        ], 401);
    }

    Favorito::create([
        'user_id' => $user->id,
        'ebook_id' => $request->ebook_id
    ]);

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
}
