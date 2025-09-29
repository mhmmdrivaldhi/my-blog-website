<div class="space-y-10">
    <div class="flex flex-col items-center justify-center lg:flex-row lg:justify-start lg:items-start">
        <h1 class="text-3xl font-semibold tracking-wider text-gray-900 font-jost">- Latest Articles -</h1>
    </div>
    <div class="space-y-5">
        @foreach ($articles as $article)
        <div class="grid grid-cols-1 gap-10 lg:grid-cols-3 place-items-center">
            <div class="w-full ml-10 overflow-hidden shadow-sm md:ml-10 lg:col-span-1 bg-slate-300 rounded-xl md:h-[35rem] lg:h-[20rem] h-[15rem]">
                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="object-cover w-full h-full">
            </div>
            <div class="col-span-2 p-5 space-y-3">
                <small class="px-3 py-1 text-white rounded-lg bg-primary w-fit">{{ $article->category->category_name }}</small>
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
