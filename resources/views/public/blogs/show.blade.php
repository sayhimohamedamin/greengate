@extends('layouts.public')

@section('content')
    <section class="bg-white px-4 py-10">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-8">

            <!-- LEFT: MAIN ARTICLE -->
            <article class="flex-1">
                @if ($blog->picture)
                    <img src="{{ Storage::url($blog->picture) }}" alt="{{ $blog->title }}"
                        class="w-full h-[400px] object-cover rounded-lg shadow-md mb-6">
                @endif

                <header class="mb-4">
                    <h1 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-2">{{ $blog->title }}</h1>
                    <p class="text-gray-500 text-sm">{{ $blog->created_at->format('M d, Y') }}</p>
                </header>

                <div class="prose dark:prose-invert max-w-none text-black dark:text-black mb-10">
                    {!! nl2br(e($blog->content)) !!}
                </div>

                <!-- Newsletter Form -->
                <div class="bg-gray-50 rounded-xl p-8 shadow-md">
        <h2 class="text-2xl font-bold text-gray-900 mb-2">How We Can Help You?</h2>
        <p class="text-gray-600 mb-6">Follow our newsletter. We’ll regularly update you on our latest projects and availability.</p>
        <form method="POST" action="#" class="flex flex-col sm:flex-row gap-3">
            @csrf
            <input type="email" name="email" placeholder="Enter Your Email"
                   class="flex-1 px-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500"
                   required>
            <button type="submit"
                    class="bg-green-700 text-white px-6 py-2 rounded-full hover:bg-green-800 transition">
                Let’s Talk
            </button>
        </form>
    </div>


                <!-- Author -->
                <div class="flex items-center gap-4 p-5 bg-gray-100 rounded-md shadow-sm">
                    <img src="{{ asset('images/Rectangle 161.png') }}" alt="{{ asset('images/Rectangle 161.png') }}"
                        class="w-16 h-16 object-cover rounded-full border-2 border-primary-500">
                    <div>
                        <h4 class="font-bold text-lg text-gray-800">si lamin</h4>
                        <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                            laborum.</p>
                    </div>
                </div>

                <a href="{{ route('public.blogs.index') }}"
                    class="mt-10 inline-block px-6 py-2 bg-primary-600 text-white font-medium rounded-md hover:bg-primary-700 transition">
                    ← Back to Blog
                </a>
            </article>

            <!-- RIGHT: ADS SIDEBAR -->
            <aside class="w-full lg:w-1/4 space-y-6">
                <div class="bg-gray-200 h-40 rounded-md flex items-center justify-center text-gray-600 text-sm">Ad Space
                </div>
                <div class="bg-gray-300 h-64 rounded-md flex items-center justify-center text-gray-600 text-sm">Ad Space
                </div>
                <div class="bg-gray-200 h-32 rounded-md flex items-center justify-center text-gray-600 text-sm">Ad Space
                </div>
                <div class="bg-gray-300 h-48 rounded-md flex items-center justify-center text-gray-600 text-sm">Ad Space
                </div>
            </aside>
        </div>
    </section>
@endsection
