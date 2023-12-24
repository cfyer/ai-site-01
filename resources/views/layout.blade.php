<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Fox AI')</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="font-family: figtree, sans-serif;" class="bg-gray-900">
<nav class="px-6 py-4 flex justify-between items-center">
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

@yield('main')

<footer class="mt-10 mb-5 bg-gray-800 max-w-7xl mx-auto border border-white border-opacity-5 lg:rounded-xl text-center py-16 px-10">
    <h5 class="text-lg text-white">Copyright</h5>
</footer>

</body>
</html>
