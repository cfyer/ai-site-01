<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Collection
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="container max-w-7xl grid grid-cols-2 md:grid-cols-3 gap-2 mx-auto">
                        @foreach($arts as $art)
                            <div class="w-full rounded-lg">
                                <img src="{{asset($art->source)}}" title="{{$art->prompt}}" class="rounded-lg" alt="{{$art->prompt}}">
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
