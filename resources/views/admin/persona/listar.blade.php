@extends("layouts.admin")

@section("contenedor")


    <h1>Lista de Personas</h1>

    <a href="/persona/crear" class="btn btn-outline-primary btn-sm">Nueva Persona</a>
    <table class="table table-striped table-hover">
        <tr>
            <td>ID</td>
            <td>NOMBRE</td>
            <td>CI</td>
            <td>ACCIONES</td>
        </tr>

        <tr>
            <td>1</td>
            <td>Juan</td>
            <td>932238</td>
            <td>
                <a class="btn btn-success btn-xs" href="/persona/juan">ver</a>
                <a class="btn btn-warning btn-xs" href="/persona/juan/editar">editar</a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Cristian</td>
            <td>23345323</td>
            <td>
                <a href="">ver</a>
                <a href="">editar</a>
            </td>
        </tr>

        <tr>
            <td>3</td>
            <td>Maria</td>
            <td>23432234</td>
            <td>
                <a href="">ver</a>
                <a href="">editar</a>
            </td>
        </tr>
    
    </table>

@endsection