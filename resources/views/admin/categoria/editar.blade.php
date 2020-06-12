@extends("layouts.admin")

@section("contenedor")

<h1>Editando categoria</h1>

<form action="{{ route('categoria.update', $categoria->id) }}" method="post">
    @csrf
    @Method('PUT')
    <label for="nom">Nombre</label>
    <input type="text" id="nom" name="nombre" class="form-control" value="{{$categoria->nombre}}">
    
    <label for="d">Descripción</label>
    <textarea name="descripcion" id="d" class="form-control">{{$categoria->descripcion}}</textarea>

    <input type="submit" value="Modificar Categoria" class="btn btn-primary">
    <input type="reset">
</form>


@endsection