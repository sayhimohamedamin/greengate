@extends('admin.layouts.app')

@section('title', Route::is('admin.profile') ? 'Admin Profile' : 'Admin Dashboard')

@section('content')
    <header class="mb-6">
        <h1 class="text-2xl font-bold text-gray-800">
            @if(Route::is('admin.profile'))
                Your Profile
            @else
                Welcome, {{ Auth::guard('admin')->user()->name }}!
            @endif
        </h1>
    </header>

    @if(Route::is('admin.profile'))
        <!-- Profile Section -->
        <div class=" p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4 text-gray-800">Profile Information</h2>
            <form method="POST" action="{{ route('admin.profile.update') }}">
                @csrf
                @method('PATCH')
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name', Auth::guard('admin')->user()->name) }}"
                               class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-primary-500 focus:border-primary-500"
                               required>
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email', Auth::guard('admin')->user()->email) }}"
                               class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-primary-500 focus:border-primary-500"
                               required>
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <button type="submit"
                        class="px-4 py-2 text-white rounded-md hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition-colors">
                    Update Profile
                </button>
            </form>

            <div class="mt-8">
                <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Update Password</h2>
                <form method="POST" action="{{ route('admin.profile.password') }}">
                    @csrf
                    @method('PATCH')
                    <div class="grid gap-6 mb-6">
                        <div>
                            <label for="current_password" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Current Password</label>
                            <input type="password" name="current_password" id="current_password"
                                   class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-primary-500 focus:border-primary-500"
                                   required>
                            @error('current_password')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">New Password</label>
                            <input type="password" name="password" id="password"
                                   class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-primary-500 focus:border-primary-500"
                                   required>
                            @error('password')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Confirm New Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                   class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-primary-500 focus:border-primary-500"
                                   required>
                        </div>
                    </div>
                    <button type="submit"
                            class="px-4 py-2 bg-primary-600 text-white rounded-md hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition-colors">
                        Update Password
                    </button>
                </form>
            </div>
        </div>
    @else
        <!-- Dashboard Content -->
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Admin Dashboard</h2>
            <p class="text-gray-600 dark:text-gray-300">Welcome to the GreenGate admin dashboard. Manage your settings and profile from the navigation bar.</p>
        </div>
    @endif
@endsection