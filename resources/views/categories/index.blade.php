@extends('layouts.app')

@section('title')
@parent категории
@endsection

@section('content')

<div>
    Категории
</div>



@forelse($data as $item)
    <a class="btn btn-outline-secondary" style="margin-right: 20px;" target="_blank" href="{{ route('news.category', $item['id']) }}">Категория {{ $item['name'] }}</a>
@empty
 <li class="list-group-item">Категорий нет</li> 
@endforelse

@endsection
