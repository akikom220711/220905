@extends('layout.default')

@section('title', 'Sales management')

@section('content')
<div>
  <h1>SalseManagement</h1>
  <p class="login_txt">ログイン</p>
</div>

<div class="login_box">
<form action="/" method = "POST">
  @csrf
  <ul>
    <li class="login_list">メールアドレス</li>
    <li class="login_list"><input class="login_textbox" type="text" name="email"></li>
    <li class="login_list">パスワード</li>
    <li class="login_list"><input class="login_textbox" type="text" name="password"></li>
</ul>

  <a href="/forgot" class="login_txt2">パスワードをお忘れの場合</a>
  
  <input class="login_button" type="submit" value="ログイン">
</form>
</div>

@endsection