@extends('adminlte::page')

@section('title', 'Listado de Usuarios | Admin')

@section('content_header')
    <h1>Listado de Usuarios</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">

        <a href="/usuario/crear" class="btn btn-primary">Nuevo Usuario</a>
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>CORREO</th>
                    <th>ROLES</th>
                    <th>CREADO EN</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                
                @if(true)
                    @foreach($usuarios as $us)
                    <tr>
                        <td>{{$us->id}}</td>
                        <td>{{$us->name}}</td>
                        <td>{{$us->email}}</td>
                        <td>
                        @foreach($us->roles as $rol)
                        {{ $rol->name }}
                        @endforeach
                        </td>
                        <td>{{$us->created_at}}</td>
                        <td>
        
                        @if ($us->hasRole('Super Admin'))
  
                            <a href="/usuario/{{$us->id}}/editar" class="btn btn-warning"> <i class="fa fa-edit"></i></a>
        
                            @endif
                            <a href="/usuario/{{ $us->id }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
        
                            <form action="/usuario/{{$us->id}}" method="post" style="display:inline">
                                @csrf
                                @Method('DELETE')
                                <input type="submit" value="X" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

@stop