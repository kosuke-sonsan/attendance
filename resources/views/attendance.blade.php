@extends('layouts.app')

@section('content')
  
  <div class="main">
  
  <!--  pagenation  -->
  
  @foreach($date as $recode)
    <div class="day_button_position">
      <button class="day_button"><</button>
        <p class="date">{{$recode->date}}</p>
      <button class="day_button">></button> 
    </div>
  @endforeach
  <!--  table  --> 
  
    <table class="table">
      
      <tr>
        <th class="table_text">名前</th>
        <th class="table_text">勤務開始</th>
        <th class="table_text">勤務終了</th>
        <th class="table_text">休憩時間</th>
        <th class="table_text">勤務時間</th>
      </tr>
    
    @foreach($attendance as $document)
      <tr>
        <td class="attendance_text">{{Auth::user()->name}}</td>
        <td class="attendance_text">{{$document->start_time}}</td>
        <td class="attendance_text">{{$document->end_time}}</td>
        <td class="attendance_text"></td>
        <td class="attendance_text"></td>
      </tr>
    @endforeach
    </table>
  
  </div>

@endsection