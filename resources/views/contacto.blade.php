@extends('layouts.sitio')

@section("contenedor")

    <h1>Contáctenos</h1>

    <form action="" method="post">
        <label for="">Nombre</label>
        <input type="text" name="nombre" class="form-control">

        <br>

        <label for="">Mensaje</label>
        <textarea name="mensaje" id="" cols="30" rows="10" class="form-control"></textarea>

        <br>
        <input type="submit">
    </form>
@endsection