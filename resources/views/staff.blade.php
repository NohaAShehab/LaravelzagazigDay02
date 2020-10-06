@extends('layouts.layout')
@section('content2')
    <div >
        <img src="http://images6.fanpop.com/image/photos/42900000/Ruff-wading-bird-bing-42982001-1920-1200.jpg"
            class="d-block w-100 h-100">
    </div>
@endsection

@section('content1')
    <div>
        <h1> Staff members
        <div class="container w-75">
            <table class="table table-active">
                <tr class="bg-danger">
                    <th >
                        Department
                    </th>
                    <th>
                        Name
                    </th>
                </tr>
                @foreach($staff as $k=>$v)
                <tr>
                        <td>
                            {{$k}}
                        </td>
                        <td>
                            {{$v}}
                        </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection

