<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\UsersController;
use App\Models\administrator;
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
    return view('layout.home');
});
Route::get('/home', function () {
    return view('layout.home');
});
Route::get('/administrator/addAdmin', function () {
    return view('administrator.formAddAdmin');
});
Route::get('/users/addUsers', function () {
    return view('users.formAddUser');
});
route::resource('administrator',AdministratorController::class);
route::resource('/user',UsersController::class);
