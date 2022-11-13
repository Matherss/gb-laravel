@extends('layouts.app')

@section('title')
@parent новости
@endsection

@section('content')
<div id="app">
    <div class="card-columns">
    @forelse ($news as $item => $key)
            <news-one title="{{ $key['title'] }}" text="{{ $key['text'] }}" link="{{ route('news.show', $key['id']) }}"></news-one>
            
            @empty
    <p>Нет новостей</p>
    @endforelse
    </div>
</div>
@endsection
