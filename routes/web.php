<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloworldController;

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

Route::group(['middleware' => ['maintenance']], function () {

    Route::get('/', function () {
        return view('welcome');
    });
});

Route::get('/helloworld', [HelloworldController::class, 'index']);

Route::get('/mantenimiento', function () {
    return view('maintenance');
});