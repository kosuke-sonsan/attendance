<!DOCTYPE html>
<html lang="ja">
<head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-DHZGX16JVB"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-DHZGX16JVB');
  </script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
  <link rel="shortcut icon" type="image/x-icon" herf="{{ asset('/favicon.ico') }}">
  <title>Atte - @yield('title')</title>
  <meta name="description" content="株式会社Atteの勤怠管理アプリログインページです。">
</head>

<body>
  @component('components.login-header')
  @endcomponent
  @yield('content')
  @component('components.footer')
  @endcomponent
</body>
</html>