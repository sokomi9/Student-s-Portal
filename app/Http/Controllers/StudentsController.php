<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    function add(Request $request){
        $students = new Student();
        $students->first_name = $request->first_name;
        $students->last_name = $request->last_name;
        $students->email = $request->email;


        if ($students->save()) {
            return redirect('/');
        } else {
            echo "Student enrollment unsuccessful";
        }

    }
    function list(){
        $students = Student::paginate(10);
        return view('home', ['my_list'=>$students]);
    }
    function delete($id){
        $delete = Student::destroy($id);
        if($delete){
            return redirect('/');
        }else{
            echo "Record deletion unsuccessful";
        }
    }
    function populateStudent($id){
        $findStudent = Student::find($id);
        return view('update-student', ['data'=>$findStudent]);
    }
    function updateStudent(Request $request, $id){
        $student = Student::find($id);
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->email = $request->email;

        if ($student->save()) {
            return redirect('/');
        }else {
            echo "Student's details not updated";
        }
    }
}
