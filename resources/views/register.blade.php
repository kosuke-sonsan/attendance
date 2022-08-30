@extends('layouts.auth')

@section('content')

  <div class="register_main">
    
    <p class="register_title">会員登録</p>
    
    <!--  main  -->
    
    <input type="text" class="register_name" placeholder="名前">
    <input type="email" class="register_email" placeholder="メールアドレス">
    <input type="password" class="register_password" placeholder="パスワード">
    <input type="text" class="register_password" placeholder="確認用パスワード">
    
    <button class="register_button">会員登録</button>
    
    <p class="register_attention">アカウントをお持ちの方はこちら</p>
    <a href="" style="text-decoration: none;">
      <p class="register_login">ログイン</p>
    </a>
    
  </div>

@endsection