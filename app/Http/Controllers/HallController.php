<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use DB;
>>>>>>> c85620f (adding new files and codes)

class HallController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        //
=======
        $hall = Hall::all();
        //dd($group);
        return view('hall.index', compact('hall'));
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
        return view('hall.create');
>>>>>>> c85620f (adding new files and codes)
    }

    /**
     * Store a newly created resource in storage.
     */
<<<<<<< HEAD
    public function store(Request $request)
    {
        //
=======
    public function store(Request $request){
        /* $request->validate([
            'name' => 'required',
            'part' => 'required',
        ]);

        DB::table('users')->insert([
            'name' => $request->name,
            'part' => $request->password,
        ]);
   */
        Hall::create($request->all());
   
        return redirect()->route('hall.index')
                        ->with('success','Hall created successfully.');
>>>>>>> c85620f (adding new files and codes)
    }

    /**
     * Display the specified resource.
     */
    public function show(Hall $hall)
    {
<<<<<<< HEAD
        //
=======
        return view('hall.show',compact('hall'));
>>>>>>> c85620f (adding new files and codes)
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hall $hall)
    {
<<<<<<< HEAD
        //
=======
        return view('hall.edit',compact('hall'));
>>>>>>> c85620f (adding new files and codes)
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hall $hall)
    {
<<<<<<< HEAD
        //
=======
        $request->validate([
            'lecture_hall_name' => 'required',
            'lecture_hall_place' => 'required',
        ]);

        DB::table('halls')->where('id',$request->id)->update([
            'lecture_hall_name' => $request->lecture_hall_name,
            'lecture_hall_place' => $request->lecture_hall_place,
        ]);
  
        // $hall->update($request->all());
  
        return redirect()->route('hall.index')
                        ->with('success','Hall updated successfully');
>>>>>>> c85620f (adding new files and codes)
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hall $hall)
    {
<<<<<<< HEAD
        //
    }
}
=======
        $hall->delete();
  
        return redirect()->route('hall.index')
                        ->with('success','Hall deleted successfully');
    }
}
>>>>>>> c85620f (adding new files and codes)
