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
    echo "Mi Lista de cursos";
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

Route::get("/contacto", function(){
    return view("contacto"); 
});

Route::get("/persona/buscar", "PersonaController@buscador");

Route::get("/persona", "PersonaController@listar")->name("lista_personas");
Route::get("/persona/crear", "PersonaController@crear")->name("crear_personas");
Route::get("/persona/{id}", "PersonaController@ver")->name("ver_personas");
Route::get("/persona/{id}/editar", "PersonaController@editar")->name("editar_personas");

Route::post("/persona", "PersonaController@guardar");
Route::put("/persona/{id}", "PersonaController@modificar");
Route::delete("/persona/{id}", "PersonaController@eliminar");

//Ruta con recursos para un controlador
Route::resource("/categoria", "CategoriaController");
