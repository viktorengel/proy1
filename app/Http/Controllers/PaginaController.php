<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function inicio()
    {
        # code...
        return view("miInicio");
    }

    public function acercadenosotros()
    {
        # code...
    }

    public function misServicios()
    {
        # code...
        return view("nuestrosservicios");
    }

    public function productos()
    {
        # code...
    }

    public function login()
    {
        # code...
    }
}