@extends('layout')

@section('main')
    <header class="px-6 py-4 container mt-20 text-center">
        <div class="max-w-4xl mx-auto mb-5">
            <img src="/storage/{{$article->image}}" alt="{{$article->title}}" class="rounded-3xl">
        </div>
        <h1 class="text-2xl text-white">{{$article->title}}</h1>
    </header>
    <div class="container mt-3 max-w-4xl text-white mx-auto px-6 py-4 leading-9 text-justify">{!! $article->body !!}</div>
@endsection
