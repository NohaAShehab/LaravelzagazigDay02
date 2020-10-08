@extends('layouts.layout')


@section('mainsection')
    <h1> Edit department </h1>
    <form action="/departments/{{$department['id']}}" method="post">
        @csrf
        @method("put")
        <div class="form-group">
            <label for="name">Department name</label>
            <input type="text" value="{{$department['dept_name']}}" class="form-control"  name="dept_name" id="dept_name" aria-describedby="dept_nameHelp">
            <label class="text-danger"> {{$errors->first("dept_name")}}</label>
        </div>
        <div class="form-group">
            <label for="name">Department description</label>
            <input type="text" value="{{$department['dept_desc']}}" class="form-control"  name="dept_desc" id="dept_desc" aria-describedby="dept_descHelp">
            <label class="text-danger"> {{$errors->first("dept_desc")}}</label>

        </div>
       
        <button type="submit"  class="btn btn-primary">Submit</button>
    </form>

@endsection