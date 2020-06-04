<h1>Nueva Persona</h1>

<form action="/persona" method="post">
    @csrf
    <label for="">Nombre</label>
    <input type="text" name="nombre">
    <br>
    <label for="">CI</label>
    <input type="text" name="ci">
    <br>
    <input type="submit">   

</form>