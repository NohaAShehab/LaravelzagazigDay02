@extends('layouts.layout')


@section('mainsection')
    <h1> Add new department </h1>
    <form action="/departments" method="Post">
        @csrf
        <div class="form-group">
            <label for="name">Department name</label>
            <input type="text" class="form-control"  name="dept_name" id="dept_name" aria-describedby="dept_nameHelp">
            <label class="text-danger"> {{$errors->first("dept_name")}}</label>
        </div>
        <div class="form-group">
            <label for="name">Department description</label>
            <input type="text" class="form-control"  name="dept_desc" id="dept_desc" aria-describedby="dept_descHelp">
            <label class="text-danger"> {{$errors->first("dept_desc")}}</label>

        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection