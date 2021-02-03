<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\TerminalController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[\App\Http\Controllers\Backend\NewUserController::class,'new_user']);
Route::get('/change',[\App\Http\Controllers\Backend\ChangePasswordController::class,'change_pass']);


Route::get('/terminals',[\App\Http\Controllers\Backend\TerminalController::class,'index'])->name('listing.terminal');
Route::get('add/terminal',[\App\Http\Controllers\Backend\TerminalController::class,'create'])->name('create.terminal');
Route::post('add/terminal',[\App\Http\Controllers\Backend\TerminalController::class,'store'])->name('store.terminal');
Route::get('edit/terminal{id}',[\App\Http\Controllers\Backend\TerminalController::class,'edit'])->name('edit.terminal');
Route::post('update/terminal{id}',[\App\Http\Controllers\Backend\TerminalController::class,'update'])->name('update.terminal');



Route::get('/cpp',[\App\Http\Controllers\Backend\CppController::class,'cpp']);


Route::get('/city',[\App\Http\Controllers\Backend\CityController::class,'city']);
Route::get('/train',[\App\Http\Controllers\Backend\TrainController::class,'train']);
Route::get('/category',[\App\Http\Controllers\Backend\CategoryController::class,'category']);
Route::get('/good',[\App\Http\Controllers\Backend\GoodTypeController::class,'good']);
Route::get('/packing',[\App\Http\Controllers\Backend\PackingTypeController::class,'packing']);
Route::get('/customer',[\App\Http\Controllers\Backend\CustomerController::class,'customer']);
Route::get('/booking status',[\App\Http\Controllers\Backend\BookingStatusController::class,'booking_status']);
Route::get('/booking',[\App\Http\Controllers\Backend\BookingController::class,'booking']);
Route::get('/dispatch',[\App\Http\Controllers\Backend\DispatchController::class,'dis']);
Route::get('/inward',[\App\Http\Controllers\Backend\InwardController::class,'inward']);
Route::get('/delivery',[\App\Http\Controllers\Backend\DeliveryController::class,'delivery']);
Route::get('/admin login',[\App\Http\Controllers\Backend\LoginController::class,'admin_login']);








Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
