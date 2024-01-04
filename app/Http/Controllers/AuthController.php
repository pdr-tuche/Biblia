<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request){
        $fields=$request->validate([
            'name'=>'required|string',
            'email'=>'required|string|unique:users,email',
            'password'=>'required|string|confirmed'
        ]);

        $user = User::create([
            'name'=>$fields['name'],
            'email'=>$fields['email'],
            'password'=>bcrypt($fields['password'])
        ]);


        // $token = $user->createToken($request->nameToken)->plainTextToken; // o caba da videoaula colocou o nametoken sendo puxado pela requisicao
        $token = $user->createToken('myapptoken')->plainTextToken; // cria um token para o usuario (myapptoken é o nome do token

        $response = [
            'user'=>$user,
            'token'=>$token
        ];

        return response()->json($response,201);
    }

    public function login(Request $request){
        $fields=$request->validate([
            'email'=>'required|string',
            'password'=>'required|string'
        ]);

        $user = User::where('email',$fields['email'])->first();

        if(!$user || !Hash::check($fields['password'],$user->password))
            return response(['message'=>'Email ou senha invalidos'],401);

        $token = $user->createToken('UsuarioLogado')->plainTextToken; // cria um token para o usuario (myapptoken é o nome do token

        $response = [
            'user'=>$user,
            'token'=>$token
        ];

        return response()->json($response,201);
    }

}
