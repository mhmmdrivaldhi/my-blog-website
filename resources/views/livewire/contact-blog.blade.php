<div class="px-6 mx-auto">
    <div class="grid grid-cols-1 gap-10 md:grid-cols-2">

        <!-- FORM -->
        <div class="p-8 bg-white shadow rounded-2xl">
            <h2 class="mb-6 text-2xl font-bold text-center text-gray-800">CONTACT ME</h2>

            @if (session()->has('success'))
                <div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 4000)" class="p-4 mb-4 text-green-700 bg-green-100 border border-green-300 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <form wire:submit.prevent="sendMessage" class="space-y-4">
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <input wire:model="name" type="text" placeholder="Your Name"
                    class="p-3 text-gray-900 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none">
                    @error('name')
                        <small class="text-red-500 error">{{ $message }}</small>
                    @enderror
                    <input wire:model="email" type="email" placeholder="Your Email" class="p-3 text-gray-900 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none">
                    @error('email')
                        <small class="text-red-500 error">{{ $message }}</small>
                    @enderror
                </div>

                <input wire:model="subject" type="text" placeholder="Subject"
                class="w-full p-3 text-gray-900 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none">
                @error('subject')
                    <small class="text-red-500 error">{{ $message }}</small>
                @enderror
                <textarea wire:model="message" placeholder="Message" rows="4"
                class="w-full p-3 text-gray-900 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none"></textarea>
                @error('message')
                    <small class="text-red-500 error">{{ $message }}</small>
                @enderror
                <button class="w-full py-3 font-semibold text-white transition bg-green-500 rounded-lg hover:bg-green-700">
                    Send Message
                </button>
            </form>
        </div>

        <!-- MAP -->
        <div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d180061.23304595865!2d106.68011000376715!3d-6.632402823318373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c3e312798437%3A0x301576d14feb990!2sKabupaten%20Bogor%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1759863037868!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full rounded-xl h-[440px]">
            </iframe>
        </div>

    </div>
</div>
