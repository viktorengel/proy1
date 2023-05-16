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
        //subir la imagen
        $direccion_imagen = "";
        if($file = $request->file("imagen")){
            $direccion_imagen = time() . "-" . $file->getClientOriginalName();
            $file->move("imagenes/", $direccion_imagen);

            $direccion_imagen = "imagenes/" . $direccion_imagen;
        }

        $producto = [
            "nombre" => $request->nombre,
            "precio" => $request->precio,
            "cantidad" => $request->cantidad,
            "imagen" => $direccion_imagen,
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

            //subir la imagen
            $direccion_imagen = "";
            if($file = $request->file("imagen")){
                $direccion_imagen = time() . "-" . $file->getClientOriginalName();
                $file->move("imagenes/", $direccion_imagen);
    
                $direccion_imagen = "imagenes/" . $direccion_imagen;
            }
        $producto = [
            "nombre" => $request->nombre,
            "precio" => $request->precio,
            "cantidad" => $request->cantidad,
            "imagen" => $direccion_imagen,
            "descripcion" => $request->descripcion,
        ];

        DB::table("productos")->where('id', $id)->update($producto);
        return redirect("/producto");
    }

    public function eliminar($id)
    {
        
    }
}

