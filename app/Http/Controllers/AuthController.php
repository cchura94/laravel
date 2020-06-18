<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
    public function ingresar(Request $request)
    {
        $datos = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if(Auth::attempt($datos)){
            $user = Auth::user();
            return response()->json([
                'usuario' => $user,
                'token' => $user->createToken('Tunombredeapp')->accessToken
            ]);
        }else{
            return response()->json('No Autorizado', 401);
        }
    }
}
