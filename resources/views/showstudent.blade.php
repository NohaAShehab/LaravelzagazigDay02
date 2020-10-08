@extends('layouts.layout')



@section("mainsection")
    <h1> Student Info</h1>
    <table class="table table-bordered">
        <tr>
            <th > ID</th>
            <td> {{$student["id"]}} </td>
        </tr>
        <tr>
            <th > First Name</th>
            <td> {{$student["firstname"]}} </td>
        </tr>
        <tr>
            <th >Last Name </th>
            <td> {{$student["lastname"]}}</td>
        </tr>
        <tr>
            <th > Email</th>
            <td> {{$student["email"]}} </td>
        </tr>
        <tr>
            <th > Phone</th>
            <td> {{$student["phone"]}} </td>
        </tr>
        <tr>
            <th >Absent </th>
            <td> {{$student["absent"]}} </td>
        </tr>
        <tr>
            <th > Grade</th>
            <td> {{$student["grade"]}} </td>
        </tr>
        <tr>
            <th > Created at</th>
            <td>{{$student["created_at"]}}  </td>
        </tr>
        <tr>
            <th >Updated at </th>
            <td>  {{$student["updated_at"]}} </td>
        </tr>
    </table>
    <a class="btn btn-info" href="/dispalystudents">Back</a>




@endsection