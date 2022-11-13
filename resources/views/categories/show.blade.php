@extends('layouts.app')

@section('title')
@parent категория
@endsection

@section('content')

<div>
    Одна категория
</div>
@if($data)
<p><strong>ID: </strong>{{ $data['id'] }}</p>
<p><strong>Name: </strong>{{ $data['title'] }}</p>
@else
<p>Категории не существует</p>
@endif
@endsection