<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivroModel;

class LivroController extends Controller
{

    public function salva_livro(Request $request){

        $request->validate([
        'titulo' => 'required',
        'autor' => 'required',
        'ano_publicacao' => 'required',
        'editora' => 'required',
        'isbn' => 'required',
        'paginas' => 'required',
        'preco' => 'required',
        'genero' => 'required'
            
        ]);

        try {
            $livro = new LivroModel();
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
                "erro" => "n",
                "livro" => $livro,
            ];

            return response()->json($data,200);


        } catch (\Throwable $th) {
            throw $th;
        }
      
    }

    public function exibe_livro($id){

        $livro = LivroModel::find($id);

        $data = [
                "erro" => "n",  
                "livro" => $livro,
            ];

        return response()->json($data,200);
    }

    public function todos_livros(Request $request){

        $livro = LivroModel::get()->all();

        $data = [
                "erro" => "n",  
                "livro" => $livro,
            ];

        return response()->json($data,200);
    }

}

