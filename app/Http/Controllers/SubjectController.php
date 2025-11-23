<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use DB;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();
        //dd($subjects);
        return view('subjects.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        /* $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        DB::table('users')->insert([
            'name' => $request->name,
            'password' => $request->password,
            'email' => $request->email,
     
        ]);
   */
        Subject::create($request->all());
   
        return redirect()->route('subjects.index')
                        ->with('success','Subject created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subjects)
    {
        return view('subjects.show',compact('subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subjects)
    {
        return view('subjects.edit',compact('subjects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subjects)
    {
        $request->validate([
            'subject_code' => 'required',
            'subject_name' => 'required',
            'lecturer_name' => 'required',
        ]);

        DB::table('subjects')->where('id',$request->id)->update([
            'subject_code' => $request->subject_code,
            'subject_name' => $request->subject_name,
            'lecturer_name' => $request->lecturer_name,
        ]);
  
        // $student->update($request->all());
  
        return redirect()->route('subjects.index')
                        ->with('success','Subject updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subjects)
    {
        $subjects->delete();
  
        return redirect()->route('subjects.index')
                        ->with('success','Subject deleted successfully');
    }
}
