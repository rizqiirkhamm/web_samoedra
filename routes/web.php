<?php

use App\Http\Controllers\BermainController;
use App\Http\Controllers\BimbelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\LayananController;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => 'useradmin'], function() {
    Route::get('/dashboard' , [DashboardController::class, 'index'])->name('dashboard');


    Route::get('/role', [RoleController::class, 'list']) ->name('list');
    Route::get('/role/add', [RoleController::class, 'add'])->name('add');
    Route::post('/role/add', [RoleController::class, 'insert']);
    Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->name('edit');
    Route::post('/role/edit/{id}', [RoleController::class, 'update']);
    Route::get('/role/delete/{id}', [RoleController::class, 'delete'])->name('delete');


    Route::get('/user', [UserController::class, 'list']);
    Route::get('/user/add', [UserController::class, 'add'])->name('add-users');
    Route::post('/user/add', [UserController::class, 'insert']);
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::post('/user/edit/{id}', [UserController::class, 'update']);
    Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('delete');

    Route::prefix('bermain')->name('bermain.')->group(function () {
        Route::get('/', [BermainController::class, 'index'])->name('index');
        Route::post('/', [BermainController::class, 'store'])->name('store');
        Route::post('/update-timer/{id}', [BermainController::class, 'updateTimer'])->name('update-timer');
        Route::delete('/{id}', [BermainController::class, 'destroy'])->name('destroy');
        Route::get('/search', [BermainController::class, 'search'])->name('search');
    });

    Route::get('/bimbel', [BimbelController::class, 'index']) ->name('bimbel');

    Route::get('/layanan', [LayananController::class, 'index']) ->name('layanan');

});

Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::post('/layanan', [LayananController::class, 'submit'])->name('layanan.submit');

require __DIR__.'/auth.php';

