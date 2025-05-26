@extends('layouts.public')

@section('title', 'Home')

@section('content')
    <!-- Full-width Hero Section starting from top -->
    <div class="relative w-full " style="height: 100vh; margin-top: -100px; background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('{{ asset('images/home-bg.png') }}') no-repeat center center; background-size: cover;">
        <div class="absolute inset-0 flex items-center justify-center mt-15">
            <div class="mx-15">
                <h1 class="text-[130px] font-bold text-white mb-6">Empowering Youth, Reviving Nature</h1>
                <p class="text-lg md:text-xl text-white mb-8">
                    MENA’s first platform providing environmental and political opportunities for youth, from mena’s youth to mena’s  youth
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact.index') }}"
                       class="px-10 py-6 bg-white text-[25px] text-secondary-600 font-bold rounded-4xl hover:bg-gray-100 transition-colors">
                        JOIN US NOW!
                    </a>
                </div>
            </div>
        </div>
    </div>

<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
      
      <!-- Left: 2x2 Stats Grid -->
      <div class="grid grid-cols-2 gap-8">
        <div class="text-center">
          <p class="text-4xl font-bold text-primary-600">245%</p>
          <p class="mt-2 text-primary-600">Reach Growth</p>
        </div>
        <div class="text-center">
          <p class="text-4xl font-bold text-primary-600">130K+</p>
          <p class="mt-2 text-lg text-primary-600">Audiences Reached</p>
        </div>
        <div class="text-center">
          <p class="text-4xl font-bold text-primary-600">50+</p>
          <p class="mt-2 text-primary-600">Brands Trust Us</p>
        </div>
        <div class="text-center">
          <p class="text-4xl font-bold text-primary-600">24+</p>
          <p class="mt-2 text-primary-600">Events Attended</p>
        </div>
      </div>

      <!-- Right: Commitments Text -->
      <div class="lg:col-span-2 flex items-center">
        <div class="lg:ml-20">
          <h3 class="text-3xl md:text-5xl font-bold text-primary-800">Commitments</h3>
          <p class="mt-6 text-primary-600 text-lg leading-relaxed max-w-2xl">
            We are committed to working with you collaboratively to understand your goals and create a strategy that will achieve them.
          </p>
          <a href="#" class="inline-block mt-6 text-secondary-600 hover:text-primary-800 font-semibold transition">
            Learn More →
          </a>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- What Can You Do Section -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 grid-rows-4 gap-8">
            <!-- Main Content (Left Column - spans 4 rows) -->
            <div class="row-span-4 p-6 rounded-lg ">
                <h3 class="text-[40px] font-bold text-primary-600 mb-4">What Can You Do?</h3>
                <p class="text-gray-600 mb-6">
                    We believe that the best way to create change is to take action firsthand and be part of a great team that'll lead you to success.
                </p>
                <img src="{{ asset('images/home-do.png') }}" alt="Team working together" class="w-full h-auto rounded-md ">
            </div>
            
            <!-- Opportunities Card (Top Right) -->
            <div class="p-6 rounded-lg flex items-start">
                <div class="text-white mr-4 mt-2 bg-secondary-800 rounded-md p-2">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Opportunities</h3>
                    <p class="text-gray-600">
                        Best opportunities to scale part in big events and be heard
                    </p>
                </div>
            </div>
            
            <!-- Fellowship Card (Middle Right) -->
            <div class="p-6 rounded-lg col-start-2 flex items-start">
                <div class="text-white bg-secondary-800 rounded-md mr-4 mt-2 p-2">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Fellowship</h3>
                    <p class="text-gray-600">
                        Join our fellowship program and be part of a great team
                    </p>
                </div>

            </div>
            
            <!-- Webinars Card (Bottom Right 1) -->
            <div class="p-6 rounded-lg col-start-2 row-start-3 flex items-start">
                <div class="text-white bg-secondary-800 rounded-md mr-4 mt-2 p-2">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Webinars</h3>
                    <p class="text-gray-600">
                        Annual webinars with leading professionals
                    </p>                    
                </div>

            </div>
            
            <!-- Community Card (Bottom Right 2) -->
            <div class="p-6 rounded-lg col-start-2 row-start-4 flex items-start">
                <div class="text-white bg-secondary-800 rounded-md mr-4 mt-2 p-2">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Community</h3>
                    <p class="text-gray-600">
                        Join our mindful community for support and growth
                    </p>
                </div>
            </div>
        </div>
        
            <section class="bg-white py-16 px-4 text-center">
                 <h2 class="text-4xl font-bold text-gray-900">Our Values</h2>
                     <p class="text-sm text-gray-500 mt-2">what we believe in !</p>

             <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
    <!-- Card 1 -->
                  <div class="flex flex-col items-center">
                        <img src="{{ asset('images/Rectangle 161 (2).png') }}" alt="Sustainability" class="w-full h-auto rounded-md " >               
                        <h3 class="mt-4 font-semibold text-lg">Sustainability</h3>
                  </div>

    <!-- Card 2 -->
                  <div class="flex flex-col items-center">
                        <img src="{{ asset('images/Rectangle 161.png') }}" alt="Sustainability" class="w-full h-auto rounded-md " >               
                   <h3 class="mt-4 font-semibold text-lg">Youth Empowerment</h3>
                </div>

    <!-- Card 3 -->
                <div class="flex flex-col items-center">
                        <img src="{{ asset('images/Rectangle 161 (1).png') }}" alt="Sustainability" class="w-full h-auto rounded-md " >               
                       <h3 class="mt-4 font-semibold text-lg">Freedom</h3>
                 </div>
              </div>

             <div class="mt-10">
               <a href="#more" class="inline-block bg-green-700 hover:bg-green-800 text-white font-semibold py-2 px-6 rounded-full transition duration-300">
      See More
                </a>
            </div>
</section>















<section class="w-full max-w-7xl mx-auto px-6 py-20 grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
    <!-- FAQ Section -->
    <div x-data="{ selected: null }" class="space-y-4">
        <template x-for="(faq, index) in [
            { question: 'How do I sign up for the project?', answer: 'Just head to the Sign Up page, fill in your info, and you’re in! We’ll send you a confirmation email right away.' },
            { question: 'What should I prepare before starting?', answer: 'Make sure you have a clear project brief, assets (if any), and goals. We’ll handle the rest together 💪.' },
            { question: 'Does my company need help with marketing advice?', answer: 'Absolutely! We offer tailored marketing consultations whether you’re just starting out or scaling up.' }
        ]" :key="index">
            <div class="border-b pb-3">
                <button @click="selected === index ? selected = null : selected = index"
                        class="flex justify-between w-full text-left font-semibold text-lg text-gray-800">
                    <span x-text="faq.question"></span>
                    <span x-show="selected !== index">+</span>
                    <span x-show="selected === index">−</span>
                </button>
                <div x-show="selected === index" x-transition class="mt-2 text-gray-600" x-text="faq.answer"></div>
            </div>
        </template>

        <a href="#" class="text-green-700 font-semibold inline-flex items-center gap-1">
            More FAQ <span class="text-xl">→</span>
        </a>
    </div>

    <!-- Newsletter Section -->
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
</section>




                
            </section>







@endsection