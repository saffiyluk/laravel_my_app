<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use DB;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $group = Group::all();
        //dd($group);
        return view('group.index', compact('group'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('group.create');
    }

    /**
     * Store a newly created resource in storage.
     */
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
        Subject::create($request->all());
   
        return redirect()->route('group.index')
                        ->with('success','Group created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        return view('group.show',compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        return view('group.edit',compact('group'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group)
    {
        $request->validate([
            'name' => 'required',
            'part' => 'required',
        ]);

        DB::table('groups')->where('id',$request->id)->update([
            'name' => $request->name,
            'part' => $request->part,
        ]);
  
        // $student->update($request->all());
  
        return redirect()->route('group.index')
                        ->with('success','Group updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        $group->delete();
  
        return redirect()->route('group.index')
                        ->with('success','Group deleted successfully');
    }
}
