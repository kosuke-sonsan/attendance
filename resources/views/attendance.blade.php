@extends('layouts.app')

@section('title', 'attendance')

@section('content')

  
  <div class="main">
  
  <!--  pagenation  -->
  
    <div class="day_button_position">
      
      <form action="/attendance/date/sub" method="get">
        @csrf
        <input type="hidden" value="{{ $date }}" name="date">
        <button class="day_button"><</button>
      </form>
      
      <p class="date">{{$date}}</p>
      
      <form action="/attendance/date/add" method="get">
        @csrf
        <input type="hidden" value="{{ $date }}" name="date">
        <button class="day_button">></button>
      </form>
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
      
      @foreach($attendances as $attendance)
      <tr>
        <td class="attendance_text">{{ $attendance->user->name }}</td>
        
        <td class="attendance_text">{{ $attendance->start_time }}</td>
        
        <td class="attendance_text">{{ $attendance->end_time }}</td>
        
        <td class="attendance_text">{{ $attendance->total_rests() }}</td>
        
        <td class="attendance_text">{{ $attendance->total_attendances() }}</td>
      </tr>
      @endforeach
      
    </table>
  
    {{ $attendances->links() }}
  
  </div>

@endsection