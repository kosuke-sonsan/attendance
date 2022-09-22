<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Rest;
use App\Models\Attendance;

class WorkController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $attendance = Attendance::all();
        
        return view('attendance', compact('attendance'));
    }
}
