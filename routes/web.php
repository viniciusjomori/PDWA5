<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClothingController;

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
    return ['Laravel' => app()->version()];
});

Route::get('/clothing', [ClothingController::class, 'index'])->name('clothing.index');
Route::get('/clothing/create', [ClothingController::class, 'create'])->name('clothing.create');
Route::post('/clothing', [ClothingController::class, 'store'])->name('clothing.store');
Route::get('/clothing/{clothing}/edit', [ClothingController::class, 'edit'])->name('clothing.edit');
Route::put('/clothing/{clothing}/update', [ClothingController::class, 'update'])->name('clothing.update');
Route::delete('/clothing/{clothing}/delete', [ClothingController::class, 'delete'])->name('clothing.delete');
Route::get('/clothing/xml', [ClothingController::class, 'xml'])->name('clothing.xml');

require __DIR__.'/auth.php';
