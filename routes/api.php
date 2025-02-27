<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/{id}', [StudentController::class, 'show']);
Route::post('/students', [StudentController::class, 'store']);
Route::put('/students/{id}', [StudentController::class, 'update']);
Route::delete('/students/{id}', [StudentController::class, 'destroy']);

Route::get('/parents', [StudentController::class, 'index']);
Route::get('/parents/{id}', [StudentController::class, 'show']);
Route::post('/parents', [StudentController::class, 'store']);
Route::put('/parents/{id}', [StudentController::class, 'update']);
Route::delete('/parents/{id}', [StudentController::class, 'destroy']);

Route::get('/teachers', [StudentController::class, 'index']);
Route::get('/teachers/{id}', [StudentController::class, 'show']);
Route::post('/teachers', [StudentController::class, 'store']);
Route::put('/teachers/{id}', [StudentController::class, 'update']);
Route::delete('/teachers/{id}', [StudentController::class, 'destroy']);

Route::get('/grades', [StudentController::class, 'index']);
Route::get('/grades/{id}', [StudentController::class, 'show']);
Route::post('/grades', [StudentController::class, 'store']);
Route::put('/grades/{id}', [StudentController::class, 'update']);
Route::delete('/grades/{id}', [StudentController::class, 'destroy']);

Route::get('/courses', [StudentController::class, 'index']);
Route::get('/courses/{id}', [StudentController::class, 'show']);
Route::post('/courses', [StudentController::class, 'store']);
Route::put('/courses/{id}', [StudentController::class, 'update']);
Route::delete('/courses/{id}', [StudentController::class, 'destroy']);

Route::get('/attendance', [StudentController::class, 'index']);
Route::get('/attendance/{id}', [StudentController::class, 'show']);
Route::post('/attendance', [StudentController::class, 'store']);
Route::put('/attendance/{id}', [StudentController::class, 'update']);
Route::delete('/attendance/{id}', [StudentController::class, 'destroy']);

Route::get('/exams', [StudentController::class, 'index']);
Route::get('/exams/{id}', [StudentController::class, 'show']);
Route::post('/exams', [StudentController::class, 'store']);
Route::put('/exams/{id}', [StudentController::class, 'update']);
Route::delete('/exams/{id}', [StudentController::class, 'destroy']);

Route::get('/exam_types', [StudentController::class, 'index']);
Route::get('/exam_types/{id}', [StudentController::class, 'show']);
Route::post('/exam_types', [StudentController::class, 'store']);
Route::put('/exam_types/{id}', [StudentController::class, 'update']);
Route::delete('/exam_types/{id}', [StudentController::class, 'destroy']);

Route::get('/exam_results', [StudentController::class, 'index']);
Route::get('/exam_results/{id}', [StudentController::class, 'show']);
Route::post('/exam_results', [StudentController::class, 'store']);
Route::put('/exam_results/{id}', [StudentController::class, 'update']);
Route::delete('/exam_results/{id}', [StudentController::class, 'destroy']);

Route::get('/classroom_student', [StudentController::class, 'index']);
Route::get('/classroom_student/{id}', [StudentController::class, 'show']);
Route::post('/classroom_student', [StudentController::class, 'store']);
Route::put('/classroom_student/{id}', [StudentController::class, 'update']);
Route::delete('/classroom_student/{id}', [StudentController::class, 'destroy']);