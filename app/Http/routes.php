<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/resource', function () {

    $authenticated = false;
    if(Session::has('authenticated')) {
        if(Session::get('authenticated')== true ){
            $authenticated= true;
        }
    }

    if($authenticated){
        return view('resource');
    } else{
        return view('login');
    }

});