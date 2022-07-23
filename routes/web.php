<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmbarcacionController;
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

//Route::get('/', [EmbarcacionController::class, 'index']);

Route::controller(EmbarcacionController::class)->group(function(){
    Route::get('/embarcaciones', 'index');
    Route::post('');
    Route::put();
    Route::delete();
});