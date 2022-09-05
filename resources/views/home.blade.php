@extends('layout.default')

@section('title', 'Sales management')

@section('content')
@if (Auth::check())

<div class= "title">
  <h3>SalesManagement</h3>
  <ul >
    <li class= "setting_list"><a href="#modal"><img class="add_button" src="storage/img/add_button.png" alt="＋"></a></li>
    <li class= "setting_list"><a href="/setting"><img class="setting_button" src="storage/img/setting_button.png" alt="設定"></a></li>
    <li class= "setting_list"><form action="/logout" method="GET">
      @csrf
      <input class= "logout_button" type="submit" value="ログアウト">
    </form></li>
  </ul>
</div>

<div class="search_form">
<form action="{{route('search', ['user_id' => $user->id])}}" method= "POST">
  @csrf
  <input class="search_box" type="text" name="search" placeholder="企業名または代表者名で検索">
</form>
</div>

<div class="company_box">
@foreach ($status as $state)
  <table class="company_table">
    <tr class="company_tr1"><th class="company_th">{{$state -> status}}</th></tr>
    @if ($company != null)
      @foreach ($company as $name)
        @if ($name->status == $state)
          <tr class="company_tr2"><td>
            <!--<form action="{{route('select', ['selected' => $name->id])}}", method="POST">
              @csrf
                <input class="company_button" type="submit" value="{{$name -> company_name}}">
            </form>-->
            <form action="#modal", method="GET">
              @csrf
                <input class="company_button" type="submit" name="{{$name -> id}}" value="{{$name -> company_name}}">
            </form>
          </td></tr>
        @endif
      @endforeach
    @endif
  </table>
@endforeach
</div>


<div class="lightbox" id="modal">
  <a href="#" class="close"></a>

  <div class="lightbox-wrapper">
@if ($selected_company != null)
<div class="lightbox_table">
  @foreach ($selected_company as $company)
  <form action="{{route('edit', ['id' => $company->id])}}" method= "POST">
    @csrf
    <table>
      <tr>
        <th class="lightbox_table_th">会社名</th>
        <td><input type="text" name="company_name" value="{{$company -> company_name}}"></td>
      </tr>
      <tr>
        <th class="lightbox_table_th">代表者名</th>
        <td><input type="text" name="head_name" value="{{$company -> head_name}}"></td>
      </tr>
      <tr>
        <th class="lightbox_table_th">電話番号</th>
        <td><input type="text" name="tel" value="{{$company -> tel}}"></td>
      </tr>
      <tr>
        <th class="lightbox_table_th">メールアドレス</th>
        <td><input type="text" name="email" value="{{$company -> email}}"></td>
      </tr>
      <tr>
        <th class="lightbox_table_th">セールスステータス</th>
        <td><select name="status_id" size="1">
              @foreach ($status as $state)
                @if ($state -> id == $company -> status_id)
                  <option value="{{$state -> id}}" selected>{{$state -> status}}</option>
                @else
                  <option value="{{$state -> id}}">{{$state -> status}}</option>
                @endif
              @endforeach
            </select></td>
      </tr>
    </table>
    <input class="login_button" type="submit" value="更新">
  </form>
  @endforeach
</div>
@else
<div class="lightbox_table">
  <form action="{{route('add', ['user_id' => $user->id])}}" method= "POST">
    @csrf
    <table>
      <tr>
        <th class="lightbox_table_th">会社名</th>
        <td><input type="text" name="company_name"></td>
      </tr>
      <tr>
        <th class="lightbox_table_th">代表者名</th>
        <td><input type="text" name="head_name"></td>
      </tr>
      <tr>
        <th class="lightbox_table_th">電話番号</th>
        <td><input type="text" name="tel"></td>
      </tr>
      <tr>
        <th class="lightbox_table_th">メールアドレス</th>
        <td><input type="text" name="email"></td>
      </tr>
      <tr>
        <th class="lightbox_table_th">セールスステータス</th>
        <td><select name="status_id" size="1">
              @foreach ($status as $state)
                  <option value="{{$state -> id}}">{{$state -> status}}</option>
              @endforeach
            </select></td>
      </tr>
    </table>
    <input class="login_button" type="submit" value="追加">
  </form>
</div>
@endif

@endif
</div>
</div>

@endsection