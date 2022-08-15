<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
  <title>worker</title>
</head>

<body>
  <!-- hearder -->
  
  <header class="header">
    <div class="inner">
      <div class="title_1">Atte</div>
      <div class="menu">
        <ul>
          <li><a href="" class="nav_list_1">ホーム</a></li>
          <li><a href="" class="nav_list_1">日付一覧</a></li>
          <li><a href="" class="nav_list_1">ログアウト</a></li>
        </ul>
      </div>
    </div>
  </header>
  
  <div class="main">
  
  <!-- title -->
  
    <p class="title_2">{{}}さんお疲れ様です！</p>
  
  <!--  attendance  -->
  
    <form action="" name="post">
      @csrf
      <button class="button_1">勤務開始</button>
    </form>
  
    <form action="" name="post">
      @csrf
      <button class="button_2">勤務終了</button>
    </form>
    
    <form action="" name="post">
      @csrf
      <button class="button_3">休憩開始</button>
    </form>
  
    <form action="" name="post">
      @csrf
      <button class="button_4">休憩終了</button>
    </form>
  </div>
  
  <!--  footer  -->
  
  <footer class="footer">
    <p class="footer_text">Atte, inc.</p>
  </footer>
</body>
</html>