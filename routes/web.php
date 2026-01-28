<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;

// rutas (Closures)
Route::get('/saludo', function (){
    $saludo  = "Hola desde el Framework Laravel";
    return $saludo;
});

Route::get('/tecnologias', function (){
    $tecnologias = ["PHP", "JAVA", "Javascript", "GO", "Typescript",];

    return $tecnologias;
});

Route::get('/persona', function (){
    $persona = [
        "nombre" => "Juan",
        "apellido" => "Perez",
        "edad" => 30,
        "tecnologias" => [
            "Java",
            "Python"
        ]
    ];

    return $persona;
});

Route::get('/personas', function (){
    $per1 = [
        "nombre" => "Juan",
        "apellido" => "Perez",
        "edad" => 30,
        "tecnologias" => [
            "Java",
            "Python"
        ]
    ];

    $per2 = [
        "nombre" => "Maria",
        "apellido" => "Perez",
        "edad" => 25,
        "tecnologias" => [
            "PHP",
            "Javascript"
        ]
    ];

    return [$per1, $per2];
});

// rutas con parametros
Route::get("/nombre/{n}/edad/{edad}", function($nom, $e){
    return [
        "nombre" => $nom,
        "edad" => $e
    ];
});

// rutas con retorno de Vistas
Route::get('/login', function(){
    return view('ingresar');
});

// rutas con controladores
Route::get("/", [WebController::class, "funInicio"]);
Route::get("/nosotros", [WebController::class, "funNosotros"]);
Route::get("/servicios", [WebController::class, "funServicios"]);
Route::get("/blog", [WebController::class, "funBlog"]);

// CRUD USUARIOS CONTROLLER

Route::middleware('auth')->group(function(){

    // 1. Crear el controlador: (php artisan make:controller UsuarioController)
    Route::get('/usuario', [UsuarioController::class, "funListar"]);
    Route::get('/usuario/crear', [UsuarioController::class, "funCrear"]);
    Route::post('/usuario', [UsuarioController::class, "funGuardar"])->name("usuario.guardar");
    Route::get('/usuario/{id}', [UsuarioController::class, "funMostrar"]);
    Route::get('/usuario/{id}/editar', [UsuarioController::class, "funEditar"]);
    Route::put('/usuario/{id}', [UsuarioController::class, "funModificar"]);
    Route::delete('/usuario/{id}', [UsuarioController::class, "funEliminar"]);
    
    Route::resource("/producto", ProductoController::class);
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
