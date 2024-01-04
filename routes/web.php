<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index.home');
});
Route::get('/login',[LoginController::class,'index']);
Route::get('/register',[RegisterController::class,'index']);
Route::resource('/posts',PostController::class);


Route::get('/home', function () {
    return view('layout.home');
});
Route::get('/admin', function () {
    return view('layout.home');
});
Route::get('/administrator/addAdmin',function () {
    return view('administrator.formAddAdmin');
});
route::resource('administrator',AdministratorController::class);
Route::get('/users/addUsers', function () {
    return view('users.formAddUser');
});
route::resource('/user',UsersController::class);
