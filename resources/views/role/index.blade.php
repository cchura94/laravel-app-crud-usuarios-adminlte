@extends('adminlte::page')

@section('title', 'Listado de Roles | Admin')

@section('content_header')
    <h1>Listado de Roles</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">

        <a href="/usuario/crear" class="btn btn-primary">Nuevo Role</a>
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>PREMISOS</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                
                    @foreach($roles as $rol)
                    <tr>
                        <td>{{$rol->id}}</td>
                        <td>{{$rol->name}}</td>
                        <td>
                            <ul>
                                @foreach($rol->permissions as $per)
                                <li>{{ $per->name }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
        
                        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal{{$rol->id}}">
    Asignar Nuevo Permiso
</button>

<!-- Modal -->
<div class="modal fade" id="modal{{$rol->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Asignar Nuevo Permiso a {{ $rol->name }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/role/{{ $rol->id }}/permiso" method="post">
        @csrf
      <div class="modal-body">
        <select name="permiso_id" id="" class="form-control">
            <option value="">Seleccione un Permiso</option>
            @foreach($permisos as $permi)
            <option value="{{$permi->id}}">{{ $permi->name }}</option>
            @endforeach
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Asignar Permiso</button>
      </div>
      </form>
    </div>
  </div>
</div>
                            <a href="/role/{{$rol->id}}/edit" class="btn btn-warning"> <i class="fa fa-edit"></i></a>
                      
                            <a href="/role/{{ $rol->id }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                      
                            <form action="/role/{{$rol->id}}" method="post" style="display:inline">
                                @csrf
                                @Method('DELETE')
                                <input type="submit" value="X" class="btn btn-danger">
                            </form>
                  
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop