<h1>Editar Datos</h1>
{{ $usuario }}

<form action="/usuario/{{$usuario->id}}" method="post">
    @csrf
    @Method('PUT')
    <label for="">Ingrese su Nombre</label>
    <input type="text" name="nombre" value="{{ $usuario->name }}">
    <br>
    <label for="">Ingrese su Correo</label>
    <input type="email" name="correo" value="{{ $usuario->email }}">
    <br>
    <!--<input type="checkbox"> ¿Modificar Contraseña?-->
    <br>
    <label for="">Ingrese su Contraseña</label>
    <input type="password" name="password">
    <br>

    <input type="submit" value="Modificar">
    
</form>