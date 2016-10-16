<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test',function(){
      return "this is test";
});

Route::get('/hello',function(){
      return "Hello Laravel[GET]";
});

Route::get('/testPost',function(){
      $csrf_token = csrf_token();
      $form = <<<FORM
            <form action="/hello" method="post">
                  <input type="hidden" name="_token" value="{$csrf_token}">
                  <input type="submit"  value="Test">
            </form>
FORM;
      return $form;
});

Route::post('/hello',function(){
      return "Hello Laravel[POST]";
});
