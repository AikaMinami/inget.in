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

    public function index(Request $request)
    {             
        $sortBy = $request->get('sortBy');
        $assignments = Assignment::orderBy('due_date','asc')->orderBy('due_time','asc')->get();
        switch ($sortBy) {
            case "due_date":
                $assignments = Assignment::orderBy('due_date','asc')->orderBy('due_time','asc')->get();
                break;
            case "course":
                $assignments = Assignment::orderBy('course','asc')->orderBy('due_date','asc')->orderBy('due_time','asc')->get();
                break;
            case "level":
                $assignments = Assignment::orderByRaw("FIELD(level, 'Very Easy', 'Easy', 'Medium', 'Hard', 'Very Hard')")->orderBy('due_date','asc')->orderBy('due_time','asc')->get();                
                break;
            case "priority":
                $assignments = Assignment::orderBy('due_date','asc')
                                ->orderBy('due_time','asc')
                                ->orderByRaw("FIELD(level, 'Very Easy', 'Easy', 'Medium', 'Hard', 'Very Hard')")
                                ->orderBy('estimation', 'asc')->get();
            default:
                $assignments = Assignment::orderBy('due_date','asc')->orderBy('due_time','asc')->get();
          }        
        // return view('assignment.index', compact('assignments'));
        return view('assignment.index', ['assignments' => $assignments, 'sortBy' => $sortBy]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();                
        return view('assignment.create', ['user' => $user]);
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
        return view('assignment.show', ['assignment' => $assignment]);
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
        return view('assignment.edit', ['assignment' => $assignment]);
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
