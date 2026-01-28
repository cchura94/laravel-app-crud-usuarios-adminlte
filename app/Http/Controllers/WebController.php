<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function funInicio(){
        return view("inicio");
    }

    public function funNosotros(){
        return view("nosotros");
    }

    public function funServicios(){
        return view("servicios");
    }

    public function funBlog(){
        return view("blog");
    }
}
