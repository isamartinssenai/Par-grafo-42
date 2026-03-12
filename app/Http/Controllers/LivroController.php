<?php

namespace App\Http\Controllers;

use App\Models\LivroModel;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function salva_livro(Request $request)
    {

        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'ano_publicacao' => 'required',
            'editora' => 'required',
            'isbn' => 'required',
            'paginas' => 'required',
            'preco' => 'required',
            'genero' => 'required',
        ]);

        try {
            $livro = new LivroModel;
            $livro->titulo = $request->titulo;
            $livro->autor = $request->autor;
            $livro->ano_publicacao = $request->ano_publicacao;
            $livro->editora = $request->editora;
            $livro->isbn = $request->isbn;
            $livro->paginas = $request->paginas;
            $livro->preco = $request->preco;
            $livro->genero = $request->genero;
            $livro->save();

            $data = [
                'erro' => 'n',
                'livro' => $livro,
            ];

            return response()->json($data, 200);

        } catch (\Throwable $th) {
            throw $th;
        }

    }

    public function altera_livro(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'ano_publicacao' => 'required',
            'editora' => 'required',
            'isbn' => 'required',
            'paginas' => 'required',
            'preco' => 'required',
            'genero' => 'required',
            'id_livro' => 'required',

        ]);

        try {
            $livro = LivroModel::find($request->id_livro);
            $livro->titulo = $request->titulo;
            $livro->autor = $request->autor;
            $livro->ano_publicacao = $request->ano_publicacao;
            $livro->editora = $request->editora;
            $livro->isbn = $request->isbn;
            $livro->paginas = $request->paginas;
            $livro->preco = $request->preco;
            $livro->genero = $request->genero;
            $livro->save();

            $data = [
                'erro' => 'n',
                'livro' => $livro,
            ];

            return response()->json($data, 200);

        } catch (\Throwable $th) {
            throw $th;
        }

    }

    public function exibe_livro($id)
    {

        $livro = LivroModel::find($id);

        $data = [
            'erro' => 'n',
            'livro' => $livro,
        ];

        return response()->json($data, 200);
    }

    public function todos_livros(Request $request)
    {

        $livro = LivroModel::get()->all();

        $data = [
            'erro' => 'n',
            'livro' => $livro,
        ];

        return response()->json($data, 200);
    }

    public function visualiza_livro($id_livro)
    {

        $livro = LivroModel::find($id_livro);

        return view('visualiza_cadastro')->with('livro', $livro);

    }

    public function deleta_livro($id_livro)
    {
        $livro = LivroModel::find($id_livro);

        return view('deleta_livro')->with('livro', $livro);

    }

    public function apagar_livro(Request $request)
    {
        $request->validate([

            'id_livro' => 'required',

        ]);
        

        
        $livro = LivroModel::find($request->id_livro);

        $livro->delete();

        $data = [
            'erro' => 'n',
            'livro' => $livro,
        ];

        return response()->json($data, 200);
    }
}
