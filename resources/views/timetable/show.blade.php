@extends('layouts.template')
@section('timetable_content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Timetable Details</h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Subject:</strong>
                {{ optional($timetable->subject)->name ?? 'N/A' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Day:</strong>
                {{ optional($timetable->day)->day_name ?? 'N/A' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hall:</strong>
                {{ optional($timetable->hall)->lecture_hall_name ?? 'N/A' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Group:</strong>
                {{ optional($timetable->group)->name ?? 'N/A' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Instructor:</strong>
                {{ optional($timetable->user)->name ?? 'N/A' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Time From:</strong>
                {{ $timetable->time_from }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Time To:</strong>
                {{ $timetable->time_to }}
            </div>
        </div>
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('timetable.index') }}"> Back</a>
        </div>
    </div>
@endsection