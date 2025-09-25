<div>
    <div class="container p-10 mx-auto">
        <div class="p-12 bg-gray-300 shadow-sm card">
            <div class="flex justify-end pb-2">
                <x-button-back route="{{ route('article') }}"></x-button-back>
            </div>
            <form class="space-y-4" wire:submit.prevent="handleEdit">
                <div class="flex flex-col gap-y-1">
                    <label for="title" class="font-bold text-black label">Title</label>
                    <input type="text" class="w-full input" wire:model="title" value="{{ $article->title }}">
                    @error('title')
                        <small class="text-red-500 error">{{ $message }}</small>
                     @enderror
                </div>
                <div class="flex-col gap-y-1">
                    <label for="" class="font-bold text-black label">Category</label>
                    <select class="w-full input" wire:model="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <small class="text-red-500 error">{{ $message }}</small>
                     @enderror
                </div>
                <div class="flex-col gap-y-1">
                    <label for="" class="font-bold text-black label">Status</label>
                    <select class="w-full input" wire:model="status">
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                    @error('status')
                        <small class="text-red-500 error">{{ $message }}</small>
                     @enderror
                </div>
                <div class="flex flex-col gap-y-1">
                    <label for="" class="font-bold text-black label">Article Image</label>
                    <input type="file" class="w-full p-1 input" wire:model="image">
                    @error('image')
                        <small class="text-red-500 error">{{ $message }}</small>
                     @enderror
                </div>
                <div class="flex flex-col gap-y-1">
                    <label for="content" class="font-bold text-black label">Content</label>
                    <textarea cols="30" rows="10" class="w-full textarea" wire:model="content"></textarea>
                    @error('content')
                        <small class="text-red-500 error">{{ $message }}</small>
                     @enderror
                </div>
                <div class="flex">
                    <button class="font-bold btn btn-outline btn-primary rounded-xl btn-block">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

