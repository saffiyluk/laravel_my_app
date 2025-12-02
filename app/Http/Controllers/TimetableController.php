<?php

namespace App\Http\Controllers;

use App\Models\Timetable;
<<<<<<< HEAD
=======
use App\Models\Subject;
use App\Models\Day;
use App\Models\Hall;
use App\Models\Group;
use App\Models\User;
>>>>>>> c85620f (adding new files and codes)
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        //
=======
        $timetable = Timetable::all();
        return view('timetable.index', compact('timetable'));
>>>>>>> c85620f (adding new files and codes)
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
        //
=======
        $subjects = Subject::all();
        $days = Day::all();
        $halls = Hall::all();
        $groups = Group::all();
        $users = User::all();
        
        return view('timetable.create', compact('subjects', 'days', 'halls', 'groups', 'users'));
>>>>>>> c85620f (adding new files and codes)
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        //
=======
        $request->validate([
            'user_id' => 'required',
            'subject_id' => 'required',
            'day_id' => 'required',
            'hall_id' => 'required',
            'group_id' => 'required',
            'time_from' => 'required',
            'time_to' => 'required',
        ]);

        Timetable::create($request->all());

        return redirect()->route('timetable.index')
                        ->with('success', 'Timetable created successfully.');
>>>>>>> c85620f (adding new files and codes)
    }

    /**
     * Display the specified resource.
     */
    public function show(Timetable $timetable)
    {
<<<<<<< HEAD
        //
=======
        return view('timetable.show', compact('timetable'));
>>>>>>> c85620f (adding new files and codes)
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Timetable $timetable)
    {
<<<<<<< HEAD
        //
=======
        $subjects = Subject::all();
        $days = Day::all();
        $halls = Hall::all();
        $groups = Group::all();
        $users = User::all();
        
        return view('timetable.edit', compact('timetable', 'subjects', 'days', 'halls', 'groups', 'users'));
>>>>>>> c85620f (adding new files and codes)
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Timetable $timetable)
    {
<<<<<<< HEAD
        //
=======
        $request->validate([
            'user_id' => 'required',
            'subject_id' => 'required',
            'day_id' => 'required',
            'hall_id' => 'required',
            'group_id' => 'required',
            'time_from' => 'required',
            'time_to' => 'required',
        ]);

        $timetable->update($request->all());

        return redirect()->route('timetable.index')
                        ->with('success', 'Timetable updated successfully.');
>>>>>>> c85620f (adding new files and codes)
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Timetable $timetable)
    {
<<<<<<< HEAD
        //
=======
        $timetable->delete();

        return redirect()->route('timetable.index')
                        ->with('success', 'Timetable deleted successfully.');
>>>>>>> c85620f (adding new files and codes)
    }
}
