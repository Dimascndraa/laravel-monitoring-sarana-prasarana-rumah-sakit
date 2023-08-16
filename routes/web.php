<?php

use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use App\Models\Unit;
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

Route::middleware(['auth'])->group(function () {
    // Modul Unit
    Route::resource('/units', UnitController::class);
    Route::get('/get-data-unit', [UnitController::class, 'getDataUnit']);
    Route::post('/edit-unit', [UnitController::class, 'editUnit']);
    Route::post('/add-unit', [UnitController::class, 'addUnit']);

    // Modul User
    Route::resource('/users', UserController::class);
    Route::put('/users/{user:id}/pindah', [UserController::class, 'pindahkan']);
    Route::put('/users/{user:id}/update-password', [UserController::class, 'updatePassword']);
    Route::put('/users/{user:id}/akses', [UserController::class, 'akses']);
});

require __DIR__ . '/auth.php';
require __DIR__ . '/default_menu.php';
