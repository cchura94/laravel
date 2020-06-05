<h1>Editar Persona</h1>

<form action="/persona" method="post">
    @csrf
    <label for="">Nombre</label>
    <input type="text" name="nombre" value="Juan">
    <br>
    <label for="">CI</label>
    <input type="text" name="ci" value="9239423">
    <br>
    <input type="submit" value="Modificar">   

</form>