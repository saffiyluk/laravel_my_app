@extends('layouts.template')
@section('hall_content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Hall</h2>
        </div>
       
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('hall.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Lecturehall Name:</strong>
                <input type="text" lecturehall_name="lecture_hall_name" class="form-control" placeholder="lecturehall_name">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Lecture Hall Place:</strong>
                <input type="text" class="form-control" lecture_hall_hall_place="lecture_hall_place" placeholder="lecture_hall_place">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" href="{{ route('hall.index') }}"> Back</a>
        </div>
    </div>
   
</form>
@endsection