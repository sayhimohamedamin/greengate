@extends('admin.layouts.app')

@section('title', 'Edit Blog')

@section('content')
    <h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">Edit Blog</h1>

    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
        <form method="POST" action="{{ route('blogs.update', $blog) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="grid gap-6 mb-6">
                <div>
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $blog->title) }}"
                           class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-primary-500 focus:border-primary-500"
                           required>
                    @error('title')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="content" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Content</label>
                    <textarea name="content" id="content" rows="6"
                              class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-primary-500 focus:border-primary-500"
                              required>{{ old('content', $blog->content) }}</textarea>
                    @error('content')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="picture" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Picture (Optional)</label>
                    @if ($blog->picture)
                        <img src="{{ Storage::url($blog->picture) }}" alt="{{ $blog->title }}" class="h-32 w-32 object-cover rounded mb-2">
                    @endif
                    <input type="file" name="picture" id="picture" accept="image/*"
                           class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white">
                    @error('picture')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <button type="submit"
                    class="px-4 py-2 bg-primary-600 text-white rounded-md hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition-colors">
                Update Blog
            </button>
        </form>
    </div>
@endsection