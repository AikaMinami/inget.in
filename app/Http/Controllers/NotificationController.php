<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\User;
use App\Models\Notification;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $username)
    {
        $request->validate([
            'username' => 'required',
            'remind_schedule_at' => 'required',
            'remind_schedule_format' => 'required',
            'remind_assignment_at' => 'required',
            'remind_assignment_format' => 'required',            
        ]);

        $authUser = Auth::user();     
        $notification = Notification::where('username', $username)->first();            
        $notification->remind_schedule_at = $request->get('remind_schedule_at');
        $notification->remind_schedule_format = $request->get('remind_schedule_format');
        $notification->remind_assignment_at = $request->get('remind_assignment_at');        
        $notification->remind_assignment_format = $request->get('remind_assignment_format');        

        $user = new User;
        $user->username = $authUser->username;

        $notification->user()->associate($user);
        $notification->save();

        // redirect after add data
        dd($notification);
        // return redirect()->route('notification')
        //     ->with('success', 'Student Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
