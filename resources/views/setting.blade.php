@extends('layout.default')

@section('title', 'Sales management')

@section('content')
<div class= "title">
  <h3>SalesManagement</h3>
  <ul >
    <li class= "setting_list"><a href="#modal"><img class="add_button" src="storage/img/add_button.png" alt="＋"></a></li>
    <li class= "setting_list"><a href="/home"><img class="setting_button" src="storage/img/setting_button.png" alt="設定"></a></li>
    <li class= "setting_list"><form action="/logout" method="GET">
      @csrf
      <input class= "logout_button" type="submit" value="ログアウト">
    </form></li>
  </ul>
</div>

<div class="setting_box">
  <p class="setting_txt">Slack通知設定</p>
  <form action="">
    @csrf
    <table>
      <tr>
        <th class="slack_table_th">通知オン</th>
        <td><input type="radio"></td>
      </tr>
      <tr>
        <th class="slack_table_th">webhook URL</th>
        <td class="slack_table_td"><input class="slack_textbox" type="text"></td>
      </tr>
    </table>
    <input class="login_button" type="submit" value= "更新">
  </form>
</div>

<div class="setting_box">
  <p class="setting_txt">セールスステータス設定</p>
  <form action="/setting" method= "POST">
    @csrf
    <table>
      <tr>
        <th class="status_table_th">ステータス1</th>
        <th class="status_table_th">ステータス2</th>
        <th class="status_table_th">ステータス3</th>
        <th class="status_table_th">ステータス4</th>
        <th class="status_table_th">ステータス5</th>
      </tr>
      <tr>
        <td class="status_table_td"><input class="status_textbox" type="text" name="1"></td>
        <td class="status_table_td"><input class="status_textbox" type="text" name="2"></td>
        <td class="status_table_td"><input class="status_textbox" type="text" name="3"></td>
        <td class="status_table_td"><input class="status_textbox" type="text" name="4"></td>
        <td class="status_table_td"><input class="status_textbox" type="text" name="5"></td>
      </tr>
    </table>
    <input class="login_button" type="submit" value= "更新">
  </form>
</div>

@endsection