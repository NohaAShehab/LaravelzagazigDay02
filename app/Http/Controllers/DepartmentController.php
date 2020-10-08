<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $departments=Department::all();
        return view("departments.index",["departments"=>$departments]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("departments.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $data=$request->validate([
            "dept_name"=>"required | min:5",
            "dept_desc"=>"max:20"
        ]);
        #mass assigment ( assign array values)
        Department::create([
            "dept_name"=>$request["dept_name"],
            "dept_desc"=>$request["dept_desc"]
        ]);
        // Department::create($data);
        // Department::create($request->validate([
        //     "dept_name"=>"required | min:5",
        // ]));





        
        return redirect("/departments");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        return view("departments.show",["department"=>$department]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //
        // dump($department);
        return view("departments.edit",["department"=>$department]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {

        // dump($department);
        // dump($request);
        $data=$request->validate([
            "dept_name"=>"required | min:5",
            "dept_desc"=>"max:20"
        ]);
        // $data=[
        //     "dept_name"=>$request["dept_name"],
        //     "dept_desc"=>$request["dept_desc"],
        // ];
        #update the department object with the values in the request 
        $department->fill($data)->save();
        return redirect("/departments/".$department["id"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        $department->delete();
        return redirect("/departments");
    }
}
