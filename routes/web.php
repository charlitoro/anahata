<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware;

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

use App\Http\Controllers\AboutController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ScheduleController;



Route::get('login', function(){
    return 'login usuario';
});

Route::get('logout', function(){
    return 'Logout Usuario';
});

Route::get('/', [MainController::class, 'getMain']); 

Route::get('services', [ServicesController::class, 'getServices']); 

Route::get('schedule', [ScheduleController::class, 'getSchedule']); 

Route::get('about', [AboutController::class, 'getAbout']); 


