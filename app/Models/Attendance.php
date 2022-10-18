<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'date',
        'start_time',
        'end_time',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    //restテーブル呼び起こし
    public function rests()
    {
        return $this->hasMany(Rest::class);
    }
    
    public function total_rests()
    {
        $rests = $this->rests;
        
        $total_rest_time_sec = 0;
        foreach($rests as $rest){
            $rest_start_time = $rest->start_time;
            $rest_end_time = $rest->end_time;
            
            $rest_start_time_sec = $this->to_sec($rest_start_time);
            $rest_end_time_sec = $this->to_sec($rest_end_time);
            
            $total_rest_time_sec += $rest_end_time_sec - $rest_start_time_sec;
        }
        
        return $this->to_time($total_rest_time_sec);
    }
    
    public function total_attendances()
    {
        $attendances = Attendance::where('user_id', $this->user_id)->get();
        
        $total_attendance_time_sec = 0;
        foreach($attendances as $attendance){
            $attendance_start_time = $attendance->start_time;
            $attendance_end_time = $attendance->end_time;
            
            $attendance_start_time_sec = $this->to_sec($attendance_start_time);
            $attendance_end_time_sec = $this->to_sec($attendance_end_time);
            
            $total_attendance_time_sec = $attendance_end_time_sec - $attendance_start_time_sec;
        }
        $total_time_sec = $total_attendance_time_sec - $this->to_sec($this->total_rests());
        
        return $this->to_time($total_time_sec);
    }
    
    public function to_sec($str)
    {
        $t = explode(":", $str); //配列（$t[0]（時）、$t[1]（分）、$t[2]（秒））にする
        $h = (int)$t[0];
        if (isset($t[1])) { //分の部分に値が入っているか確認
            $m = (int)$t[1];
        } else {
            $m = 0;
        }
        if (isset($t[2])) { //秒の部分に値が入っているか確認
            $s = (int)$t[2];
        } else {
            $s = 0;
        }
        return ($h * 60 * 60) + ($m * 60) + $s;
    }
    
    //H:M:Sの形に直す記述
    public function to_time($seconds)
    {
        $hours = floor($seconds / 3600);
        $minutes = floor(($seconds / 60) % 60);
        $seconds = $seconds % 60;
        
        $hms = sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);
        
        return $hms;
    }
}
