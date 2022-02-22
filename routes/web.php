<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('/admin', function () {
    return view('/admin.desboard');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/alluser',[HomeController::class,'alluser'])->name('alluser');
Route::get('/userfrom',[HomeController::class,'userfrom'])->name('userfrom');
Route::post('/userfrom',[HomeController::class,'AddData'])->name('data.submit');
Route::get('/delete-post/{id}',[HomeController::class,'delete'])->name('data.delete');
Route::get('/view/{id}',[HomeController::class,'view'])->name('data.view');;
Route::get('/update/{id}',[HomeController::class,'showdata']);
Route::post('update',[HomeController::class,'update'])->name('user.update');
Auth::routes();


