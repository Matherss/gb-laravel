@extends('layouts.app')

@section('title')
@parent авторизация
@endsection

@section('content')
<form action="/auth" method="post" style="display:grid; gap: 10px; max-width:450px; justify-content:center; margin: 0 auto;">
    <label for="login">Логин</label>
    <input type="text" name="login" id="">
    <label for="password">Пароль</label>
    <input type="text" name="password" id="">
    <div>
    <input type="checkbox" name="remember" id="remember" style="cursor: pointer;margin: 0;"><label for="remember" style="cursor: pointer;padding-left: 20px">Запомнить меня</label></input></div>
    <button type="submit">Вход</button>
</form>
@endsection