<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{

    public function listar()
    {
        $productos = DB::select("select * from productos");

        return view("producto.listar", compact("productos"));
    }
    
    public function crear()
    {
        
    }

    public function guardar(Request $request)
    {
        
    }

    public function mostrar($id)
    {
        
    }

    public function editar($id)
    {
        
    }

    public function modificar($id, Request $request)
    {
        
    }

    public function eliminar($id)
    {
        
    }
}

