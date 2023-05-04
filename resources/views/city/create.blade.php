@extends('city.layout')

@section('content')
<div class="form-group row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Add New Record</h2>
        </div>
        <div class="float-right">
            <strong></strong>
        </div>
        <div class="float-right">

        </div>
    </div>
</div>

<form action="{{route('city.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>code:</strong>
                <input type="text" class="form-control" placeholder="enter city code" name="code">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" class="form-control" placeholder="enter city name" name="name">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">submit</button>
                <a class="btn btn-success" href="{{route('city.index')}}">Back</a>
            </div>
        </div>
    </div>
</form>
@endsection