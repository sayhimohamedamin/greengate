@extends('layouts.public')

@section('title', 'Blog')

@section('content')
    <header class="mb-8 border-t border-b border-gray-200 dark:border-gray-700 py-4">
        <h1 class="text-[200px] font-bold text-primary-600 text-center uppercase">The Blog</h1>
    </header>

    <!-- Recent Blog Posts Section -->
    <section class="mb-12 mt-25 mx-auto sm:px-6 lg:px-8">
        <h2 class="text-2xl font-semibold text-primary-600 mb-6 text-left">Recent Blog Posts</h2>
        @if ($recentBlogs->isEmpty())
            <p class="text-gray-600 dark:text-gray-300">No recent blog posts available.</p>
        @else
            <div class="max-w-screen">
                <div class="grid grid-cols-1 sm:grid-cols-4 sm:grid-rows-3 gap-4">
                    @foreach ($recentBlogs as $index => $blog)
                        @php
                            $tags = [
                                ['label' => 'Design', 'color' => 'bg-primary-400'],
                                ['label' => 'Presentation', 'color' => 'bg-primary-400'],
                                ['label' => 'Research', 'color' => 'bg-primary-400'],
                                ['label' => 'Development', 'color' => 'bg-primary-400'],
                                ['label' => 'Marketing', 'color' => 'bg-primary-400'],
                            ];
                            // Select 2-3 random tags for each post
                            $postTags = array_rand(array_flip(array_column($tags, 'label')), rand(2, 3));
                            if (!is_array($postTags)) {
                                $postTags = [$postTags];
                            }
                        @endphp

                        <article class="@if($index === 0) col-span-2 row-span-2 @elseif($index === 1) col-span-2 col-start-3 @elseif($index === 2) col-span-2 col-start-3 row-start-2 @elseif($index === 3) col-span-4 row-start-3 @endif rounded-lg overflow-hidden">
                            @if($index === 0)
                                <!-- First blog post - full height container -->
                                <div class="h-full flex flex-col">
                                    @if ($blog->picture)
                                        <div class="flex-grow">
                                            <img src="{{ Storage::url($blog->picture) }}" alt="{{ $blog->title }}" class="w-full h-full object-fill">
                                        </div>
                                    @else
                                        <div class="flex-grow bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
                                            <span class="text-gray-500 dark:text-gray-400">No Image</span>
                                        </div>
                                    @endif
                                    <div class="p-6">
                                        <div class="text-sm text-secondary-500">
                                            <p>{{ $blog->created_at->format('M d, Y') }}</p>
                                        </div>
                                        <h3 class="text-xl font-semibold text-primary-500 mb-2">
                                            <a href="{{ route('public.blogs.show', $blog) }}" class="hover:text-secondary-600 dark:hover:text-secondary-400">
                                                {{ $blog->title }}
                                            </a>
                                        </h3>
                                        <p class="text-primary-500 mb-4">{{ Str::limit($blog->content, 100) }}</p>
                                        <div class="flex flex-wrap gap-2">
                                            @foreach($postTags as $tag)
                                                <span class="inline-block {{ $tags[array_search($tag, array_column($tags, 'label'))]['color'] }} text-white text-xs px-2 py-1 rounded-full">
                                                    {{ $tag }}
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @elseif($index === 1 || $index === 2)
                                <!-- Second and third blog posts - image on left, content on right -->
                                <div class="h-full flex">
                                    @if ($blog->picture)
                                        <div class="w-1/2">
                                            <img src="{{ Storage::url($blog->picture) }}" alt="{{ $blog->title }}" class="w-full h-full object-cover">
                                        </div>
                                    @else
                                        <div class="w-1/2 bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
                                            <span class="text-gray-500 dark:text-gray-400">No Image</span>
                                        </div>
                                    @endif
                                    <div class="w-1/2 p-4 flex flex-col justify-between">
                                        <div>
                                            <div class="text-sm text-secondary-500">
                                                <p>{{ $blog->created_at->format('M d, Y') }}</p>
                                            </div>
                                            <h3 class="text-xl font-semibold text-primary-500 mb-2">
                                                <a href="{{ route('public.blogs.show', $blog) }}" class="hover:text-secondary-600 dark:hover:text-secondary-400">
                                                    {{ $blog->title }}
                                                </a>
                                            </h3>
                                            <p class="text-primary-500 mb-4">{{ Str::limit($blog->content, 100) }}</p>
                                        </div>
                                        <div class="flex flex-wrap gap-2">
                                            @foreach($postTags as $tag)
                                                <span class="inline-block {{ $tags[array_search($tag, array_column($tags, 'label'))]['color'] }} text-white text-xs px-2 py-1 rounded-full">
                                                    {{ $tag }}
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @elseif($index === 3)
                                <div class="flex h-full">
                                    @if ($blog->picture)
                                        <div class="w-1/3">
                                            <img src="{{ Storage::url($blog->picture) }}" alt="{{ $blog->title }}" class="w-full h-auto object-cover">
                                        </div>
                                    @else
                                        <div class="w-1/3 bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
                                            <span class="text-gray-500 dark:text-gray-400">No Image</span>
                                        </div>
                                    @endif
                                    <div class="w-2/3 p-6 flex flex-col justify-between">
                                        <div>
                                            <div class="text-sm text-secondary-500">
                                                <p>{{ $blog->created_at->format('M d, Y') }}</p>
                                            </div>
                                            <h3 class="text-xl font-semibold text-primary-500 mb-2">
                                                <a href="{{ route('public.blogs.show', $blog) }}" class="hover:text-secondary-600 dark:hover:text-secondary-400">
                                                    {{ $blog->title }}
                                                </a>
                                            </h3>
                                            <p class="text-primary-500 mb-4">{{ Str::limit($blog->content, 100) }}</p>
                                        </div>
                                        <div class="flex flex-wrap gap-2">
                                            @foreach($postTags as $tag)
                                                <span class="inline-block {{ $tags[array_search($tag, array_column($tags, 'label'))]['color'] }} text-white text-xs px-2 py-1 rounded-full">
                                                    {{ $tag }}
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </article>
                    @endforeach
                </div>
            </div>
        @endif
    </section>

    <!-- All Blog Posts Section -->
    <section class="mx-auto sm:px-6 lg:px-8 mb-10">
        <h2 class="text-2xl font-semibold text-primary-600 mb-6 text-left">All Blog Posts</h2>
        @if ($blogs->isEmpty())
            <p class="text-gray-600 dark:text-gray-300">No blog posts available.</p>
        @else
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($blogs as $blog)
                    @php
                        // Same tag logic for all blog posts
                        $postTags = array_rand(array_flip(array_column($tags, 'label')), rand(2, 3));
                        if (!is_array($postTags)) {
                            $postTags = [$postTags];
                        }
                    @endphp
                    
                    <article class="rounded-lg overflow-hidden">
                        @if ($blog->picture)
                            <img src="{{ Storage::url($blog->picture) }}" alt="{{ $blog->title }}" class="w-full h-auto object-cover">
                        @else
                            <div class="w-full h-48 bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
                                <span class="text-gray-500 dark:text-gray-400">No Image</span>
                            </div>
                        @endif
                        <div class="p-6">
                            <div class="text-sm text-secondary-500 mt-2">
                                <p>{{ $blog->created_at->format('M d, Y') }}</p>
                            </div>
                            <h3 class="text-xl font-semibold text-primary-500 mb-2">
                                <a href="{{ route('public.blogs.show', $blog) }}" class="hover:text-secondary-600 dark:hover:text-secondary-400">
                                    {{ $blog->title }}
                                </a>
                            </h3>
                            <p class="text-gray-600 mb-4">{{ Str::limit($blog->content, 100) }}</p>
                            <div class="flex flex-wrap gap-2">
                                @foreach($postTags as $tag)
                                    <span class="inline-block {{ $tags[array_search($tag, array_column($tags, 'label'))]['color'] }} text-white text-xs px-2 py-1 rounded-full">
                                        {{ $tag }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
            <div class="mt-8 flex items-center justify-between">
                {{-- Previous Page Link --}}
                @if ($blogs->onFirstPage())
                    <span class="text-gray-500 dark:text-gray-400 ">&larr; Previous</span>
                @else
                    <a href="{{ $blogs->previousPageUrl() }}" class="text-primary-600 hover:text-primary-800 dark:hover:text-secondary-400">&larr; Previous</a>
                @endif

                {{-- Page Numbers --}}
                <div class="flex space-x-2">
                    @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                        @if ($page == $blogs->currentPage())
                            <span class="px-3 py-1 bg-primary-100 text-secondary-600">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}" class="px-3 py-1 text-primary-600 hover:text-primary-800 dark:hover:text-secondary-400">{{ $page }}</a>
                        @endif
                    @endforeach
                    </div>

                    {{-- Next Page Link --}}
                    @if ($blogs->hasMorePages())
                        <a href="{{ $blogs->nextPageUrl() }}" class="text-primary-600 hover:text-primary-800 dark:hover:text-secondary-400">Next &rarr;</a>
                    @else
                        <span class="text-gray-500 dark:text-gray-400">Next &rarr;</span>
                    @endif
                </div>
        @endif
    </section>
@endsection