<?php

use Illuminate\Support\Facades\Route;

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

//Funcion cerrada
Route::get('/', function () {    
    return view('welcome');
});


Route::get("/cursos", function(){
    echo "Mi Lista de Cursos";
});

Route::get("/lista-cursos", function(){
    $cursos = ["Laravel", "Spring", "Node.js", "Django", "Angular", "Vue.js"];
    return $cursos;
});

Route::get("/cursos/{nombre}", function($nom){
    return "<h1> $nom </h1>";
});

Route::get("/cursos/{nombre}/modulo/{mod}", function($nom, $mod){
    
    return "<h1> $nom Modulo : $mod </h1>";
});

Route::get("/nosotros", function(){
    
    return view("acerca");
});

