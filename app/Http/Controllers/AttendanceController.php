<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Attendance;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    public function start(Request $request)
    {
        $user = Attendance::all()->where('id', $request->id)->first();
        
        if(DB::table('attendances')->where('id', $request->id)->exists() && [$request->id === $users->id])
        {
            return redirect('/');
        } else {
            $start_time = $request->start_time;
            
            Attendance::create([
                'start_time' => $start_time,
            ]);
            
            return redirect('/');
        }
    }
}
