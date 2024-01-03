<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session()->has('msg'))
                <div class="bg-white mb-4 bg-green-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">{{session('msg')}}</div>
                </div>
            @endif

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    You have {{auth()->user()->credits}} credits. <a href="/upgrade" class="text-blue-500">Buy more</a>
                </div>
                <div class="px-6 py-2 text-xs text-gray-900 dark:text-gray-100">
                    {{request()->visitor()->platform()}} - {{request()->visitor()->browser()}} - {{request()->visitor()->ip()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
