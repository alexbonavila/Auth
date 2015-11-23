<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use stdClass;

class RegisterController extends Controller
{
    protected $name;
    protected $email;
    public function getRegister()
    {
        return view('register');
    }

    public function sendRegisterEmail()
    {
        $emailData = new stdClass();

        $emailData->email=$this->email;
        $emailData->name= $this->name;
        $emailData->subject= "wellcome ".$this->name;

        $data['name']=$this->name;

        \Mail::send('emails.message',$data, function($message)use($emailData){
        $message->from(env('CONTACT_MAIL'),env('CONTACT_NAME'));
        $message->to($emailData->email,$emailData->name);
        $message->subject($emailData->subject);
    });
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
/*
        $this->email= $user->get('email');
        $this->email= $user->get('name');

        $this->sendRegisterEmail();
*/
        return redirect(route('auth.login'));
    }
}
