@extends('layouts.layout')


@section('mainsection')
    <h1> Add new student </h1>
    <form action="/submitstudent" method="Post">
        @csrf
        <div class="form-group">
            <label for="name">First name</label>
            <input type="text" class="form-control"  name="firstname" id="firstname" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="name">Last name</label>
            <input type="text" class="form-control"  name="lastname" id="lastname" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control"  name="phone" id="phone">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection