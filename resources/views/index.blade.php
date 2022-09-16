@extends('layouts.app')

@section('content')

  <!--  attendance  -->
  
  <div class="attendance_main">
  
    <p class="attendance_title">{{Auth::user()->name}}さんお疲れ様です！</p>
  
    <div class="attendance_position">
      <form action="/attendance/start" method="post">
        @csrf
        <button class="attendance_button" name="start_time">勤務開始</button>
      </form>
    
      <form action="/attendance/stop" method="post">
        @csrf
        <button class="attendance_button" name="end_time">勤務終了</button>
      </form>
    </div>
    
    <div class="attendance_position">
      <form action="" method="post">
        @csrf
        <button class="attendance_button" name="rest_start">休憩開始</button>
      </form>
    
      <form action="" method="post">
        @csrf
        <button class="attendance_button" name="rest_end">休憩終了</button>
      </form>
    </div>
  </div>

@endsection