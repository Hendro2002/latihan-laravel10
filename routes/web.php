<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ExtracurricularController;

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/siswa/students', [StudentController::class, 'index']);
Route::get('/siswa/student-detail/{id}', [StudentController::class, 'show']);
Route::get('/siswa/student-add', [StudentController::class, 'create']);
Route::post('/student-store', [StudentController::class, 'store']);
Route::get('/siswa/student-edit/{id}', [StudentController::class, 'edit']);
Route::put('/student-update/{id}', [StudentController::class, 'update']);
Route::get('/siswa/student-delete/{id}', [StudentController::class, 'delete']);
Route::delete('/student-destroy/{id}', [StudentController::class, 'destroy']);

Route::get('/kelas/class', [ClassController::class, 'index']);
Route::get('/kelas/class-detail/{id}', [ClassController::class, 'show']);
Route::get('/kelas/class-add', [ClassController::class, 'create']);
Route::post('/class-store', [ClassController::class, 'store']);
Route::get('/kelas/class-edit/{id}', [ClassController::class, 'edit']);
Route::put('/class-update/{id}', [ClassController::class, 'update']);
Route::get('/kelas/class-delete/{id}', [ClassController::class, 'delete']);
Route::delete('/class-destroy/{id}', [ClassController::class, 'destroy']);

Route::get('/ekskul/extracurricular', [ExtracurricularController::class, 'index']);
Route::get('/ekskul/extracurricular-detail/{id}', [ExtracurricularController::class, 'show']);
Route::get('/ekskul/extracurricular-add', [ExtracurricularController::class, 'create']);
Route::post('/extracurricular-store', [ExtracurricularController::class, 'store']);
Route::get('/ekskul/extracurricular-edit/{id}', [ExtracurricularController::class, 'edit']);
Route::put('/extracurricular-update/{id}', [ExtracurricularController::class, 'update']);
Route::get('/ekskul/extracurricular-delete/{id}', [ExtracurricularController::class, 'delete']);
Route::delete('/extracurricular-destroy/{id}', [ExtracurricularController::class, 'destroy']);

Route::get('/guru/teacher', [TeacherController::class, 'index']);
Route::get('/guru/teacher-detail/{id}', [TeacherController::class, 'show']);
Route::get('/guru/teacher-add', [TeacherController::class, 'create']);
Route::post('/teacher-store', [TeacherController::class, 'store']);
Route::get('/guru/teacher-edit/{id}', [TeacherController::class, 'edit']);
Route::put('/teacher-update/{id}', [TeacherController::class, 'update']);
Route::get('/guru/teacher-delete/{id}', [TeacherController::class, 'delete']);
Route::delete('/teacher-destroy/{id}', [TeacherController::class, 'destroy']);
