<?php

use App\Http\Controllers\PaginaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/hola', function () {
    return view('welcome');
});

//Closure
/* Route::get('/saludo', function(){
    return "Hola mundo desde web.php";
});

Route::get("/docs/9.x", function (){
   return "Laravel version 9.x";
}); */

//Para recibir datos por URL
/* Route::get("/docs/{version}", function ($ver){
    return "Laravel version $ver";
 }); */

 //return con view
 Route::get("/nosotros",function (){
    return view("acercade");
 });

 Route::get("/productos", function(){
    return view("misproductos");
 });

 //Rutas con controlador
 Route::get("/servicios", [PaginaController::class, "misServicios"]);

 Route::get("/", [PaginaController::class,"inicio"]);