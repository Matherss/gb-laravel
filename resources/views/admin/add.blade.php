@extends('layouts.app')

@section('title')
@parent Admin
@endsection

@section('content')

<form>
  <div class="form-group" action="/news-add" method="post" style="margin-bottom: 20px;">
    <label for="exampleFormControlInput1">Название новости</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Введите название">
  </div>
  <div class="form-group" style="margin-bottom: 20px;">
    <label for="exampleFormControlInput2">Краткое описание новости</label>
    <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Введите описание">
  </div>
  <div class="form-group" style="margin-bottom: 20px;">
    <label for="exampleFormControlTextarea1">Полное описание новости</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Сохранить новость</button>
</form>

@endsection
