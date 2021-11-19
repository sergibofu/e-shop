<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ConnectController extends Controller
{
    public function getLogin(){
        return view('connect.login');
    }

    public function getRegister(){
        return view('connect.register');
    }

    public function getLogout(){
        Auth::logout();
        return redirect('/');
    }

    public function postRegister(Request $req){
        //nuestras normas de validacion y mensajes de respuesta
        $rules = [
            'name'      =>       'required',
            'email'     =>       'required|email|unique:users,email',
            'password'  =>       'required|min:8',
            'cpassword' =>       'required|same:password'
        ];

        $messages = [
            "name.required" => "El nombre es requerido",
            "email.required" => "El correo electrónico es requerido",
            "email.email" => "El formato de su correo electrónico es invalido",
            "password.required" => "La contraseña es requerida",
            "password.min" => "La contraseña debe tener al menos 8 caracteres",          
            "cpassword.required" => "La contraseña es requerida",
            "cpassword.required" => "Las contraseñas no coinciden"
        ];

        //validamos nuestros parametros 
        $validated = $req->validate($rules, $messages);
        
        //declaramos nuestro modelo y guardamos los datos en la bbdd
        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = Hash::make($validated['password']);

        if($user->save()):
            return redirect('/login')->with('message','Su usuario se creo con exito')->with('alertType', 'success');
        endif;

            
    }

    public function postLogin(Request $req){

        //nuestras normas
        $rules = [
            'email'     =>       'required|email',
            'password'  =>       'required|min:8'
        ];

        $messages = [
            "email.required" => "El correo electrónico es requerido",
            "email.email" => "El formato de su correo electrónico es invalido",
            "password.required" => "La contraseña es requerida",
            "password.min" => "La contraseña debe tener al menos 8 caracteres"
        ];
       

        //declaramos el validador
        $validated = $req->validate($rules, $messages);

        if(Auth::attempt(['email'=>$validated['email'], 'password' => $validated['password']],true)):
            return redirect('/');
        else: 
            return redirect('/login')->with('message','Error iniciando sesion')->with('alertType', 'danger');
        endif;


        

    }
}
