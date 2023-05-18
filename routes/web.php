<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;



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

require __DIR__.'/auth.php';
Route::get('/', function () {
    return view('auth.login');
})->name('dashboard');

Route::group(['prefix' => 'dashboard', 'middleware' =>'auth' , 'as'=>'dashboard.'], function () {

    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resources([
        'users' => UserController::class,
        'clients' => ClientController::class,
        'projects' => ProjectController::class,
        'tasks' => TaskController::class,
    ]);

    //logout
    Route::POST('logout',[UserController::class,'flush'])->name('logout');

    
    });