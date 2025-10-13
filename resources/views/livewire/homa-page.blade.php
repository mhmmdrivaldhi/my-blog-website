<div class="">
    <div class="space-y-5 text-green-600 lg:container">
        <div class="grid grid-cols-2 min-h-[70vh] px-5 place-items-center">
            <div class="col-span-2 px-5 py-8 lg:col-span-1 lg:py-3 space-y-7">
                <div class="flex flex-col items-center justify-center space-y-2 lg:items-start">
                    <div
                        class="flex items-center justify-center bg-black border-2 border-gray-500 rounded-full w-14 aspect-square">
                        <img src="{{ asset('img/profile-thumbnail.png') }}" class="rounded-full h-14" alt="">
                    </div>
                    <div class="relative mb-4">
                        <h1 class="font-extrabold text-gray-900 lg:text-2xl">Muhammad Rivaldhi</h1>
                        <small class="absolute font-sans text-gray-500 -right-[-1rem] lg:-right-[-106px]">Tech & Sport
                            Enthusiast</small>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center lg:items-start lg:justify-start gap-y-2">
                    <h1
                        class="text-2xl font-bold md:text-3xl lg:text-4xl lg:w-[35rem] md:w-[35rem] w-[18rem] text-center lg:text-left tracking-wider">
                        Find your lifestyle, unlock your passion, live healthy, grow stronger, and thrive with technology.</h1>
                </div>
            </div>
            <div class="col-span-2 p-5 lg:p-10 lg:col-span-1">
                <img src="{{ asset('img/thumbnail-home.jpg') }}" class="object-cover w-full h-full rounded-2xl" alt="">
            </div>
        </div>

        <div class="grid grid-cols-12">
            {{-- Start Article List --}}
            <div class="col-span-12 lg:col-span-8">
                @livewire('article-list')
            </div>
            {{-- End Article List --}}
            {{-- Start Article Trending --}}
            <div class="col-span-12 lg:col-span-4">
                @livewire('article-trending')
            </div>
            {{-- End Article Article Trending --}}
        </div>
    </div>
    {{-- Start Gallery Blog --}}
    <div class="pt-10">
        @livewire('gallery-blog')
    </div>
    {{-- End Gallery Blog --}}
    {{-- Start Contact Blog --}}
    <div class="pt-10">
        @livewire('contact-blog')
    </div>
    {{-- End  Contact Blog --}}
    {{-- Start Footer Blog --}}
    <div class="pt-10">
        @livewire('footer-blog')
    </div>
    {{-- End Footer Blog --}}
</div>
