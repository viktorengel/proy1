<?php

use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ProductoController;
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

/* Route::get('/hola', function () {
    return view('welcome');
}); */

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
/*  Route::get("/nosotros",function (){
    return view("nosotros");
 });

 Route::get("/productos", function(){
    return view("misproductos");
 });
 */

//Rutas con controlador

Route::get("/", [PaginaController::class,"inicio"]);
 
//Nosotros
Route::get("/intro", [PaginaController::class,"intro"]);
Route::get("/historia", [PaginaController::class,"historia"]);
Route::get("/autoridades", [PaginaController::class,"autoridades"]);

//Institución
Route::get("/datos", [PaginaController::class,"datos"]);
Route::get("/simbolos", [PaginaController::class,"simbolos"]);
Route::get("/uniformes", [PaginaController::class,"uniformes"]);
Route::get("/instalaciones", [PaginaController::class,"instalaciones"]);

//Académico
Route::get("/eva", [PaginaController::class,"eva"]);
Route::get("/sysNotas", [PaginaController::class,"sysNotas"]);
Route::get("/calif", [PaginaController::class,"calif"]);
Route::get("/horario", [PaginaController::class,"horario"]);
Route::get("/ofertaAcademica", [PaginaController::class,"ofertaAcademica"]);
Route::get("/consejoEst", [PaginaController::class,"consejoEst"]);
Route::get("/dece", [PaginaController::class,"dece"]);

//Contactenos
Route::get("/contactenos", [PaginaController::class, "contactenos"]);

//Productos
Route::get('/producto',[ProductoController::class, "listar"]);

Route::get('/producto/crear',[ProductoController::class, "crear"]); // cargar el form (creación)
Route::post('/producto',[ProductoController::class, "guardar"]);

Route::get('/producto/{id}',[ProductoController::class, "mostrar"]);

Route::get('/producto/{id}/editar',[ProductoController::class, "editar"]); // cargar el form (edicion) 
Route::put('/producto/{id}',[ProductoController::class, "modificar"]);

Route::delete('/producto/{id}',[ProductoController::class, "eliminar"]);