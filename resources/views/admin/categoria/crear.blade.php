@extends("layouts.admin")

@section("contenedor")

<h1>Nueva Categoria</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('categoria.store') }}" method="post">
    @csrf
    <label for="nom">Nombre</label>
    <input type="text" id="nom" class="form-control @error('nombre') is-invalid @enderror" name="nombre" class="form-control" required pattern="[a-zA-Z ]{2,30}" value="{{ old('nombre') }}">

    <label for="d">Descripción</label>
    <textarea name="descripcion" id="d" class="form-control">{{ old('descripcion') }}</textarea>

    <input type="submit" value="Guardar Categoria" class="btn btn-primary">
    <input type="reset">
</form>

@endsection
