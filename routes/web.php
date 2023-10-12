<?php

use App\Http\Controllers\BackEnd\CarController;
use App\Http\Controllers\BackEnd\UserController;
use App\Http\Controllers\CalculationsController;
use App\Http\Controllers\ProfileController;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\FrontEnd\FrontController;
use App\Http\Controllers\BackEnd\RoleController;
use App\Http\Controllers\BackEnd\PermissionController;


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
    return redirect(RouteServiceProvider::LOGIN);
});

//Route::get('/dashboard', function () {
//    // return view('dashboard');
//    return view('frontend.index');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [CalculationsController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('play', [FrontController::class, 'index']);

    //RoleController···
    Route::get('role', [RoleController::class, 'index'])->name('role.index');
    Route::get('/Role/Create', [RoleController::class, 'create'])->name('role.create');
    Route::post('/Role/Store', [RoleController::class, 'store'])->name('role.store');
    Route::get('Role/Show/{id}', [RoleController::class, 'show'])->name('role.show');
    Route::post('Role/Save/Permissions/{id}', [RoleController::class, 'savePermission'])->name('role.save.permissions');
    Route::post('Role/Delete/{id}', [RoleController::class, 'destroy'])->name('role.delete');

    //UserController···
    Route::get('user', [UserController::class, 'index'])->name('user.index');
    Route::get('user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('user/store', [UserController::class, 'store'])->name('user.store');

    //CarController···
    Route::post('car/login_at', [CarController::class, 'loginAt'])->name('car.login');
    Route::post('car/logout_at', [CarController::class, 'logoutAt'])->name('car.logout.at');
    Route::get('export-cars', [CarController::class, 'exportCars'])->name('export-cars');
    Route::get('count-cars-per-day-export',    [CarController::class, 'exportCountOfCarsPerDay'])->name('count-cars-per-day-export');

    Route::get('view', [CarController::class, 'view']);


    Route::get('playing', [CarController::class, 'logoutAt']);
    Route::get('playing', [CarController::class, 'logoutAt']);

    //PermissionController···
    Route::get('permission', [PermissionController::class, 'index'])->name('permission.index');
    Route::get('permission/show/{id}', [PermissionController::class, 'show'])->name('permission.show');
    Route::post('permission/show/update/{id}', [PermissionController::class, 'showUpdate'])->name('permission.show.update');


});
Route::post('user/logout/form', [ProfileController::class, 'userLogout'])->name('user.logout.form');
require __DIR__ . '/auth.php';

//  Wael Sleem11:39 AM
//  host : mypark.com.sa
//  username : root
//  password : RysckyeinReb0
//  port : 22
