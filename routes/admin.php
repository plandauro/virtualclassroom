<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\Admin\CourseController;

Route::get('', [HomeController::class, 'index'])->middleware('can:Ver dashboard')->name('home');

Route::resource('roles', RoleController::class)->names('roles');

//SE USA ONLY, PARA ELIMINAR LOS METODOS NO USADOS EN USER-CONTROLLER
Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('users'); 

//Cursos en estado revisión
Route::get('courses',[CourseController::class, 'index'])->name('courses.index');

Route::get('courses/{course}',[CourseController::class, 'show'])->name('courses.show');

Route::post('courses/{course}/approved', [CourseController::class, 'approved'])->name('courses.approved');