<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ITIController extends Controller
{
    //
    public function getHomePage(){
        return view('iti');
    }

    public function getStudents(){
        return view('students');
    }

    public function aboutus(){
        return view("files.aboutus");
    }


    function info(){
        return view('info');
    }

    public function contactus(){
        return view("contactus");
    }

    public function getStudent($studentNumber){
        $students=["Ali","Ahmed","Salma","Mostafa","Noor","Omar", 10, true];
        $student= array_key_exists($studentNumber,$students)? $students[$studentNumber]: abort(404);
        #return $student;
        #send a variable to the view 
        #to send variable to the views --> send them as an associative array
        #$sent=["students"=>$students];
        $s=$students[$studentNumber];
        return view("studentInfo",["student"=>$s]);
    }

    public function getStaff(){
        $staff=[
            "Os"=>"Noha",
            "Cloud"=>"Fatma",
            "IOT"=>"Dina",
            "Telecom"=>"Sabagh"
        ];
    
        return view("staff",["staff"=>$staff]);
    }
}


