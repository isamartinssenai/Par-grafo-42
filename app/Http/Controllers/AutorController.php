<?php

namespace App\Http\Controllers;
use App\Models\AutorModel;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function cadastra_autor(Request $request){
        
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'cpf' => 'required',
            'nascimento' => 'required',
            'genero' => 'required',
        ]);

        try {
            $usuario = $request->usuario;
            $autor = new AutorModel();
            $autor->nome = $request->nome;
            $autor->telefone = $request->telefone;
            $autor->cpf = $request->cpf;
            $autor->nascimento = $request->nascimento;
            $autor->genero = $request->genero;
            $autor->user_id = $usuario->id;
            $autor->save();

            $data =[
                'erro' => 'n',
                'data' => $autor
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


    public function altera_autor(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'cpf' => 'required',
            'nascimento' => 'required',
            'genero' => 'required',
        ]);

        try {
            $autor = AutorModel::find($request->id_autor);
            $autor->nome = $request->nome;
            $autor->telefone = $request->telefone;
            $autor->cpf = $request->cpf;
            $autor->nascimento = $request->nascimento;
            $autor->genero = $request->genero;
            $autor->save();

            $data = [
                'erro' => 'n',
                'autor' => $autor,
            ];

            return response()->json($data, 200);

        } catch (\Throwable $th) {
            throw $th;
        }

    }

        public function exibe_autor($id)
    {

        $autor = AutorModel::find($id);

        $data = [
            'erro' => 'n',
            'autor' => $autor,
        ];

        return response()->json($data, 200);
    }

    public function todos_autor(Request $request)
    {

        $autor = AutorModel::get()->all();

        $data = [
            'erro' => 'n',
            'autor' => $autor,
        ];

        return response()->json($data, 200);
    }

    public function visualiza_autor($id_autor)
    {

        $autor= AutorModel::find($id_autor);

        return view('visualiza_autor')->with('autor', $autor);

    }

    public function deleta_autor($id_autor)
    {
        $cadastro = Usuario::find($id_autor);

        return view('deleta_autor')->with('autor', $autor);

    }

    public function apagar_autrr(Request $request)
    {
        $request->validate([

            'id_autor' => 'required',

        ]);

        
        $autor = AutorModel::find($request->id_autor);

        $autor->delete();

        $data = [
            'erro' => 'n',
            'autor' => $autor,
        ];

        return response()->json($data, 200);
    }

}
