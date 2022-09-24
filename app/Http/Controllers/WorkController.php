<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Rest;
use App\Models\Attendance;
use Illuminate\Support\Facades\DB;

class WorkController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $user_id = $user->id;
        
        $date = Attendance::select('date')->first();
        
        $attendance = Attendance::pluck('start_time', 'end_time');
        
        return view('attendance', compact('date', 'attendance'));
    }
}
