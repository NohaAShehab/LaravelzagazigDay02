<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home',function(){
//     // return "<h1> <font color='purple'> Hello world </font> </h1>";
//     // return 10;
//     $arr=["name"=>"iti",
//     "pass"=>"123"];
//     // return $arr['name'];

//     $name=request('day');
//     // return request('name');
//     // return true;
//     return $name;

// });

Route::get("/books/{param}",function($param){
    $books=[
        "book1"=>"laravel",
        "book2"=>"php",
    ];

    $date=request("date");
    dump($date);

    // foreach($books as $k=>$v){
    //     if($param==$k){
    //         $book=$books[$param];
    //         break;
    //     }else{
    //         $book="This key is not found";
    //     }
    // }
    #built-in function 
    // if(array_key_exists($param,$books)){
    //     return $books[$param];
    // }else{
    //     return abort(404);
    // }
    #ternary operator 
    $found = array_key_exists($param,$books) ? $books[$param] : abort(404);
    return $found;
 
});

#get #post #patch #put
Route::get('/iti','App\Http\Controllers\ITIController@getHomePage');
Route::get('/students','App\Http\Controllers\ITIController@getStudents');
Route::get('/aboutus','App\Http\Controllers\ITIController@aboutus');
Route::get('/contactus','App\Http\Controllers\ITIController@contactus');
Route::get('/students/{studentNumber}','App\Http\Controllers\ITIController@getStudent');
Route::get('/staff','App\Http\Controllers\ITIController@getStaff');
Route::get("/info",'App\Http\Controllers\ITIController@info');
Route::get("/addstudent","App\Http\Controllers\StudentsController@addstudent");
Route::post("/submitstudent","App\Http\Controllers\StudentsController@submitStudent");
// Route::get("/dispalystudents","App\Http\Controllers\StudentsController@getAllStudents");
Route::get("/dispalystudents","App\Http\Controllers\StudentsController@listStudents");
Route::get("/showstudent/{student}","App\Http\Controllers\StudentsController@showstudent");
Route::get("/editstudent/{student}","App\Http\Controllers\StudentsController@editstudent");
Route::post("/updatestudent/{student}","App\Http\Controllers\StudentsController@updateStudent");
Route::get("/deletestudent/{student}","App\Http\Controllers\StudentsController@deleteStudent");


#enhancement in routing style
#controller resources
#validation (insert, update)
#different request methods (post,get, put, delete)
#put=== patch method (update)

#create route for the department
#index 
Route::get("/departments","App\Http\Controllers\DepartmentController@index");
#create
Route::get("/departments/create","App\Http\Controllers\DepartmentController@create");
#store
Route::post("/departments","App\Http\Controllers\DepartmentController@store");
#show
Route::get("/departments/{department}","App\Http\Controllers\DepartmentController@show");
#edit
Route::get("/departments/{department}/edit","App\Http\Controllers\DepartmentController@edit");
#update
Route::put("/departments/{department}","App\Http\Controllers\DepartmentController@update");
#delete
Route::delete("/departments/{department}","App\Http\Controllers\DepartmentController@destroy");









