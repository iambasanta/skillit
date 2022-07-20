<?php

use App\Http\Controllers\Admin\AdminDashobardController;
use App\Http\Controllers\Admin\AdminSessionController;
use App\Http\Controllers\Admin\AdminWorkshopController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\WorkshopController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.register');
});

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/home', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/workshops', [WorkshopController::class, 'index'])->name('workshops');

    Route::get('/sessions', [SessionController::class, 'index'])->name('sessions');

    Route::patch('/workshops/{workshop}/register', [ProfileController::class, 'registerForWorkshop'])->name('workshops.register');

    Route::patch('/sessions/{session}/register', [ProfileController::class, 'registerForSession'])->name('sessions.register');
});


Route::get('user/profile', [ProfileController::class, 'show'])->name('user.profile');
Route::patch('user/profile', [ProfileController::class, 'update'])->name('user.update');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::group(['middleware' => ['auth', 'can:admin']], function () {
        Route::get('/', [AdminDashobardController::class, 'index'])->name('index');

        Route::get('/workshops', [AdminWorkshopController::class, 'index'])->name('workshops.index');
        Route::get('/workshops/create', [AdminWorkshopController::class, 'create'])->name('workshops.create');
        Route::post('/workshops', [AdminWorkshopController::class, 'store'])->name('workshops.store');
        Route::get('/workshops/{workshop}', [AdminWorkshopController::class, 'show'])->name('workshops.show');
        Route::get('/workshops/{workshop}/edit', [AdminWorkshopController::class, 'edit'])->name('workshops.edit');
        Route::patch('/workshops/{workshop}/edit', [AdminWorkshopController::class, 'update'])->name('workshops.update');
        Route::delete('/workshops/{workshop}/delete', [AdminWorkshopController::class, 'destroy'])->name('workshops.destroy');
        Route::get('/workshops/{workshop}/registrants', [AdminWorkshopController::class, 'savePDF'])->name('workshops.registrants.download');

        Route::get('/sessions', [AdminSessionController::class, 'index'])->name('sessions.index');
        Route::get('/sessions/create', [AdminSessionController::class, 'create'])->name('sessions.create');
        Route::post('/sessions', [AdminSessionController::class, 'store'])->name('sessions.store');
        Route::get('/sessions/{session}', [AdminSessionController::class, 'show'])->name('sessions.show');
        Route::get('/sessions/{session}/edit', [AdminSessionController::class, 'edit'])->name('sessions.edit');
        Route::patch('/sessions/{session}/edit', [AdminSessionController::class, 'update'])->name('sessions.update');
        Route::delete('/sessions/{session}/delete', [AdminSessionController::class, 'destroy'])->name('sessions.destroy');
        Route::get('/sessions/{session}/registrants', [AdminSessionController::class, 'savePDF'])->name('sessions.registrants.download');

        Route::get('/registrants', [AdminDashobardController::class, 'savePDF'])->name('registrants.download');
    });
});

require __DIR__ . '/auth.php';
