<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\StdgradesController;

Route::view('add',"form_addstudent");
Route::post('add', [StudentsController::class, 'add']);
Route::get('/', [StudentsController::class, 'list']);
Route::get('delete/{id}', [StudentsController::class, 'delete']);
Route::get('grades', [StdgradesController::class, 'showGrades']);

