<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    //
    function addStudent(){
        return view("addstudent");
    }

    function submitStudent(){
        // dump($_POST);
        $data=request();
        // dump($data);
        // dump($data);
        // $first_name=$data["firstname"];
        // $last_name=$data["lastname"];
        // $email=$data["email"];
        // $phone=$data["phone"];
        $first_name=request('firstname');
        $last_name=request('lastname');
        $email=request('email');
        $phone=request('phone');

        $student= new Student();
        $student->firstname=$first_name;
        $student->lastname=$first_name;
        $student->email=$first_name;
        $student->phone=$first_name;
        $student->save();
        return redirect("/dispalystudents");  #route name
    
    }

    function getAllStudents(){

        $data= Student::all();

        // dd($students);

        return view("allstudents",["info"=>$data]);  #view name

    }

}
