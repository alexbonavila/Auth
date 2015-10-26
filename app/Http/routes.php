<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/resource', function () {


    $authenticated = false;
    Session::set('authenticated',true);
    //dd(Session::all());
    \Debugbar::info("xXivato1!!!!");
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