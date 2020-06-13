<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // listar
        //$datos = select * from categorias
        /*$categorias = [
            ["nombre" => "ropa",
             "descripcion" => "ropa de niños"
            ],
            ["nombre" => "muebles",
             "descripcion" => "muebles de Oficina"
            ],
        ];*/
        //$categorias = Categoria::All();
        $categorias = Categoria::paginate(3);

        $titulo = "Lista de Categorias Prueba";
        return view("admin.categoria.listar", ["categorias" => $categorias, "titulo" => $titulo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // crear
        
        return view("admin.categoria.crear");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validación
        $request->validate([
            "nombre" => "required|min:2|max:30|unique:categorias"
        ]);
        // guardar
        //return $request;
        $cat = new Categoria;
        $cat->nombre = $request->nombre;
        $cat->descripcion = $request->descripcion;
        $cat->save();
        
        return redirect("/categoria")->with('ok', 'Categoria Registrado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = Categoria::find($id);
        return redirect("/categoria")->with("categoria", $categoria);

        $otrodato = "Otro Dato";
        // ver
        //return view("admin.categoria.mostrar", ["id" => $id]);
        //return view("admin.categoria.mostrar")->with("id", $id);
        return view("admin.categoria.mostrar", compact("id", "otrodato"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // editar
        $categoria = Categoria::find($id);
        return view("admin.categoria.editar", compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // modificar
        $cat = Categoria::find($id);
        $cat->nombre = $request->nombre;
        $cat->descripcion = $request->descripcion;
        $cat->save();
        
        return redirect("/categoria")->with('ok', 'Categoria Modificada Correctamente');
    


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // eliminar
    }
}
