@extends('layout')

@section('main')
    <header class="px-6 py-4 container mt-20 text-center">
        <div class="max-w-4xl mx-auto mb-10">
            <h1 class="text-4xl text-white">Create <span class="text-blue-500">AI Art</span> with our AI image
                generator.</h1>
        </div>

        <a href="/dashboard/generate"
           class="bg-blue-500 rounded-full text-xs font-semibold text-white py-3 px-5 uppercase">
            Start Image Generating
        </a>
    </header>

    <h3 class="text-center mt-20 text-3xl text-white">Vitrine</h3>
    <div class="container mt-3 max-w-4xl grid grid-cols-2 md:grid-cols-3 gap-2 mx-auto p-2">
        <div class="w-full rounded-lg">
            <img src="{{asset('resources/icon.jpg')}}" alt="image" class="rounded-lg">
        </div>
        <div class="w-full">
            <img src="{{asset('resources/icon.jpg')}}" alt="image" class="rounded-lg">
        </div>
        <div class="w-full">
            <img src="{{asset('resources/icon.jpg')}}" alt="image" class="rounded-lg">
        </div>
        <div class="w-full">
            <img src="{{asset('resources/icon.jpg')}}" alt="image" class="rounded-lg">
        </div>
        <div class="w-full">
            <img src="{{asset('resources/icon.jpg')}}" alt="image" class="rounded-lg">
        </div>
        <div class="w-full">
            <img src="{{asset('resources/icon.jpg')}}" alt="image" class="rounded-lg">
        </div>
        <div class="w-full">
            <img src="{{asset('resources/icon.jpg')}}" alt="image" class="rounded-lg">
        </div>
        <div class="w-full">
            <img src="{{asset('resources/icon.jpg')}}" alt="image" class="rounded-lg">
        </div>
        <div class="w-full">
            <img src="{{asset('resources/icon.jpg')}}" alt="image" class="rounded-lg">
        </div>
    </div>
@endsection
