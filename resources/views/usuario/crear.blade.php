@extends('adminlte::page')

@section('title', 'Editar Usuario | Admin')

@section('content_header')
    <h1>Formulario de Creación </h1>
@stop

@section('content')

<div class="row">
    <div class="col-md-6">

        <div class="card">
            <div class="card-body">
        
                <form action="/usuario" method="post">
                    @csrf
                    <label for="">Ingrese su Nombre</label>
                    <input type="text" name="nombre" class="form-control">
                    <br>
                    <label for="">Ingrese su Correo</label>
                    <input type="email" name="correo"  class="form-control">
                    <br>
                
                    <label for="">Ingrese su Contraseña</label>
                    <input type="password" name="password" class="form-control">
                    <br>
                
                    <input type="submit" value="Guardar" class="btn btn-success">
                    
                </form>
            </div>
        </div>
    </div>
</div>


@stop