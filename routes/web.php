<?php

use App\Models\{Art,Article};
use App\Http\Controllers\{UpgradeController, ProfileController};
use App\Livewire\{Collection, Generate};
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

Route::get('/', function (){
    $arts = Art::latest()->take(15)->get();
    $articles = Article::latest()->take(3)->get();
    return view('index', compact('arts', 'articles'));
});

Route::get('dashboard/generate', Generate::class)->middleware('auth')->name('generate');
Route::get('dashboard/collection', Collection::class)->middleware('auth')->name('collection');

Route::prefix('upgrade')->controller(UpgradeController::class)->group(function (){
    Route::get('/', 'index');
    Route::post('pay/{plan}', 'pay');
    Route::get('verify', 'verify');
});

// Breeze Routes
Route::get('/dashboard', fn () => view('dashboard'))->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
