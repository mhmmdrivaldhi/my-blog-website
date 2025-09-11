<div>
    <div class="p-10 mx-auto container-mx">
        <div class="p-12 bg-gray-300 shadow-sm card">
        <div class="flex justify-end pb-2">
            <x-button-back route="{{ route('article') }}"></x-button-back>
        </div>
            <h1 class="text-3xl font-bold text-gray-900 ">{{ $article->title }}</h1>
            <div class="font-extrabold">
                <div class="badge badge-outline badge-accent">{{ $article->category->category_name }}</div>
                <div class="capitalize {{ $article->status === 'published' ? 'badge badge-outline badge-success' : 'badge badge-outline badge-warning' }}">{{ $article->status }}</div>
                <div class="text-gray-800 ">{{ $article->status == 'published' ? $article->publish_date : 'Not Published' }}</div>
            </div>
            <div class="grid grid-cols-3 gap-5">
                <div class="col-span-1">
                    <p class="mt-5 text-gray-800 ">{{ $article->content }}</p>
                </div>
                <div class="col-span-2">
                    <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="object-cover w-full rounded-lg aspect-video h-90">
                </div>
            </div>
        </div>
    </div>
</div>
