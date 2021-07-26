<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class usuariosController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request ->validate([
            'name'=> 'require|string|max:20',
            'email' => 'require|string|max:20|unique:users',
            'last_name' => 'require|string|max:20',
            'ID_Type' => 'require|enum',
            'identification_number' => 'require|string|max:20',
            'phone'=> 'require|string|max:10',
            'password' => 'require|string|min:8'
        ]);

        $usuarios = usuario::create([
            'name'=> $validatedData['name'],
            'email' => $validatedData['email'],
            'last_name' => $validatedData['last_name'],
            'ID_Type' => $validatedData['ID_Type'],
            'identification_number' => $validatedData['identification_number'],
            'phone'=> $validatedData['phone'],
            'password' => Hash::make( $validatedData['password'])
        ]);
        $token = $usuarios->createToken('auth_token')->plainTextToken;

    }
    public function login(Request $request){

        if (!usuario::attempt($request->only('email','password'))){

            return response()->json(['message'=>'usuario o contraseña incorrecta'],401);

        }
        $usuarios=usuario::where('email',$request['email'])->firstOrFail();

        $token = $usuarios->createToken('auth_token')->plainTextToken;
    }

    public function infouser(Request $request){

        return $request->usuario();
    }
}
