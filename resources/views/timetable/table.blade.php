<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Timetables</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('timetable.create') }}"> Add New Timetable</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Subject</th>
            <th>Day</th>
            <th>Hall</th>
            <th>Group</th>
            <th>Lecturer</th>
            <th>Time From</th>
            <th>Time To</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($timetable as $t)
        <tr>
            <td>{{ $t->id }}</td>
            <td>{{ optional($t->subject)->name ?? 'N/A' }}</td>
            <td>{{ optional($t->day)->day_name ?? 'N/A' }}</td>
            <td>{{ optional($t->hall)->lecture_hall_name ?? 'N/A' }}</td>
            <td>{{ optional($t->group)->name ?? 'N/A' }}</td>
            <td>{{ optional($t->subject)->lecturer_name ?? 'N/A' }}</td>
            <td>{{ $t->time_from }}</td>
            <td>{{ $t->time_to }}</td>
            <td>
                <form action="{{ route('timetable.destroy',$t->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('timetable.show',$t->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('timetable.edit',$t->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>