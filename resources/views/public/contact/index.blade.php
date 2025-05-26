@extends('layouts.public')

@section('title', 'Contact')

@section('content')
    <header class="mb-6">
        <h1 class="text-[100px] font-bold text-primary-600 text-center uppercase">Contact</h1>
    </header>
    <div class="flex ml-200">
        <div class=" text-primary-600 p-6 ml-60  ">
            <h2 class="text-6xl font-bold mb-4">Location</h2>
            <p class="text 2xl mb-15 mt-15" >Immeuble Zitouna, 4éme étage 
                            teboulba 5080 Monastir</p>
            <h2 class="text-6xl font-bold mb-4">Open hours</h2>
            <p class="text 2xl mb-15 mt-15 ">Weekdays - 9:00am to 6:00pm <br>
                            Weekends - Closed</p>
        </div>
          <div class="p-6  mb-15  ml-15 w-auto" >
        <form method="POST" action="{{ route('contact.store') }}">
            @csrf
            <div class="grid gap-6 mb-6 ">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-700 ­text-gray-300">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                           class="w-full p-2 border border-gray-300 ­border-gray-600 rounded-md bg-gray-50 ­bg-gray-700 text-gray-900 ­text-white focus:ring-primary-500 focus:border-primary-500"
                           required>
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-700 ­text-gray-300">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                           class="w-full p-2 border border-gray-300 ­border-gray-600 rounded-md bg-gray-50 ­bg-gray-700 text-gray-900 ­text-white focus:ring-primary-500 focus:border-primary-500"
                           required>
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-700 ­text-gray-300">Message</label>
                    <textarea name="message" id="message" rows="6"
                              class="w-full p-2 border border-gray-300 ­border-gray-600 rounded-md bg-gray-50 ­bg-gray-700 text-gray-900 ­text-white focus:ring-primary-500 focus:border-primary-500"
                              required>{{ old('message') }}</textarea>
                    @error('message')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <button type="submit"
                    class="px-6 py-3 bg-primary-600 text-white rounded-full hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition-colors">
                Send 
            </button>
        </form>
    </div>
    </div>
    <div class="flex pl-70 mb-40">
         <img src="{{asset('images/location.png')}}"  class="w-auto h-auto object-cover mr-10" >
        <img src="{{asset('images/local.png')}}"  class="w-auto h-auto object-cover">

    </div>
@endsection