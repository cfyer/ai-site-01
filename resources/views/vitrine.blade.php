@extends('layout')

@section('title', 'Vitrine')

@section('main')
    <header class="px-6 py-4 container mt-20 text-center">
        <div class="max-w-4xl mx-auto mb-5">

        </div>
    </header>
    <div class="container mt-3 max-w-4xl grid grid-cols-2 md:grid-cols-3 gap-2 mx-auto p-2">

        @foreach($arts as $art)
            <div class="w-full rounded-lg">
                <img src="/{{$art->source}}" alt="{{$art->prompt}}" class="rounded-lg">
            </div>
        @endforeach

    </div>

    <div class="container mt-3 max-w-4xl text-white mx-auto p-2">{{$arts->links()}}</div>

@endsection

