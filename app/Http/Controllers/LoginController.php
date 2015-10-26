<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function postLogin(Request $request){
        dd:($request->all());
        \Debugbar::info("getLogin");
        echo"hola";

        if($this->login($request->email,$request->password)){
            //REDIRECT TO HOME
            return redirect()->route('auth.home');
        }else{
            //REDIRECT BACK
            return redirect()->route('auth.login');
        }
    }

    public function login($email, $password){
        return true;
    }

    public function getLogin(){
        return view('login');
    }
}
