<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
  <title>worker</title>
</head>

<body>
  <!-- hearder -->
  
  @yield('index.header')
  
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
  
  <!--  footer  -->
  
  @yield('index.footer')
</body>
</html>
