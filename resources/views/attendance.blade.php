<!DOCTYPE html>
<html lang="ja">
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
  
  <!--  pagenation  -->
  
  <p class="pagenation"></p>
  
  <!--  table  -->
  
  <div class="main">
  
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
  <!--  footer  -->
  
  <footer class="footer">
    <p class="footer_text">Atte, inc.</p>
  </footer>
</body>
</html>