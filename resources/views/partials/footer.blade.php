<div class="grid grid-cols-5 grid-rows-2 bg-primary-600 text-white px-25 pt-15">
    <div class="col-span-1">
        <h3 class="font-bold mb-2">Pages</h3>
        <ul class="space-y-1">
            <li><a href="#" class="hover:text-secondary-700">Opportunities</a></li>
            <li><a href="#" class="hover:text-secondary-700">About us</a></li>
            <li><a href="{{ route('public.blogs.index') }}" class="hover:text-secondary-700">Blog</a></li>
            <li><a href="{{ route('contact.index') }}" class="hover:text-secondary-700">Contact us</a></li>
        </ul>
    </div>

    <div class="col-span-1">
        <h3 class="font-bold mb-2">Social Media</h3>
        <ul class="space-y-1">
            <li><a href="#" class="hover:text-secondary-700">Instagram</a></li>
            <li><a href="#" class="hover:text-secondary-700">LinkedIn</a></li>
        </ul>
    </div>

    <div class="col-span-1">
        <h3 class="font-bold mb-2">Legal</h3>
        <ul class="space-y-1">
            <li><a href="#" class="hover:text-secondary-700">Privacy and Cookies Policy</a></li>
            <li><a href="#" class="hover:text-secondary-700">Terms and Conditions</a></li>
        </ul>
    </div>

    <div class="col-start-5 flex justify-end">
        <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="Green Gate Logo" class="h-20 " style="filter: brightness(0) invert(1)"> </a>
    </div>

    <div class="col-span-5 row-start-2 flex justify-between items-center">
        <div class="text-sm">
            Green Gate For MENA Youth ©
        </div>
        <div class="text-sm text-gray-400">
            Design by Mohamed Amir Sayhi
        </div>
    </div>
</div>