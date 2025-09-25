<div class="text-green-600 lg:container">
    <div class="grid grid-cols-2 h-[70vh] px-5 place-items-center">
        <div class="col-span-2 px-5 py-8 lg:col-span-1 lg:py-8 space-y-7">
            <div class="flex flex-col items-center justify-center space-y-2 lg:items-start">
                <div class="flex items-center justify-center bg-black border-2 border-gray-500 rounded-full w-14 aspect-square">
                <img src="{{ asset('img/profile-thumbnail.png') }}" class="rounded-full h-14" alt="">
            </div>
            <h1 class="mt-3 font-extrabold text-gray-900 lg:text-2xl">Muhammad Rivaldhi</h1>
            <small class="font-sans text-gray-500">Tech & Sport Enthusiast</small>
            </div>
            <div class="flex flex-col items-center justify-center lg:items-start lg:justify-start gap-y-2">
                <h1 class=" text-2xl font-bold lg:text-4xl text-medium lg:w-[35rem] w-[18rem] text-center lg:text-left lg:mt-2 tracking-wider">Find your lifestyle, unlock your passion, live healthy, grow stronger, and thrive with technology.</h1>
            </div>
        </div>
        <div class="col-span-2 p-5 lg:p-12 lg:col-span-1">
            <img src="{{ asset('img/thumbnail-home.jpg') }}" class="object-cover w-full rounded-2xl" alt="">
        </div>
    </div>

    <div class="grid grid-cols-12">
        {{-- Start Article-List  --}}
        <div class="col-span-12 lg:col-span-8">
            @livewire('article-list')

        </div>
        {{-- End Article-List --}}
    </div>
</div>
