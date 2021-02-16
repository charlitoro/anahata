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
use App\Http\Controllers\ScheduleAdminController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ScheduleController;



Route::get('/', [MainController::class, 'getMain']); 

Route::get('services', [ServicesController::class, 'getServices']); 

Route::get('schedule', [ScheduleController::class, 'getSchedule'])->middleware('auth'); 
Route::post('schedule', [ScheduleController::class, 'postCreate'])->middleware('auth'); 
Route::delete('schedule', [ScheduleController::class, 'deleteSchedule'])->middleware('auth'); 

Route::get('about', [AboutController::class, 'getAbout']); 



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Routs
Route::get('/admin', [ScheduleAdminController::class, 'index'])->middleware('auth');
Route::post('/admin', [ScheduleAdminController::class, 'postAction'])->middleware('auth');
Route::get('/admin/list', [ScheduleAdminController::class, 'getSchedules' ])->name('admin.list')->middleware('auth');