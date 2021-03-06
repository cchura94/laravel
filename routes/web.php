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
    return view('inicio');
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

Route::middleware(['auth'])->group(function () {


    Route::get("/persona/buscar", "PersonaController@buscador");

    Route::get("/persona", "PersonaController@listar")->name("lista_personas");
    Route::get("/persona/crear", "PersonaController@crear")->name("crear_personas");
    Route::get("/persona/{id}", "PersonaController@ver")->name("ver_personas");
    Route::get("/persona/{id}/editar", "PersonaController@editar")->name("editar_personas");

    Route::post("/persona", "PersonaController@guardar");
    Route::put("/persona/{id}", "PersonaController@modificar");
    Route::delete("/persona/{id}", "PersonaController@eliminar")->middleware('auth');

    //Ruta con recursos para un controlador
    Route::resource("/categoria", "CategoriaController")->middleware('auth');
    Route::resource("proveedor", "ProveedorController")->middleware('auth');

    //Route::resource("producto", "ProductoController");


    Route::get("/producto", "ProductoController@index")->name("producto.index")->middleware('auth');
    Route::get("/producto/create", "ProductoController@create")->name("producto.create");
    Route::get("/producto/{id}", "ProductoController@show")->name("producto.show");
    Route::get("/producto/{id}/edit", "ProductoController@edit")->name("producto.edit");

    Route::post("/producto", "ProductoController@store")->name("producto.store");
    Route::put("/producto/{id}", "ProductoController@update")->name("producto.update");
    Route::delete("/producto/{id}", "ProductoController@destroy")->name("producto.destroy");

    

    Route::get('/home', 'HomeController@index')->name('home');

});

Auth::routes(['register' => false]);
