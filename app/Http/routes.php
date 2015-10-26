<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/resource', function () {


    $authenticated = false;
    Session::set('authenticated',true);
    //dd(Session::all());
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