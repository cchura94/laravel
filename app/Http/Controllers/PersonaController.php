<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function listar()
    {
        //return "Lista de Personas";
        return view("admin.persona.listar");
    }

    public function crear()
    {
        //return "Crear Nueva Persona";
        return view("admin.persona.crear");
    }

    public function ver($id)
    {
        //return "Mostrando: $id";
        return view("admin.persona.mostrar");
    }

    public function editar($id)
    {
        //return "Editando..  $id";
        return view("admin.persona.editar");
    }

    public function guardar(Request $request)
    {
        echo "Guardando";
        return $request;
    }

    public function modificar(Request $request, $id)
    {
        return $request;
    }

    public function eliminar($id)
    {
        return "eliminando $id";
    }

    public function buscador(Request $request)
    {
        $buscar = $request->nombre;  //$_GET['nombre'];
        //echo "Buscando:  $buscar";
        return view("admin.persona.listar");
    }
}
