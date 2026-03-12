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
            $autorr = new AutorModel();
            $autorr->nome = $request->nome;
            $autorr->telefone = $request->telefone;
            $autorr->cpf = $request->cpf;
            $autorr->nascimento = $request->nascimento;
            $autorr->genero = $request->genero;
            $autorr->user_id = $usuario->id;
            $autorr->save();

            $data =[
                'erro' => 'n',
                'data' => $autorxr
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


    public function altera_autorr(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'cpf' => 'required',
            'nascimento' => 'required',
            'genero' => 'required',
        ]);

        try {
            $autor = AutorModel::find($request->id_autorr);
            $autor->nome = $request->nome;
            $autor->telefone = $request->telefone;
            $autor->cpf = $request->cpf;
            $autor->nascimento = $request->nascimento;
            $autor->genero = $request->genero;
            $autor->save();

            $data = [
                'erro' => 'n',
                'Autor' => $autorr,
            ];

            return response()->json($data, 200);

        } catch (\Throwable $th) {
            throw $th;
        }

    }

        public function exibe_autorr($id)
    {

        $autorr = AutorModel::find($id);

        $data = [
            'erro' => 'n',
            'autorr' => $autorr,
        ];

        return response()->json($data, 200);
    }

    public function todos_autorr(Request $request)
    {

        $autorr = AutorModel::get()->all();

        $data = [
            'erro' => 'n',
            'autorr' => $autorr,
        ];

        return response()->json($data, 200);
    }

    public function visualiza_autorr($id_autorr)
    {

        $autorr= AutorModel::find($id_autorr);

        return view('visualiza_autor')->with('autorr', $autorr);

    }

    public function deleta_autorr($id_autorr)
    {
        $cadastro = Usuario::find($id_autorr);

        return view('deleta_autor')->with('autorr', $autorr);

    }

    public function apagar_autorr(Request $request)
    {
        $request->validate([

            'id_autorr' => 'required',

        ]);

        
        $autorr = AutorModel::find($request->id_autorr);

        $autorr->delete();

        $data = [
            'erro' => 'n',
            'autorr' => $autorr,
        ];

        return response()->json($data, 200);
    }

}
