<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

Route::get('', [HomeController::class, 'index'])->middleware('can:Ver dashboard')->name('home');

Route::resource('roles', RoleController::class)->names('roles');

//SE USA ONLY, PARA ELIMINAR LOS METODOS NO USADOS EN USER-CONTROLLER
Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('users'); 