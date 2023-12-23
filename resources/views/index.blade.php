<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fox AI</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="font-family: figtree, sans-serif;" class="bg-gray-900">
<section class="px-6 py-4">
    <nav class="flex justify-between items-center">
        <div>
            <a href="/" wire><img src="{{asset('resources/foxai_logo.png')}}" alt="Fox AI Logo" width="50"></a>
        </div>

        <div>
            @auth()
                <a href="/dashboard" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white py-3 px-5">
                    Dashboard
                </a>
            @else
                <a href="/register" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white py-3 px-5">
                    Sign Up
                </a>
            @endauth
        </div>
    </nav>

    <header class="container mt-20 text-center">
        <div class="max-w-4xl mx-auto mb-10">
            <h1 class="text-4xl text-white">Create <span class="text-blue-500">AI Art</span> with our AI image
                generator.</h1>
        </div>

        <a href="/dashboard/generate" class="bg-blue-500 rounded-full text-xs font-semibold text-white py-3 px-5 uppercase">
            Start Image Generating
        </a>
    </header>
</section>

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

<footer class="mt-10 mb-5 bg-gray-800 max-w-7xl mx-auto border border-white border-opacity-5 rounded-xl text-center py-16 px-10">
    <h5 class="text-lg text-white">Copyright</h5>
</footer>

</body>
</html>
