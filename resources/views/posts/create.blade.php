<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Create Post
        </h2>
    </x-slot>

    <div class="p-6">

        @if ($errors->any())
            <div class="text-red-500">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            <input type="text" name="title" placeholder="Title" class="border p-2 w-full mb-3">

            <textarea name="content" placeholder="Content" class="border p-2 w-full mb-3"></textarea>

            <select name="category_id" class="border p-2 w-full mb-3">
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <button class="bg-green-500 text-white px-4 py-2">Save</button>
        </form>

    </div>
</x-app-layout>
