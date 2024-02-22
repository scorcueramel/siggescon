<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validation = Validator::make(request()->all(), [
            "email" => ['required', 'email', 'max:50'],
            "password" => ['required'],
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }

        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        $remember = ($request->has("remember") ? true : false);

        if (Auth::attempt($credentials, $remember)) {
            return redirect()->route('posts.index')->with("success", "Bienvenido al sistema de gestión de conocimiento");
        } else {
            return redirect()->back()->withErrors(["error"=>"Valida tus credenciales"])->withInput();
        }
    }

    public function register(Request $request)
    {
        $validation = Validator::make(request()->all(), [
            'name' => ['required', 'string', 'max:30'],
            "email" => ['required', 'email', 'max:50'],
            "password" => ['required', 'confirmed'],
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }

        $newUser = new User();
        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->password = Hash::make($request->password);
        $newUser->save();

        Auth::login($newUser);

        return redirect()->route('posts.index')->with("success", "Bienvenido al sistema de gestión de conocimiento");
    }

    // public function logout(){

    // }
}
