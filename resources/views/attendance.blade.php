@extends('layouts.attendance')

@section('attendance')
@include('components.header')
  
  <div class="main">
  
  <!--  pagenation  -->
  
    <div class="day_button_position">
      <button class="day_button"><</button>
        <p class="date">{{}}</p>
      <button class="day_button">></button> 
    </div>
  
  <!--  table  --> 
  
    <table class="table">
      
      <tr class="table_text">
        <th>名前</th>
        <th>勤務開始</th>
        <th>勤務終了</th>
        <th>休憩時間</th>
        <th>勤務時間</th>
      </tr>
    
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    </table>
  
  </div>
@include('components.footer')

@endsection