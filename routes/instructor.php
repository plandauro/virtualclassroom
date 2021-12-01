<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Instructor\CourseController;
use App\Http\Livewire\Instructor\CoursesCurriculum;
// use App\Http\Livewire\InstructorCourses; //ESTO SE ELIMINAR, REOOGANIZANDO RUTAS

Route::redirect('', 'instructor/courses');

// SE ELIMNAR REOORGANIZANDO RUTAS
// Route::get('courses', InstructorCourses::class)->middleware('can:Leer cursos')->name('courses.index');

// GENERANDO NUEVA RUTAS ORGANIZADAS

Route::resource('courses', CourseController::class)->names('courses');

Route::get('courses/{course}/curriculum', CoursesCurriculum::class)->name('courses.curriculum');

Route::post('courses/{course}/status', [CourseController::class, 'status'])->name('courses.status');