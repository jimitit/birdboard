<?php

use App\Http\Controllers\ProjectsController;
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
    return view('welcome');
});

Route::get('/projects', [ProjectsController::class, 'index']);

Route::post('/projects', [ProjectsController::class, 'store'])->middleware('auth');

Route::get('/projects/{project}', [ProjectsController::class, 'show']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
