<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <h1 class="text-2xl font-bold mb-4">{{ $blog->title }}</h1>
        <div class="bg-white p-4 rounded shadow">
            <p>{{ $blog->content }}</p>
        </div>
        <a href="{{ route('blogs.index') }}" class="mt-4 text-indigo-600 hover:text-indigo-900">Back to Blogs</a>
    </div>
</x-app-layout>