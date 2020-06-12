@extends("layouts.admin")

@section("contenedor")

<h1>Nueva Categoria</h1>

<form action="{{ route('categoria.store') }}" method="post">
    @csrf
    <label for="nom">Nombre</label>
    <input type="text" id="nom" name="nombre" class="form-control">
    
    <label for="d">Descripción</label>
    <textarea name="descripcion" id="d" class="form-control"></textarea>

    <input type="submit" value="Guardar Categoria" class="btn btn-primary">
    <input type="reset">
</form>

@endsection
