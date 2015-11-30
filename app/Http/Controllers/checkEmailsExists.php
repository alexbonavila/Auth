<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class checkEmailsExists extends Controller
{
    public function checkEmailsExists()
    {
        $email= Input::get('email');

        if($this->checkEmail($email)){
            return "true";
        }else{
            return "false";
        }

        return"comprovant";
   }
    private function checkEmail($email){
        return true;
    }
}
