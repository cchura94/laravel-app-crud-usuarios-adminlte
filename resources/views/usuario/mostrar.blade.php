<h1>Mostrar datos </h1>

    @csrf
    @Method('PUT')
    <label for="">Ingrese su Nombre</label>
    <input type="text" name="nombre" value="{{ $usuario->name }}" disabled>
    <br>
    <label for="">Ingrese su Correo</label>
    <input type="email" name="correo" value="{{ $usuario->email }}" disabled>
    <br>
    <!--<input type="checkbox"> ¿Modificar Contraseña?-->
   
    <h1>ROLES: </h1>
    @foreach($usuario->roles as $rol)
    {{ $rol->name }}
    @endforeach
   
    <h1>PERMISOS: </h1>

    @if(count($usuario->roles)>0)
    @foreach($usuario->roles[0]->permissions as $per)
    {{$per->name}} - 
    @endforeach

    @endif
<a href="/usuario">VOLVER</a>