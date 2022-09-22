<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Rest;
use App\Models\Attendance;

class RestController extends Controller
{
    /*  休憩開始用  */
    
    public function restStart()
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
        
        $latestAttendanceId = $latestAttendance->id;
        
        $latestRest = Rest::where('attendance_id', $latestAttendanceId)->latest()->first();
        
        $latestRestEndTime = '';
        
        if($latestRest){
            $latestRestEndTime = $latestRest->end_time;
        }
        
        if($latestRest && !$latestRestEndTime){
            return redirect('/');
        }
        
        Rest::create([
            'attendance_id' => $latestAttendanceId,
            'start_time' => Carbon::now(),
        ]);
        
        return redirect('/');
    }
    
    /*  休憩終了用  */
    
    public function restEnd()
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
        
        $latestAttendanceId = $latestAttendance->id;
        
        $latestRest = Rest::where('attendance_id', $latestAttendanceId)->latest()->first();
        
        $latestRestEndTime = '';
        
        if($latestRest){
            $latestRestEndTime = $latestRest->end_time;
        }
        
        if(!$latestRest || $latestRestEndTime){
            return redirect('/');
        }
        
        $latestRest->update([
            'end_time' => Carbon::now(),
        ]);
        
        return redirect('/');
    }
}
