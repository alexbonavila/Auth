<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

/**
 * Class LoginController
 * @package App\Http\Controllers
 */
class LoginController extends Controller
{
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $email = $request->get("email");
        $password = $request->get("password");
        if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
            // Authentication passed...
            return redirect()->route('auth.home');
        }
        else
        {
            return redirect()->route('auth.getLogin');
        }
    }
    /**
     * @return \Illuminate\View\View
     */
    public function getLogin()
    {
        return view('login');
    }

//    /**
//     * Process a login HTTP POST
//     * @param Request $request
//     * @return \Illuminate\Http\RedirectResponse
//     */
//    public function postLogin(Request $request){
//        //dd:($request->all());
//        //\Debugbar::info("getLogin");
//        //echo"hola";
//
//        if($this->login($request->email,$request->password)){
//            //REDIRECT TO HOME
//            return redirect()->route('auth.home');
//        }else{
//            //REDIRECT BACK
//            return redirect()->route('auth.login');
//        }
//    }
//
//    /**
//     * @param $email
//     * @param $password
//     * @return bool
//     */
//    public function login($email, $password){
//
//        //$user= User::findOrFail(id);
//        //$user= User::all();
//        $user= User::where('email',$email)->first();
//        if($user==null){
//            return false;
//        }
//        if($user->password == $password){
//            return true;
//        }else{
//            return false;
//        }
//
//    }
}
