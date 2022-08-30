@extends('layouts.app')

@section('content')
  
  <div class="main">
  
  <!--  pagenation  -->
  
    <div class="day_button_position">
      <button class="day_button"><</button>
        <p class="date">{{}}</p>
      <button class="day_button">></button> 
    </div>
  
  <!--  table  --> 
  
    <table class="table">
      
      <tr>
        <th class="table_text">名前</th>
        <th class="table_text">勤務開始</th>
        <th class="table_text">勤務終了</th>
        <th class="table_text">休憩時間</th>
        <th class="table_text">勤務時間</th>
      </tr>
    
    <tr>
      <td class="attendance_text"></td>
      <td class="attendance_text"></td>
      <td class="attendance_text"></td>
      <td class="attendance_text"></td>
      <td class="attendance_text"></td>
    </tr>
    </table>
  
  </div>

@endsection