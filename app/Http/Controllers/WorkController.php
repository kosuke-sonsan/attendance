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
    public function index(Request $request)
    {
        if($request->date){
            $date = $request->date;
        } else {
            $date = Carbon::today()->format('Y-m-d');
        }
        
        $attendances = Attendance::where('date', $date)->paginate(5)->withQueryString();
        
        return view('attendance', compact('date', 'attendances'));
    }
    
    public function addDate(Request $request)
    {
        $date = $request->date;
        
        $dt = new Carbon($date);
        
        return redirect()->route('attendance.view', ['date' => $dt->addDay()->format('Y-m-d')]);
    }
    
    public function subDate(Request $request)
    {
        $date = $request->date;
        
        $dt = new Carbon($date);
        
        return redirect()->route('attendance.view', ['date' => $dt->subDay()->format('Y-m-d')]);
    }
}
