<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function inicio()
    {
        return view("inicio");
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