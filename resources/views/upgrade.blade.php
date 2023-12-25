@extends('layout')

@section('main')

    <header class="px-6 py-4 container mt-20 text-center">
        <h1 class="text-2xl text-white">Buy Credits (Pay with cryptocurrency)</h1>
    </header>

    <div class="container mt-3 max-w-7xl grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mx-auto p-2">
        @foreach($plans as $plan)
            <div class="relative flex flex-col rounded-xl bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-gray-900/20 shadow-md w-full p-8">
                <div class="relative pb-8 m-0 mb-8 overflow-hidden text-center text-gray-700 bg-transparent border-b rounded-none shadow-none bg-clip-border border-white/10">
                    <p class="block text-sm text-white uppercase">{{$plan->label}}</p>
                    <h1 class="flex justify-center mt-6 text-white text-7xl">
                        <span class="mt-2 text-4xl">$</span>{{$plan->cost}}
                    </h1>
                </div>
                <div class="text-center">{{$plan->credits}} credits</div>
                <div class="p-0 mt-12">
                    <form method="post" action="/upgrade/pay/{{$plan->id}}">
                        @csrf
                        <button type="submit" class="align-middle select-none font-sans font-bold text-center uppercase transition-all text-sm py-3.5 px-7 rounded-lg bg-gray-500 text-blue-gray-900 shadow-md shadow-blue-gray-500/10 hover:shadow-lg hover:shadow-blue-gray-500/20 focus:opacity-[0.85] active:shadow-none block w-full hover:scale-[1.02]">
                            Buy Now
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>



@endsection
