@extends('layouts.layout')

@section("mainsection")

    <table class="table table-striped ">
        <tr  class="bg-info">
            <th>
                First Name
            </th>
            <th>
                Last Name
            </th>
            <th>
                Eamil
            </th>
            <th>
                Phone
            </th>
            <th>
                View
            </th>
            <th>
                Update
            </th>
            <th>
                Delete
            </th>
        </tr>
        
       @foreach($data as $student)
            <tr>
                <td>
                    {{$student["firstname"]}}
                </td>
                <td>
                    {{$student["lastname"]}}
                </td>
                <td>
                    {{$student["email"]}}
                </td>
                <td>
                    {{$student["phone"]}}
                </td>
                <td>        
                    <a class="btn btn-success" href="/showstudent/{{$student['id']}}">Show</a>
                </td>
                <td>        
                    <a class="btn btn-warning" href="/editstudent/{{$student['id']}}">Edit</a>
                </td>
                <td>        
                    <a class="btn btn-danger" href="/deletestudent/{{$student['id']}}">Delete</a>
                </td>

            </tr>
        @endforeach

    </table>





@endsection