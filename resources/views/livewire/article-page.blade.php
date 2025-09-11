<div>
    <div class="container mx-auto border rounded-lg shadow-sm-5 max-w-7xl sm:px-8 lg:px-8 bg-slate-900 card-gray-600">
        <div class="flex justify-start p-2 my-4">
            <a href="{{ route('article.create') }}" wire:navigate class="font-bold btn btn-outline btn-primary rounded-xl">Create</a>
        </div>
        <table class="table">
            <thead>
                <tr class="text-center text-white bg-slate-800">
                    <th>ID</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Content</th>
                    <th>Status</th>
                    <th>Publish Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($article as $index => $item)
                    <tr class="text-center">
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->category->category_name }}</td>
                        <td>{{ $item->content }}</td>
                        <td>
                            <p class="{{ $item->status == 'published' ? 'bg-green-500 text-center capitalize font-bold rounded-lg py-1 px-2 text-grey-500' : 'bg-red-500 text-grey-500 text-center capitalize font-bold rounded-lg py-1 px-2' }}">{{ $item->status }}</p>
                        </td>
                        <td>
                            {{ $item->status == 'published' ? $item->publish_date : 'Not Published' }}
                        </td>
                        <td>
                            <div class="dropdown">
                                <div tabindex="0" role="button" class="m-1 rounded-xl btn bg-slate-700">Action</div>
                                <ul tabindex="0" class="p-2 shadow-sm dropdown-content menu bg-base-100 rounded-box z-1 w-52">
                                    <li class="space-y-2">
                                        <a href="/article/{{ $item->slug }}/detail" wire:navigate class="rounded-2xl btn btn-outline btn-info">Detail</a>
                                        <a href="/article/{{ $item->slug }}/edit" wire:navigate class="rounded-2xl btn btn-outline btn-primary">Edit</a>
                                        @livewire('artikel-delete', ['id' => $item->id])
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
