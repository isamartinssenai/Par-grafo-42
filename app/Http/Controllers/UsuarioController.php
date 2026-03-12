<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\TokenUser;
use Carbon\Carbon;


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

    public function login(Request $request){
        $request->validate([
        'email' => 'required',
        'senha' => 'required'
        ]);

        $usuario = Usuario::where('email','=',$request->email)
        ->where('senha','=',md5($request->senha))->get()->first();

        if($usuario){
            TokenUser::where('user_id',$usuario->id)->delete();
            $token = new TokenUser();
            $token->user_id = $usuario->id;
            $data = date(format:"Y-m-d H:i:s");
            $token->token = md5($request->user_id . $usuario->email . $data);
            $agora = Carbon::now();
            $agora->addDays(7);
            $token->valido_ate = $agora;
            $token->save();

            $data = [
                'erro' => 'n',
                'msg' => 'Usuario Logado!',
                'token' => $token->token
            ];

            return response()->json($data,200);

        }else{

         $data = [
                'erro' => 's',
                'msg' => 'Não Achei esse Usuario!',
              
            ];

            return response()->json($data,200);

        }
        


    }

    public function altera_cadastro(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'senha' => 'required',
            'telefone' => 'required',
            'nascimento' => 'required',
            'genero' => 'required',
        ]);

        try {
            $cadastro = Usuario::find($request->id_cadastro);
            $cadastro->nome = $request->nome;
            $cadastro->email = $request->email;
            $cadastro->senha = $request->senha;
            $cadastro->telefone = $request->telefone;
            $cadastro->nascimento = $request->nascimento;
            $cadastro->genero = $request->genero;
            $cadastro->save();

            $data = [
                'erro' => 'n',
                'cadastro' => $cadastro,
            ];

            return response()->json($data, 200);

        } catch (\Throwable $th) {
            throw $th;
        }

    }

        public function exibe_cadastro($id)
    {

        $cadastro = Usuario::find($id);

        $data = [
            'erro' => 'n',
            'cadastro' => $cadastro,
        ];

        return response()->json($data, 200);
    }

    public function todos_cadastro(Request $request)
    {

        $cadastro = Usuario::get()->all();

        $data = [
            'erro' => 'n',
            'cadastro' => $cadastro,
        ];

        return response()->json($data, 200);
    }

    public function visualiza_cadastro($id_cadastro)
    {

        $cadastro= Usuario::find($id_cadastro);

        return view('perfil')->with('cadastro', $cadastro);

    }

    public function deleta_cadastro($id_cadastro)
    {
        $cadastro = Usuario::find($id_cadastro);

        return view('deleta_perfil')->with('cadastro', $cadastro);

    }

    public function apagar_cadastro(Request $request)
    {
        $request->validate([

            'id_cadastro' => 'required',

        ]);

        
        $cadastro = Usuario::find($request->id_cadastro);

        $cadastro->delete();

        $data = [
            'erro' => 'n',
            'cadastro' => $cadastro,
        ];

        return response()->json($data, 200);
    }

}


