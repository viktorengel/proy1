<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function inicio()
    {
        $titulo = "Institución Educativa Pomasqui";

        $imagenes = ["https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Coat_of_arms_of_Ecuador.svg/500px-Coat_of_arms_of_Ecuador.svg.png","https://previews.123rf.com/images/vector3dgraphics/vector3dgraphics1612/vector3dgraphics161200100/68697860-ecuador-sello-rep%C3%BAblica-de-la-bandera-de-ecuador-art-vectorial.jpg","https://images.freeimages.com/vhq/images/istock/previews/6226/62261462-seal-of-ecuador.jpg"];

        //return view("inicio", ["titulo" => $titulo, "imagenes" => $imagenes]);
        
        //return view("inicio", compact("titulo", "imagenes"));

        return view("inicio")->with("titulo", $titulo)->with("imagenes", $imagenes);

    }

//Nosotros

    public function intro(){
        return view("nosotros/intro");
    }

    public function historia(){
        return view("nosotros/historia");
    }

    public function autoridades(){
        return view("nosotros/autoridades");
    }

//Institución

    public function datos(){
        return view("institucion/datos");
    }
    public function simbolos(){
        return view("institucion/simbolos");
    }
    public function uniformes(){
        return view("institucion/uniformes");
    }
    public function instalaciones(){
        return view("institucion/instalaciones");
    }

//Académico

    public function eva(){
        return  view("academico/eva");
    }
    public function sysNotas(){
        return  view("academico/sysNotas");
    }
    public function calif(){
        return  view("academico/calif");
    }
    public function horario(){
        return  view("academico/horario");
    }
    public function ofertaAcademica(){
        return  view("academico/ofertaAcademica");
    }
    public function consejoEst(){
        return  view("academico/consejoEst");
    }
    public function dece(){
        return  view("academico/dece");
    }

//Contactenos
    public function contactenos(){   
        return view("/contactenos");
    }
}