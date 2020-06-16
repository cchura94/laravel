@extends("layouts.admin")

@section("contenedor")

<h1>Mostrar categoria</h1>

    <label for="nom">Nombre</label>
    <input type="text" id="nom" name="nombre" class="form-control" value="{{$categoria->nombre}}" disabled>
    
    <label for="d">Descripción</label>
    <textarea name="descripcion" id="d" class="form-control" disabled>{{$categoria->descripcion}}</textarea>


    <table class="table">
        <tr>
            <td>NOMBRE</td>
            <td>PRECIO</td>
            <td>CANTIDAD</td>
            <td>COSTO TOTAL</td>
            <td>IMAGEN</td>
        </tr>

        @foreach($categoria->productos as $prod)
        <tr>
            <td>{{ $prod->nombre }}</td>
            <td>{{ $prod->precio }}</td>
            <td>{{ $prod->cantidad }}</td>
            <td>{{ $prod->precio * $prod->cantidad }}</td>
            <td>
                <img src="/{{ $prod->imagen }}" alt="" width="100px">
            </td>
        </tr>
        @endforeach

    </table>

@endsection