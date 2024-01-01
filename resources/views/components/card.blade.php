<div class="h-70 bg-neutral-800 rounded-3xl text-neutral-300 p-4 flex flex-col items-start justify-center gap-3">
    <div class="rounded-2xl">
        <img src="/storage/{{$article->image}}" alt="{{$article->title}}" class="rounded-2xl">
    </div>
    <div class="font-extrabold">{{$article->title}}</div>
    <a href="/articles/{{$article->slug}}" class="bg-blue-500 rounded-full text-xs font-semibold text-white py-3 px-5">See more</a>
</div>
