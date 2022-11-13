@extends('layouts.app')

@section('title')
@parent новость
@endsection

@section('content')
@if($news)

<h3>{{ $news['title'] }}</h3>
<p>{{ $news['text'] }}</p>
<p><strong>ID: </strong>{{ $news['id'] }}</p>

@else
Нет новости с таким id
@endif
@endsection