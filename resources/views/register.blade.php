@extends('layouts.auth')

@section('title', 'register')

@section('content')

  <div class="register_main">
    
    <p class="register_title">会員登録</p>
    
    <!--  main  -->
    <form action="/register" method="post">
      @csrf
      <input type="text" class="register_name" placeholder="名前" name="name">
      <input type="email" class="register_email" placeholder="メールアドレス" name="email">
      <input type="password" class="register_password" placeholder="パスワード" name="password">
      <input type="password" class="register_password" placeholder="確認用パスワード" name="password_confirmation">
    
      <button class="register_button" type="submit">会員登録</button>
    </form>
    
    <p class="register_attention">アカウントをお持ちの方はこちら</p>
    <a href="/login" style="text-decoration: none;">
      <p class="register_login">ログイン</p>
    </a>

  </div>

@endsection