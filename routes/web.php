<?php

use App\Http\Controllers\EventoController;
use App\Http\Controllers\OrganizadorController;
use App\Http\Controllers\ParticipacionController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/evento",[EventoController::class,'index'])->name("evento.index");
Route::post("/evento",[EventoController::class,'store'])->name("evento.store");
Route::get("/evento/create",[EventoController::class,'create'])->name("evento.create");
Route::delete('/evento/{id}', [EventoController::class, 'destroy'])->name('evento.destroy');
Route::put('/evento/{id}', [EventoController::class, 'update'])->name('evento.update');
Route::get('/evento/{id}/edit', [EventoController::class, 'edit'])->name('evento.edit');

Route::get("/participacion",[ParticipacionController::class,'index'])->name("participacion.index");
Route::post("/participacion",[ParticipacionController::class,'store'])->name("participacion.store");
Route::get("/participacion/create",[ParticipacionController::class,'create'])->name("participacion.create");
Route::delete("/participacion/{id}",[ParticipacionController::class,'destroy'])->name("participacion.destroy");
Route::put("/participacion/{id}",[ParticipacionController::class,'update'])->name("participacion.update");
Route::get("/participacion/{id}/edit",[ParticipacionController::class,'edit'])->name("participacion.edit");

Route::get("/organizador",[OrganizadorController::class,'index'])->name("organizador.index");
Route::post("/organizador",[OrganizadorController::class,'store'])->name("organizador.store");
Route::get("/organizador/create",[OrganizadorController::class,'create'])->name("organizador.create");
Route::delete('/organizador/{id}', [OrganizadorController::class, 'destroy'])->name('organizador.destroy');
Route::put('/organizador/{id}', [OrganizadorController::class, 'update'])->name('organizador.update');
Route::get('/organizador/{id}/edit', [OrganizadorController::class, 'edit'])->name('organizador.edit');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
