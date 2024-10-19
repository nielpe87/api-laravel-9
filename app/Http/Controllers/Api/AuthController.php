<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function createToken(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            $user = auth()->user();

            $token = $user->createToken("userToken");

            return response()->json([
                "access_token" => $token->plainTextToken
            ]);

        }

        return response()->json(["message" => "email ou senha inválidos"]);


    }

    public function revokenToken(Request $request){

        try {
            $request->user()->tokens()->delete();

            return response()->json(["message" => "token invalidado com sucesso!"]);
        } catch (\Throwable $th) {

            return response()->json(["message" => "Ops aconteceu um erro"]);
        }
    }
}
