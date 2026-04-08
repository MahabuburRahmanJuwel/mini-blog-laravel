<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Posts
        </h2>
    </x-slot>

    <div class="p-6">
        <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white px-4 py-2">Add Post</a>

        <div class="mt-4">
            @foreach($posts as $post)
                <div class="border p-4 mb-3">
                    <h3 class="text-lg font-bold">{{ $post->title }}</h3>
                    <p>{{ $post->content }}</p>
                    <p class="text-sm text-gray-600">
                        Category: {{ $post->category->name }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
