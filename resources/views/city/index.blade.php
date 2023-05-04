@extends('city.layout')

@section('content')
<div class="form-group row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Info Module</h2>
        </div>
        <div class="float-right">
            <strong></strong>
        </div>
        <div class="float-right">
            <a class="btn btn-success" href="{{route('city.create')}}">Create</a>
        </div>
    </div>
</div>
@if($msg = Session::get('add'))
<div class="alert alert-success">
    <p>{{$msg}}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Code</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    @foreach($city as $data)
    <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->code}}</td>
        <td>{{$data -> name}}</td>
        <td>
            <form action="{{route('city.destroy', $data -> id)}}" method="POST">
                <a class="btn btn-primary" href="{{route('city.edit', $data -> id)}}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>

    </tr>
    @endforeach
</table>
@endsection