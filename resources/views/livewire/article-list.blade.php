<div>
    <div class="py-10">
        <h1 class="text-3xl font-semibold text-gray-900 font-jost">Lates Articles</h1>
    </div>
    <div class="space-y-5">
        @foreach ($articles as $article)
        <div class="grid grid-cols-3 gap-5">
            <div class="w-full col-span-1 overflow-hidden shadow-sm bg-slate-300 rounded-xl h-96">
                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="object-cover w-full h-full">
            </div>
            <div class="col-span-2 space-y-3">
                <p class="px-3 py-1 text-white bg-black rounded-full w-fit">{{ $article->category->category_name }}</p>
                <h1 class="text-2xl font-semibold tracking-wider">{{ $article->title }}</h1>
                <small class="text-gray-500">{{ $article->publish_date }}</small>
                <p class="text-black">{{ $article->content }}</p>
                <div>
                    <a href="#" class="px-3 py-1 rounded-full btn btn-outline btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
