@extends('layouts.layout')


@section('mainsection')
    <h1> Edit student </h1>
    <form action="/updatestudent/{{$student['id']}}" method="Post">
        @csrf
        <div class="form-group">
            <label for="name">First name</label>
            <input type="text" class="form-control" value="{{$student['firstname']}}" name="firstname" id="firstname" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="name">Last name</label>
            <input type="text" class="form-control" value="{{$student['lastname']}}" name="lastname" id="lastname" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control"value="{{$student['email']}}" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" value="{{$student['phone']}}" name="phone" id="phone">
        </div>
        <div class="form-group">
            <label for="phone">Absent</label>
            <input type="text" class="form-control" value="{{$student['absent']}}" name="absent" id="phone">
        </div>
        <div class="form-group">
            <label for="phone">Grade</label>
            <input type="text" class="form-control" value="{{$student['grade']}}" name="grade" id="phone">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-success" href="/showstudent/{{$student['id']}}"> Cancel </a> 
    </form>

@endsection