<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\User;
use App\Models\Notification;

class SettingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function account()
    {        
        $user = Auth::user();                
        return view('settingAccount', ['user' => $user]);
    }

    public function notification()
    {        
        $user = Auth::user();                
        $notification = Notification::where('user_id', $user->id)->first();                   
        return view('settingNotification', ['notification' => $notification]);
    }

    public function resetData()
    {        
        $user = Auth::user();        
        return view('settingResetData', ['user' => $user]);
    }
}
