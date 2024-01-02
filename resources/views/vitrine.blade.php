@extends('layout')

@section('title', 'Vitrine')

@section('main')
    <header class="px-2 py-4 container mt-20 text-center max-w-4xl mx-auto mb-5 ">
        <h1 class="text-2xl text-white mb-4">Vitrine</h1>
        <form>
            <label for="q" class="sr-only">Search</label>
            <div class="relative">
                <input type="search" id="q" name="q" class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search">
                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600">Search</button>
            </div>
        </form>
    </header>
    <div class="container mt-3 max-w-4xl grid grid-cols-2 md:grid-cols-3 gap-2 mx-auto p-2">

        @foreach($arts as $art)
            <div class="w-full rounded-lg">
                <img src="/{{$art->source}}" alt="{{$art->prompt}}" title="{{$art->prompt}}" class="rounded-lg">
            </div>
        @endforeach

    </div>

    <div class="container mt-3 max-w-4xl text-white mx-auto p-2">{{$arts->links()}}</div>
@endsection

