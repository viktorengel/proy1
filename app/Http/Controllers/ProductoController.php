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
        return view("producto.nuevo");
    }

    public function guardar(Request $request)
    {
        $producto = [
            "nombre" => $request->nombre,
            "precio" => $request->precio,
            "cantidad" => $request->cantidad,
            "imagen" => $request->imagen,
            "descripcion" => $request->descripcion,
        ];

        DB::table("productos")->insert($producto);
        return redirect("/producto");
    }

    public function mostrar($id)
    {
        
    }

    public function editar($id)
    {
        $producto = DB::table("productos")->find($id);
        return view("producto.editar", compact("producto"));
    }

    public function modificar($id, Request $request)
    {
        
    }

    public function eliminar($id)
    {
        
    }
}

