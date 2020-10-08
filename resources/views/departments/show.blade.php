@extends('layouts.layout')


@section('mainsection')
    <h1>  Department Info </h1>

        <table class="table table-bordered">
        <tr>
            <th > ID</th>
            <td> {{$department["id"]}} </td>
        </tr>
        <tr>
            <th > First Name</th>
            <td> {{$department["dept_name"]}} </td>
        </tr>
        <tr>
            <th >Last Name </th>
            <td> {{$department["dept_desc"]}}</td>
        </tr>
     
        <tr>
            <th > Created at</th>
            <td>{{$department["created_at"]}}  </td>
        </tr>
        <tr>
            <th >Updated at </th>
            <td>  {{$department["updated_at"]}} </td>
        </tr>
    </table>
    <a class="btn btn-info" href="/departments">Back</a>
       
  

@endsection