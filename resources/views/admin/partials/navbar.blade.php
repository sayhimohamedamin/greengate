<header class="w-full bg-white dark:bg-gray-800 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-gray-800 dark:text-white">GreenGate</h1>
        <button id="mobile-menu-toggle" class="md:hidden p-2 focus:outline-none">
            <svg class="w-6 h-6 text-gray-700 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <nav id="mobile-menu" class="hidden md:flex md:items-center gap-4 absolute md:static top-16 left-0 w-full md:w-auto bg-white dark:bg-gray-800 md:bg-transparent shadow-md md:shadow-none p-4 md:p-0">
            @auth('admin')
                <a href="{{ route('admin.dashboard') }}"
                   class="block md:inline-block px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-md {{ Route::is('admin.dashboard') ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
                    Dashboard
                </a>
                <a href="{{ route('blogs.index') }}"
                   class="block md:inline-block px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-md {{ Route::is('admin.blogs.*') ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
                    Blogs
                </a>
                <a href="{{ route('admin.profile') }}"
                   class="block md:inline-block px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-md {{ Route::is('admin.profile') ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
                    Profile
                </a>
                <form method="POST" action="{{ route('logout') }}" class="block md:inline-block">
                    @csrf
                    <button type="submit"
                            class="px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-md w-full text-left md:w-auto">
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}"
                   class="block md:inline-block px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-primary-600 dark:hover:text-primary-400">
                    Log in
                </a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="block md:inline-block px-4 py-2 text-sm font-medium text-white bg-primary-600 dark:bg-primary-500 rounded-md hover:bg-primary-700 dark:hover:bg-primary-600">
                        Sign Up
                    </a>
                @endif
            @endauth
        </nav>
    </div>
</header>