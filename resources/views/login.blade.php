@extends('layouts.auth')

@section('content')

<!--  login  -->

  <div class="login_main">
    
    <p class="login_title">ログイン</p>
    
    <input type="email" class="login_email" placeholder="メールアドレス">
    <input type="password" class="login_password" placeholder="パスワード">
    <button class="login_button">ログイン</button>
    
    
    <p class="login_attention">アカウントをお持ちでない方はこちら</p>
    <a href="/register" style="text-decoration: none;">
      <p class="login_register">会員登録</p>
    </a>
    
  </div>
@endsection