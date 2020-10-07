@extends('layouts.layout')

@section("mainsection")

    <table class="table">
        <tr>
            <th>
                Id
            </th>
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
        </tr>
        
        @foreach($info as $s)
        <tr>
            <td>{{$s["id"]}} </td>
            <td>{{$s["firstname"]}} </td>
            <td>{{$s["lastname"]}} </td>
            <td>{{$s["email"]}} </td>
            <td>{{$s["phone"]}} </td>    
        </tr>            
        @endforeach
        
    </table>





@endsection