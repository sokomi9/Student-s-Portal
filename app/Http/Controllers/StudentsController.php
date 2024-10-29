<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    function addStudent(){
        $students = \App\Models\Student::all();
        return view('home', ['my_list'=>$students]);
    }
}
