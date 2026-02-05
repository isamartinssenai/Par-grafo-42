<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivroModel;

class TestController extends Controller
{
    
    public function envia_teste(Request $request){

        $data = [
            "foda" => "ta",
            "Numero" => $request->numero
        ];

        return response()->json($data,200);
    }

    public function soma(Request $request){

        $data = [
            "Soma" => $request->numero + $request->numero_dois
        ];

        return response()->json($data,200);
    }
}
