<header class="relative w-full pt-5 z-100 {{ Route::is('home') ? 'bg-transparent' : '' }}">
    <div class="max-w-12xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
        <a href="{{ route('home') }}" class="flex items-center">
            <img src="{{ asset('images/logo.png') }}" alt="GreenGate Logo" class="h-10 w-auto"
                @if (Route::is('home')) style="filter: brightness(0) invert(1)" @endif>
        </a>
        <button id="mobile-menu-toggle" class="md:hidden p-2 focus:outline-none">
            <svg class="w-6 h-6 {{ Route::is('home') ? 'text-white' : 'text-gray-700' }}" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <nav id="mobile-menu"
            class="hidden md:flex md:items-center gap-4 absolute md:static top-16 left-0 w-full md:w-auto {{ Route::is('home') ? 'bg-black/75 md:bg-transparent' : '' }} md:shadow-none p-4 md:p-0 transition-colors duration-300">
            <a href="{{ route('home') }}"
                class="block md:inline-block px-4 py-2 text-sm font-medium rounded-md
                      {{ Route::is('home') ? 'text-white hover:bg-white/20' : 'text-primary-700 ' }}
                      {{ Route::is('home') && !Route::is('home') ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
                Home
            </a>

            <a href="{{ route('about.index') }}"
                class="block md:inline-block px-4 py-2 text-sm font-medium rounded-md
          {{ Route::is('about.index') ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
                About Us
            </a>

            <a href="#"
                class="block md:inline-block px-4 py-2 text-sm font-medium rounded-md
                      {{ Route::is('home') ? 'text-white hover:bg-white/20' : 'text-gray-700' }}
                      {{ Route::is('opportunities.index') ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
                Opportunities
            </a>
            <a href="{{ route('public.blogs.index') }}"
                class="block md:inline-block px-4 py-2 text-sm font-medium rounded-md
                      {{ Route::is('home') ? 'text-white hover:bg-white/20' : 'text-gray-700' }}
                      {{ Route::is('public.blogs.*') ? 'text-secondary-500' : '' }}">
                Blogs
            </a>
            <a href="{{ route('contact.index') }}"
                class="block md:inline-block px-4 py-2 text-sm font-medium rounded-full transition-colors duration-200
                      {{ Route::is('home') ? 'text-white bg-primary-200/100 hover:bg-primary-700' : 'text-white bg-primary-600 hover:bg-primary-700' }}
                      {{ Route::is('contact.*') ? 'bg-primary-700' : '' }}">
                Contact
            </a>
        </nav>
    </div>
</header>
