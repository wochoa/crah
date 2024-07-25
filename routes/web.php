<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Paginasweb;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Auth::routes();
route::get('/menus',[Paginasweb::class,'menus'])->name('menus');
route::get('/pagina/{id}',[Paginasweb::class,'pagina'])->name('pagina');
// route::get('/convocatorias',[Paginasweb::class,'convocatorias'])->name('convocatorias');
route::get('/noticiasini',[Paginasweb::class,'noticiasini'])->name('noticiasini');
route::get('enlace_refe',[Paginasweb::class,'enlacerefe'])->name('enlacerefe');//secciones
route::get('secciones',[Paginasweb::class,'secciones'])->name('secciones');
route::get('allnoticias',[Paginasweb::class,'allnoticias'])->name('allnoticias');//allnoticias
route::get('noticias/{id}',[Paginasweb::class,'detnoticias'])->name('detnoticias');
// route::get('visitas',[Paginasweb::class,'visitas'])->name('visitas');
// route::get('buscarvisita/{bus}',[Paginasweb::class,'buscarvisita'])->name('buscarvisita');
route::get('listapopup',[Paginasweb::class,'listapopup'])->name('listapopup');
route::get('/normatividad/{text?}/{anio?}/{siglas?}/{descripcion?}/{bus?}',[Paginasweb::class,'normatividad'])->name('normatividad');

route::get('tipodoc',[Paginasweb::class,'tipodoc'])->name('tipodoc');
route::get('regulations',[Paginasweb::class,'regulations'])->name('regulations');


route::get('directorio/{dir?}',[Paginasweb::class,'directorio'])->name('directorio');//directorio

route::get('organigrama',[Paginasweb::class,'organigrama'])->name('organigrama');
route::get('unidad/{cod?}',[Paginasweb::class,'unidad'])->name('unidad');
route::get('fag',[Paginasweb::class,'fag'])->name('fag');
route::get('slider',[Paginasweb::class,'slider'])->name('slider');

// temas
route::get('tema',[Paginasweb::class,'tema'])->name('tema');


Route::get('/{any?}', [HomeController::class, 'show'])->where('any', '^(?!api\/)[\/\w\.-]*');
