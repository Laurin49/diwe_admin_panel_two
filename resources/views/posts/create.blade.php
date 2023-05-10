<x-app-layout>
    <div class="max-w-6xl mx-auto mt-12">
        {{-- @can('create', App\Models\Post::class) --}}
            <div class="flex p-2 m-2">
                <a href="{{ route('posts.index') }}" class="px-4 py-2 bg-indigo-400 rounded hover:bg-indigo-600">
                    Posts Index</a>
            </div>
        {{-- @endcan --}}
        <div class="max-w-md p-4 mx-auto">
            <form class="space-y-5" method="POST" action="{{ route('posts.store') }}">
                @csrf
                <div>
                    <label for="title" class="text-xl">Title</label>
                    <input id="title" type="text" name="title"
                        class="block w-full px-3 py-3 mt-2 text-gray-800 border-2 border-gray-100 rounded-md appearance-none focus:text-gray-500 focus:outline-none focus:border-gray-200" />
                    @error('title')
                        <span class="text-sm text-red-400">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="body" class="text-xl">Body</label>
                    <input id="body" type="text" name="body"
                        class="block w-full px-3 py-3 mt-2 text-gray-800 border-2 border-gray-100 rounded-md appearance-none focus:text-gray-500 focus:outline-none focus:border-gray-200" />
                    @error('body')
                        <span class="text-sm text-red-400">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit"
                    class="w-full py-3 mt-10 font-medium text-white uppercase bg-indigo-400 rounded-md hover:bg-indigo-600 focus:outline-none hover:shadow-none">
                    Create
                </button>
            </form>
        </div>

    </div>
</x-app-layout>