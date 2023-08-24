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

//Index
Route::get('/',[\App\Http\Controllers\ContainerController::class, 'createContainer'])->name('containerForm');

//Show Container Data
Route::get('/containerData', function () {
    return view('containerData');
})->name('containerData');

//Save Container Data
Route::post('/saveContainerData' , [\App\Http\Controllers\ContainerController::class, 'saveContainerData'])->name('saveContainerData');

//Container Data
Route::get('/showContainerData' , [\App\Http\Controllers\ContainerController::class, 'showContainerData'])->name('showContainerData');

//Edit Container Data
Route::get('/editContainer/{id}' , [\App\Http\Controllers\ContainerController::class, 'editContainer'])->name('editContainer');

//Update Container Data
Route::post('/updateContainerData' , [\App\Http\Controllers\ContainerController::class, 'updateContainerData'])->name('updateContainerData');

//Delete Container Data
Route::get('/deleteContainer/{id}' , [\App\Http\Controllers\ContainerController::class, 'deleteContainer'])->name('deleteContainer');

