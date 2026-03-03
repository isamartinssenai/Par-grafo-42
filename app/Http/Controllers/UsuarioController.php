<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\TokenUser;


class UsuarioController extends Controller
{
    public function cadastra_usuario(Request $request){
        
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'senha' => 'required',
            'telefone' => 'required',
            'nascimento' => 'required',
            'genero' => 'required',
        ]);

        try {
            $usuario = new Usuario();
            $usuario->nome = $request->nome;
            $usuario->email = $request->email;
            $usuario->telefone = $request->telefone;
            $usuario->nascimento = $request->nascimento;
            $usuario->genero = $request->genero;
            $usuario->senha = md5($request->senha);
            $usuario->save();

            $data =[
                'erro' => 'n',
                'data' => $usuario
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
}


