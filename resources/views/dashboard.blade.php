
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="p-6">
        <a href="{{ route('posts.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">
            Go to Posts
        </a>

        <a href="{{ route('posts.create') }}" class="bg-green-500 text-white px-4 py-2 rounded ml-4">
            Add Post
        </a>
    </div>
</x-app-layout>
