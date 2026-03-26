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
            $usuario = $request->usuario;
            $autor = AutorModel::find($request->id_autor);
            if ($autor->user_id == $usuario->id){
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
            }

            return response()->json($data, 200);

        } catch (\Throwable $th) {
            throw $th;
        }

    }

        public function exibe_autor($id)
    {
        $usuario = $request->usuario;
        $autor = AutorModel::find($id);
     

        $data = [
            'erro' => 'n',
            'autor' => $autor,
        ];
        

        return response()->json($data, 200);
    }

    public function todos_autor(Request $request)
    {
        $usuario = $request->usuario;
        $autor = AutorModel::get()->all();
        if ($autor->user_id == $usuario->user_id){

        $data = [
            'erro' => 'n',
            'autor' => $autor,
        ];
        }

        return response()->json($data, 200);
    }

    public function visualiza_autor($id_autor)
    {
     
        $autor= AutorModel::find($id_autor);
      

        $info = [];
        $info['autor'] = $autor;
        return view('visualiza_autor',$info);
       

    }

    public function deleta_autor($id_autor)
    {
     
        $autor = AutorModel::find($id_autor);
       
        return view('deleta_autor')->with('autor', $autor);
        

    }

    public function apaga_autor(Request $request)
    {
        $request->validate([

            'id_autor' => 'required',

        ]);

        $usuario = $request->usuario;
        $autor = AutorModel::find($request->id_autor);
        if ($autor->user_id == $usuario->id){


        $autor->delete();

        $data = [
            'erro' => 'n',
            'autor' => $autor,
        ];
        }

        return response()->json($data, 200);
    }

}
