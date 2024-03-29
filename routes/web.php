<?php

use App\Http\Controllers\{ClientController, UpgradeController, ProfileController};
use App\Livewire\{Chat, Collection, Generate};
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

Route::get('dashboard/generate', Generate::class)->middleware('auth')->name('generate');
Route::get('dashboard/collection', Collection::class)->middleware('auth')->name('collection');
Route::get('dashboard/chat', Chat::class)->middleware('auth')->name('chat');

Route::controller(ClientController::class)->group(function (){
    Route::get('/', 'home');
    Route::get('articles/{article:slug}', 'article');
    Route::get('vitrine', 'vitrine');
});

Route::prefix('upgrade')->controller(UpgradeController::class)->group(function (){
    Route::get('/', 'index');
    Route::post('pay/{plan}', 'pay')->middleware('auth');
    Route::get('verify', 'verify')->middleware('auth');
});

// Breeze Routes
Route::get('/dashboard', fn () => view('dashboard'))->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
