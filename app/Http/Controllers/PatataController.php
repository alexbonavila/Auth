<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PatataController extends Controller
{
    public function getPatata()
    {
        echo "Soc una patata";
    }
}
