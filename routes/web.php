<?php

use App\Http\Controllers\ProfileController;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\FrontEnd\FrontController;
use App\Http\Controllers\BackEnd\RoleController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('play',[FrontController::class,'index']);
    //RoleController···
    Route::get('role',[RoleController::class,'index'])->name('role.index');
    Route::get('/Role/Create',[RoleController::class,'create'])->name('role.create');
    Route::post('/Role/Store',[RoleController::class,'store'])->name('role.store');

    Route::get('Role/Show/{id}', [RoleController::class,'show'])->name('role.show');
    Route::post('Role/Save/Permissions/{id}', [RoleController::class,'savePermission'])->name('role.save.permissions');
    Route::post('Role/Delete/{id}', [RoleController::class,'destroy'])->name('role.delete');



});
Route::post('user/logout/form',[ProfileController::class,'userLogout'])->name('user.logout.form');

require __DIR__.'/auth.php';
