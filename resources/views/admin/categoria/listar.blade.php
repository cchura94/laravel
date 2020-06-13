@extends("layouts.admin")

@section("contenedor")

<h1>{{ $titulo }}</h1>

@if(session('ok'))
    <div class="alert alert-success">
    <p>{{ session('ok') }}</p>
    </div>
    
@endif

<a href="{{ route('categoria.create') }}" class="btn btn-info">Nueva Categoria</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <td>ID</td>
            <td>NOMBRE</td>
            <td>ACCIONES</td>        
        </tr>    
    </thead>
    <tbody>
        @foreach($categorias as $cat)
        <tr>
            <td>{{ $cat->id }}</td>
            <td>{{ $cat->nombre }}</td>
            <td>
                <!--a href="{{ route('categoria.show', $cat->id) }}" class="btn btn-success">ver</a-->
                <a href="{{ route('categoria.edit', $cat->id) }}" class="btn btn-warning">editar</a>

                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$cat->id}}">
  ver
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $cat->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ $cat->nombre }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      {{ $cat->descripcion }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#editar-{{$cat->id}}">
  editar modal
</button>

<!-- Modal -->
<div class="modal fade" id="editar-{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('categoria.update', $cat->id) }}" method="post">
        
      <div class="modal-body">
            @csrf
            @Method('PUT')
            <label for="nom">Nombre</label>
            <input type="text" id="nom" name="nombre" class="form-control" value="{{$cat->nombre}}">
            
            <label for="d">Descripción</label>
            <textarea name="descripcion" id="d" class="form-control">{{$cat->descripcion}}</textarea>

        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Modificar</button>
      </div>
      </form>
    </div>
  </div>
</div>


            </td>        
        </tr>
        @endforeach    
    </tbody>
</table>

{{ $categorias->links() }}
TOTAL CATEGORIAS: {{ $categorias->total() }}

@if(session('categoria'))
{{ session('categoria') }}
@endif


@endsection

