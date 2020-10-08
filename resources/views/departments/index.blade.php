@extends('layouts.layout')

@section("mainsection")

    <table class="table table-striped ">
        <tr  class="bg-info">
            <th>
                Department Name
            </th>
            <th>
                Department Description
            </th>
            <th>
                Created at
            </th>
            <th>
                Show
            </th>
            <th>
                Edit
            </th>
            <th>
                Delete
            </th>
        </tr>
        
       @foreach($departments as $department)
            <tr>
                <td>
                    {{$department["dept_name"]}}
                </td>
                <td>
                    {{$department["dept_desc"]}}
                </td>
                <td>
                    {{$department["created_at"]}}
                </td>

                <td>        
                    <a class="btn btn-success" href="/departments/{{$department['id']}}">Show</a>
                </td>
                <td>        
                    <a class="btn btn-warning" href="/departments/{{$department['id']}}/edit">Edit</a>
                </td>
                <td>        
                    <form action="/departments/{{$department['id']}}" method="post">
                        @csrf
                        @method("delete")
                        <input type="submit" value="Delete"  class="btn btn-danger" >
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a class="btn btn-info" href="/departments/create">Add Department</a>






@endsection