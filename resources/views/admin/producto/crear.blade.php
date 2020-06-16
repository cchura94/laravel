@extends("layouts.admin")

@section("contenedor")

<h1>Nuevo Producto</h1>

<form action="{{ route('producto.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="">Nombre Producto: </label>
    <input type="text" class="form-control" name="nombre">

    <label for="">Precio Producto: </label>
    <input type="number" step="0.01" class="form-control" name="precio">

    <label for="">Cantidad Producto: </label>
    <input type="number" class="form-control" name="cantidad">

    <label for="">Imagen Producto: </label>
    <input type="file" class="form-control" name="imagen">

    <label for="">Descripcion Producto: </label>
    <textarea name="descripcion" class="form-control"></textarea>

    <label for="">Categoria Producto: </label>
    
    <select name="categoria_id" id="" class="form-control">
        @foreach($categorias as $cat)
        <option value="{{ $cat->id }}">{{ $cat->nombre }}</option>
        @endforeach
    </select>

    <input type="submit" value="guardar" class="btn btn-primary">
    
    <br>
</form>

@endsection
