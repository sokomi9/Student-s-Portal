<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\StdgradesController;

Route::view('add',"form_addstudent");
Route::post('add', [StudentsController::class, 'add']);
Route::get('/', [StudentsController::class, 'list']);
Route::get('delete/{id}', [StudentsController::class, 'delete']);
Route::get('populate_student/{id}', [StudentsController::class, 'populateStudent']);
Route::put('update-student/{id}', [StudentsController::class, "updateStudent"]);
Route::get('search', [StudentsController::class, 'search']);


Route::get('grades', [StdgradesController::class, 'showGrades']);

