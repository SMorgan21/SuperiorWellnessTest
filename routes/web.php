<?php

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

//Testing
//Route::get('/testing' , [\App\Http\Controllers\IwootUSController::class, 'saveData']);

//Index
//Route::get('/' , [\App\Http\Controllers\MainController::class, 'index']);

Route::get('/', function () {
    return view('containerForm');
});

//Save Product
Route::post('/saveContainerData' , [\App\Http\Controllers\ContainerController::class, 'saveContainerData'])->name('saveContainerData');
