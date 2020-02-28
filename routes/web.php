<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/dinamica/{flag}/outro', function ($flag) {
    return "imprime o parametro {$flag}";
});
Route::get('/dinamica/{flag}', function ($diferente) {
    return "Imprime o parametro {$diferente}";
});
Route::get("/testandosubdiretorio",function (){
   return view('subdiretorio.testando');
});
Route::get("/view", function(){
   return view('teste');
});
Route::any('/any', function (){
   return "Any aceita qualquer verbo http";
});
Route::get('/contato', function () {
    return "contato";
});
Route::get('/', function () {
    return view('welcome');
});
