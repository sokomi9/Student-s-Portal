<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\StdgradesController;

Route::get('/', [StudentsController::class, 'addStudent']);
Route::get('grades', [StdgradesController::class, 'showGrades']);
//Route::get('grades', [StdgradesController::class, 'addgrades']);
