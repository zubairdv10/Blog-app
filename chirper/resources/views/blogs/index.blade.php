<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Blogs</h1>
            <a href="{{ route('blogs.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-700">
                Create Blog
            </a>
        </div>
        @foreach ($blogs as $blog)
            <div class="mb-4 p-4 bg-white rounded shadow">
                <h2 class="text-xl font-semibold">{{ $blog->title }}</h2>
                <p class="text-gray-700">{{ $blog->content }}</p>
                <div class="flex space-x-4 mt-4">
                    <a href="{{ route('blogs.edit', $blog) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    <form method="POST" action="{{ route('blogs.destroy', $blog) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>