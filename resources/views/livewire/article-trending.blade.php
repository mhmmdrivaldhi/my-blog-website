<div class="p-10 space-y-5 lg:p-0">
    <div class="flex items-center gap-2">
        <h1 class=" title">POPULAR POSTS</h1>
        <div class="flex-1 border-b-2 border-gray-400"></div>
    </div>
    <div class="space-y-5">
        @foreach ($articles as $article)
            <div class="grid gap-2 lg:gap-10 lg:grid-cols-3">
                <div class="relative w-full h-full col-span-3 lg:col-span-1 bg-slate-300 rounded-xl">
                    <div class="absolute flex items-center justify-center w-8 h-8 bg-red-600 rounded-full -top-3 -left-3">
                        <i class="text-2xl text-gray-100 fa-solid fa-fire"></i>
                    </div>
                    <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="object-cover w-full h-[15rem] md:h-[35rem] lg:h-[10rem] rounded-xl">
                </div>
                <div class="col-span-3 mt-5 space-y-2 lg:col-span-2">
                    <small class="px-2 py-1 text-white rounded-lg bg-primary w-fit">{{ $article->category->category_name }}</small>
                    <h1 class="text-2xl font-semibold tracking-wider lg:text-sm md:text-4xl">{{ $article->title }}</h1>
                    <small class="text-gray-500">{{ $article->publish_date }}</small>
                    <div>
                        <a href="#" class="px-3 py-1 rounded-full btn btn-outline btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
