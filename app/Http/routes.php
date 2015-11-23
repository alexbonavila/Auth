<?php

Route::get('/login'     ,['as'=>'auth.login',     'uses' => 'LoginController@getLogin']);
Route::post('/postLogin',['as'=>'auth.postLogin', 'uses' => 'LoginController@postLogin']);



Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',['as'=>'auth.home', function () {
    return view('home');
}]);

Route::get('/resource', function () {
/*
    $authenticated = false;
    //Session::set('authenticated',true);
    //dd(Session::all());

   if(Session::has('authenticated')) {
        if(Session::get('authenticated')){
            $authenticated= true;
       }
    }

    if($authenticated){
       return view('resource');
    } else{
       return redirect()->route('auth.login');
    }
*/

    if(Auth::check()){
        return view('resource');
    }else{
        return redirect()->route('auth.login');
    }

});

Route::get('/flush',function(){
    Session::flush();
});

Route::get('/register',
    ['as'=>'auth.register','uses' => 'RegisterController@getRegister']
);
Route::post('/postRegister',['as'=>'auth.postRegister', 'uses' => 'RegisterController@postRegister']);