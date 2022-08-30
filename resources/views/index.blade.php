@extends('layouts.app')

@section('content')

  <!--  attendance  -->
  
  <div class="attendance_main">
  
    <p class="attendance_title">{{}}さんお疲れ様です！</p>
  
    <div class="attendance_position">
      <form action="" method="post">
        @csrf
        <button class="attendance_button">勤務開始</button>
      </form>
    
      <form action="" method="post">
        @csrf
        <button class="attendance_button">勤務終了</button>
      </form>
    </div>
    
    <div class="attendance_position">
      <form action="" method="post">
        @csrf
        <button class="attendance_button">休憩開始</button>
      </form>
    
      <form action="" method="post">
        @csrf
        <button class="attendance_button">休憩終了</button>
      </form>
    </div>
  </div>

@endsection