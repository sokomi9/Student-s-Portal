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
        $result = $students->save();

        if ($request) {
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
}
