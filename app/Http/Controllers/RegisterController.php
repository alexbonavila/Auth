<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
    public function getRegister()
    {
        return view('register');
    }

    public function postRegister(Request $request)
    {

        $this->validate($request, [
            'name'=> 'required|max:100',
            'email'=> 'required|email|unique:users,email',
            'password'=> 'required | confirmed'
        ]);



        $user=new User();

        $user->name=$request->get('name');
        $user->password=$request->get('password');
        $user->email=$request->get('email');


        $user->save();

        return redirect(route('auth.login'));
    }
}
