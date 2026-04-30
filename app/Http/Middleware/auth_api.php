<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Usuario;
use App\Models\TokenUser;
use Carbon\Carbon;

class auth_api
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
{

    $tokenHeader = $request->bearerToken();

    $tokenBody = $request->input('token');

    $tokenFinal = $tokenHeader ?? $tokenBody;

    if($tokenFinal){
        $hoje = Carbon::now();

        $token = TokenUser::where('token', $tokenFinal)
            ->where('valido_ate','>=',$hoje)
            ->first();

        if($token){
            $usuario = Usuario::find($token->user_id);

            $request->usuario = $usuario;
            $request->token = $token;

            return $next($request);
        }else{
            return response()->json([
                "erro" => 's',
                "msg" => 'Token invalido!'
            ],200);
        }

    }else{
        return response()->json([
            "erro" => 's',
            "msg" => 'Você não enviou os tokens!'
        ],200);
    }
}
}
