@extends('layouts.template')
   
@section('timetable_content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Timetable</h2>
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
  
    <form action="{{ route('timetable.update',$timetable->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <input type="hidden" name="id" value="{{ $timetable->id }}"> <br/>

            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Instructor:</strong>
                    <select name="user_id" class="form-control" required>
                        <option value="">Select Instructor</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}" {{ $timetable->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Subject:</strong>
                    <select name="subject_id" class="form-control" required>
                        <option value="">Select Subject</option>
                        @foreach ($subjects as $subject)
                            <option value="{{ $subject->id }}" {{ $timetable->subject_id == $subject->id ? 'selected' : '' }}>{{ $subject->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Day:</strong>
                    <select name="day_id" class="form-control" required>
                        <option value="">Select Day</option>
                        @foreach ($days as $day)
                            <option value="{{ $day->id }}" {{ $timetable->day_id == $day->id ? 'selected' : '' }}>{{ $day->day_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Hall:</strong>
                    <select name="hall_id" class="form-control" required>
                        <option value="">Select Hall</option>
                        @foreach ($halls as $hall)
                            <option value="{{ $hall->id }}" {{ $timetable->hall_id == $hall->id ? 'selected' : '' }}>{{ $hall->lecture_hall_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Group:</strong>
                    <select name="group_id" class="form-control" required>
                        <option value="">Select Group</option>
                        @foreach ($groups as $group)
                            <option value="{{ $group->id }}" {{ $timetable->group_id == $group->id ? 'selected' : '' }}>{{ $group->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Time From:</strong>
                    <input type="time" name="time_from" value="{{ $timetable->time_from }}" class="form-control" required>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Time To:</strong>
                    <input type="time" name="time_to" value="{{ $timetable->time_to }}" class="form-control" required>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('timetable.index') }}"> Back</a>
            </div>
        </div>
   
    </form>
@endsection
