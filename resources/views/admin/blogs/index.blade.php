@extends('admin.layouts.app')

@section('title', 'Manage Blogs')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Manage Blogs</h1>
        <a href="{{ route('blogs.create') }}"
           class="px-4 py-2 bg-primary-600 text-black rounded-md hover:bg-primary-700">
            Create New Blog
        </a>
    </div>

    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
        @if ($blogs->isEmpty())
            <p class="text-gray-600 dark:text-gray-300">No blogs found.</p>
        @else
            <table class="w-full table-auto">
                <thead>
                    <tr class="text-left text-gray-600 dark:text-gray-300">
                        <th class="p-3">Title</th>
                        <th class="p-3">Picture</th>
                        <th class="p-3">Created By</th>
                        <th class="p-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        <tr class="border-t border-gray-200 dark:border-gray-700">
                            <td class="p-3">{{ $blog->title }}</td>
                            <td class="p-3">
                                @if ($blog->picture)
                                    <img src="{{ Storage::url($blog->picture) }}" alt="{{ $blog->title }}" class="h-16 w-16 object-cover rounded">
                                @else
                                    <span class="text-gray-600 dark:text-gray-400">No picture</span>
                                @endif
                            </td>
                            <td class="p-3">{{ $blog->admin->name }}</td>
                            <td class="p-3 flex gap-2">
                                <a href="{{ route('blogs.edit', $blog) }}"
                                   class="px-3 py-1 bg-primary-600 text-white rounded-md hover:bg-primary-700">
                                    Edit
                                </a>
                                <form action="{{ route('blogs.destroy', $blog) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this blog?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="px-3 py-1 bg-red-600 text-white rounded-md hover:bg-red-700">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $blogs->links() }}
            </div>
        @endif
    </div>
@endsection