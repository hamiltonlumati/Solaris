<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApresentacaoDosDadosController;
use App\Http\Controllers\NotificacoesController;
use App\Http\Controllers\RecepcaoDosDadosController;
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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/graficos', [ApresentacaoDosDadosController::class, 'apresentacao'])
    ->middleware(['auth', 'verified'])
    ->name('graficos');

Route::get('/notificacoes', [NotificacoesController::class, 'Notificacoes'])
    ->middleware(['auth', 'verified'])
    ->name('notificacoes');

Route::post('/post/{tempAmbiente}/{tempPainel}/{tensao0}/{tensao1}/{corrente}', 
    [RecepcaoDosDadosController::class, 'post'])->name('recepcao');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
