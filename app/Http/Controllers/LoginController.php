<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

/**
 * Class LoginController
 * @package App\Http\Controllers
 */
class LoginController extends Controller
{
    /**
     * Process a login HTTP POST
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postLogin(Request $request){
        //dd:($request->all());
        //\Debugbar::info("getLogin");
        //echo"hola";

        if($this->login($request->email,$request->password)){
            //REDIRECT TO HOME
            return redirect()->route('auth.home');
        }else{
            //REDIRECT BACK
            return redirect()->route('auth.login');
        }
    }

    /**
     * @param $email
     * @param $password
     * @return bool
     */
    public function login($email, $password){
        return true;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function getLogin(){
        return view('login');
    }
}
