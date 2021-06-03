<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Assignment;
use Auth;
use DB;
use Carbon\Carbon;


class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {            
        $assignments = Assignment::all();             
        // dd($assignments);
        // return view('assignment', ['assignments' => $assignments]);
        return view('assignment', compact('assignments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();                
        return view('assignmentCreate', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'course' => 'required',
            'due_time' => 'required',
            'due_date' => 'required',
            'level' => 'required',
            'estimation' => 'required',
        ]);
        
        $authUser = Auth::user();             
        $assignment = new Assignment;
        $assignment->user_id = $authUser->id;
        $assignment->name = $request->get('name');
        $assignment->course = $request->get('course');
        $assignment->description = $request->get('description');
        $assignment->submit_location = $request->get('submit_location');
        $assignment->due_date = $request->get('due_date');
        $assignment->due_time = $request->get('due_time');
        $assignment->level = $request->get('level');
        $assignment->estimation = $request->get('estimation');        

        $user = new User;
        $user->id = $assignment->user_id;
        $assignment->user()->associate($user);
        $assignment->save();         
        
        // redirect after add data
        return redirect()->route('assignment.index')
            ->with('success', 'Assignment Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
        $assignment = Assignment::find($id);
        return view('assignmentDetail', ['assignment' => $assignment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $assignment = Assignment::find($id);
        return view('assignmentEdit', ['assignment' => $assignment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'course' => 'required',
            'due_time' => 'required',
            'due_date' => 'required',
            'level' => 'required',
            'estimation' => 'required',
        ]);
                  
        $assignment = Assignment::find($id);        
        $assignment->name = $request->get('name');
        $assignment->course = $request->get('course');
        $assignment->description = $request->get('description');
        $assignment->submit_location = $request->get('submit_location');
        $assignment->due_date = $request->get('due_date');
        $assignment->due_time = $request->get('due_time');
        $assignment->level = $request->get('level');
        $assignment->estimation = $request->get('estimation');        

        $user = new User;
        $user->id = $assignment->user_id;
        $assignment->user()->associate($user);
        $assignment->save();         
        
        // redirect after add data
        return redirect()->route('assignment.show', $assignment->id)
            ->with('success', 'Assignment Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Assignment::find($id)->delete();
        return redirect()->route('assignment.index')
            ->with('success', 'Assignment Successfully Deleted');
    }

    public function reset_assignment($id)
    {
        Assignment::where('user_id', $id)->delete();
        return redirect()->route('reset_data')
            ->with('success', 'Assignment Successfully Reset');
    }
}
