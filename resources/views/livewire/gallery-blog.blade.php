<div class="gap-5 p-4 columns-1 sm:columns-2 lg:columns-3 xl:columns-4">
    @foreach ($images as $image)
            <div class="relative mb-4 overflow-hidden rounded-lg break-inside-avoid group" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <img src="{{ asset('img/' . $image['file']) }}" alt="{{ $image['title'] }}"
                    class="object-cover w-full h-auto transition-transform duration-500 group-hover:scale-105">
                <div
                    class="absolute inset-0 flex items-end p-4 transition-opacity duration-300 opacity-0 bg-black/50 group-hover:opacity-100">
                    <div>
                        <h3 class="font-semibold text-white">{{ $image['title'] }}</h3>
                        <p class="text-sm text-gray-300">{{ $image['category'] }}</p>
                    </div>
                </div>
            </div>
    @endforeach
</div>
