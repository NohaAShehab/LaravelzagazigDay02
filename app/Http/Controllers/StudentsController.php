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

    // function getAllStudents(){

    //     $data= Student::all();

    //     // dd($students);

    //     return view("allstudents",["info"=>$data]);  #view name
    // }

    function listStudents(){
        #get all students 
        $students=Student::all();
        // dd($students);
        #send the array to the view to be displayed
        return view("allstudents",["data"=>$students]);
    }

    function showstudent($student){
        //dd($student);
        #get info of this student
        #select
        // $student=Student::where("id",$student)->first();
        // return $student ? view("showstudent",["student"=>$student]) : redirect("/dispalystudents");

        $student=Student::findOrFail($student);
        return  view("showstudent",["student"=>$student]);
    }

    function editStudent($student){
        $student=Student::findOrFail($student);
        return  view("editstudent",["student"=>$student]);
    }

    function updateStudent($student){
        // dump($student);
        // dump(request());
        $studentInfo=Student::findOrFail($student);
        $studentInfo->firstname=request("firstname");
        $studentInfo->lastname=request("lastname");
        $studentInfo->email=request("email");
        $studentInfo->phone=request("phone");
        $studentInfo->grade=request("grade");
        $studentInfo->absent=request("absent");
        $studentInfo->save();
        return redirect("/showstudent/".$student);
    }
    function deleteStudent($student){
        $studentInfo=Student::findOrFail($student);
        $studentInfo->delete();
        return redirect("/dispalystudents");
    }



}
