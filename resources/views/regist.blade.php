@extends('layout.default')

@section('title', 'Sales management')

@section('content')
<div>
  <h1>SalseManagement</h1>
  <p class="login_txt">新規登録</p>
</div>

<div class="login_box">
<form action="/regist" method = "POST">
  @csrf
  <ul>
    <li class="login_list">ユーザー名</li>
    <li class="login_list"><input class="login_textbox" type="text" name="name"></li>
    <li class="login_list">メールアドレス</li>
    <li class="login_list"><input class="login_textbox" type="text" name="email"></li>
    <li class="login_list">パスワード</li>
    <li class="login_list"><input class="login_textbox" type="text" name="password"></li>
  </ul>
  
  <input class="login_button" type="submit" value="新規登録">
</form>
</div>

@endsection