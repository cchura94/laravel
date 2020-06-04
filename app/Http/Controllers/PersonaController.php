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
        return "Mostrando: $id";
    }

    public function editar($id)
    {
        return "Editando..  $id";
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
}
