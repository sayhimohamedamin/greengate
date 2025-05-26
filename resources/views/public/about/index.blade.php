@extends('layouts.public')

@section('content')
<section class="py-16 px-6 md:px-16 bg-white text-gray-800">
    <h1 class="text-5xl font-extrabold mb-12 text-center">Contact</h1>

    <div class="grid md:grid-cols-2 gap-12">
        <!-- Left Side: Location + Open Hours -->
        <div class="space-y-8">
            <div>
                <h2 class="text-2xl font-semibold mb-2">Location</h2>
                <p>Immobilière Zitouna, 2ème étage<br> Avenue 20 Mars, Sousse</p>
            </div>
            <div>
                <h2 class="text-2xl font-semibold mb-2">Open hours</h2>
                <p>Weekdays: 10:00am to 4:00pm<br> Weekends: Closed</p>
            </div>
        </div>

        <!-- Right Side: Contact Form -->
        <div>
            <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" name="name" placeholder="Name" class="input-field" required>
                    <input type="email" name="email" placeholder="Email" class="input-field" required>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" name="phone" placeholder="Phone number" class="input-field">
                    <input type="text" name="category" placeholder="Category (optional)" class="input-field">
                </div>
                <textarea name="message" rows="5" placeholder="Message" class="input-field w-full" required></textarea>
                <div class="flex items-center">
                    <input type="checkbox" id="consent" name="consent" class="mr-2">
                    <label for="consent" class="text-sm">I consent to Green Gate processing my data for contact purposes.</label>
                </div>
                <button type="submit" class="px-6 py-2 bg-green-700 text-white rounded hover:bg-green-800 transition">Send</button>
            </form>
        </div>
    </div>

    <!-- Bottom Images -->
    <div class="grid md:grid-cols-2 gap-6 mt-16 ml-75">
        <img src="{{ asset('images/location.png') }}" alt="Map" class="w-full h-72 object-cover rounded  ">
        <img src="{{ asset('images/local.png') }}" alt="Building" class="w-auto h-72 object-cover rounded ">
    </div>
</section>
@endsection
