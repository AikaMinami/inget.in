<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\Assignment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {        
        
        $assignments = DB::table('assignment')->whereRaw('DATEDIFF(due_date, NOW()) <= 3')->get();
        // dd($assignments);
        $user = Auth::user();
        return view('home', ['user' => $user, 
                            'assignments' => $assignments]);
        // ->with('assignments', Assignment::all())
        // ->with('assignments', Assignment::all())
        // ->with('user', Auth::user());
    }
}
