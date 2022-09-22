<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    /*  勤務開始用  */
    public function start()
    {
        $user = Auth::user();
        $user_id = $user->id;
        
        $latestAttendance = Attendance::where('user_id', $user_id)->latest()->first();
        
        $latestAttendanceDate = '';
        
        if($latestAttendance){
            $latestAttendanceDate = $latestAttendance->date;
        }
        
        $today = Carbon::today();
        $todayDate = $today->format('Y-m-d');
        
        if($latestAttendanceDate === $todayDate){
            return redirect('/');
        }
        
        Attendance::create([
            'user_id' => $user_id,
            'date' => $todayDate,
            'start_time' => Carbon::now(),
        ]);
        
        return redirect('/');
    }
    
    /*  退勤用  */
    
    public function end()
    {
        $user = Auth::user();
        $user_id = $user->id;
        
        $latestAttendance = Attendance::where('user_id', $user_id)->latest()->first();
        
        $latestAttendanceDate = '';
        
        if($latestAttendance){
            $latestAttendanceDate = $latestAttendance->date;
            $latestAttendanceEndTime = $latestAttendance->end_time;
        }
        
        $today = Carbon::today();
        $todayDate = $today->format('Y-m-d');
        
        if($latestAttendanceDate !== $todayDate){
            return redirect('/');
        }
        
        if($latestAttendanceEndTime){
            return redirect('/');
        }
        
        $latestAttendance->update([
            'end_time' => Carbon::now(),
        ]);
        
        return redirect('/');
    }
}
