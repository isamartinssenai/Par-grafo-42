<?php

namespace App\Jobs;

use App\Models\Usuario;
use Illuminate\Support\Facades\Cache;

class UsuarioController extends Controller
{
    public function perfil(Request $request)
    {
        $usuario = Usuario::find($request->user()->id);

        return view('perfil')->with('cadastro', $usuario);
    }

    public function testa_email($id_usuario)
    {
        $usuario = Usuario::find($id_usuario);

        EnviarEmail::dispatch($usuario);

        $data =
        [
            'messagem' => 'Email enviado',
            'usuario' => $usuario,
        ];

        return response()->json($data);
    }

    public function todos_users(Request $request)
    {
        $usuarios = Cache::remember('todos_usuarios', $ttl, function () {
            return Usuario::all();
        });

        $data = [
            'erro' => 'n',
            'usuarios' => $usuarios,
        ];

        return response()->json($data, 200);

    }
}
