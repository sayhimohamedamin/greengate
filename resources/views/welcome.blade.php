@extends('layouts.public')

@section('title', 'Home')

@section('content')
    <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-800 dark:text-white mb-6">Welcome to GreenGate</h1>
        <p class="text-lg text-gray-600 dark:text-gray-300 mb-8">Discover our latest updates and insights on our blog.</p>
        <a href="{{ route('public.blogs.index') }}"
           class="px-6 py-3 bg-primary-600 text-white rounded-md hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition-colors">
            Explore Blog
        </a>
    </div>
@endsection