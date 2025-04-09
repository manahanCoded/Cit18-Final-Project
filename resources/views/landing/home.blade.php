@extends('layouts.landing')

@section('title', 'Home')
@section('content')
<!-- Hero Section -->
<section class="bg-blue-50 py-20">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Quality Dental Care for the Whole Family</h1>
                <p class="text-lg text-gray-600 mb-8">Our experienced dentists provide comprehensive dental services in a comfortable and friendly environment.</p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="{{ route('contact') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg text-center font-medium transition duration-300">
                        Book an Appointment
                    </a>
                    <a href="{{ route('services') }}" class="border border-blue-500 text-blue-500 hover:bg-blue-50 px-6 py-3 rounded-lg text-center font-medium transition duration-300">
                        Our Services
                    </a>
                </div>
            </div>
            <div class="md:w-1/2">
                <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Dental Clinic" class="rounded-lg shadow-xl">
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Why Choose Our Clinic</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gray-50 p-6 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                <div class="text-blue-500 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Modern Equipment</h3>
                <p class="text-gray-600">We use the latest dental technology to ensure precise and comfortable treatments.</p>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                <div class="text-blue-500 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Certified Dentists</h3>
                <p class="text-gray-600">Our team consists of highly qualified and experienced dental professionals.</p>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                <div class="text-blue-500 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Affordable Prices</h3>
                <p class="text-gray-600">We offer competitive pricing and flexible payment options for all treatments.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Preview Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Services</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">We provide a wide range of dental services to meet all your oral health needs.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                <div class="h-40 bg-gray-200 rounded-lg mb-4 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1530026186672-2cd00ffc50fe?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Teeth Cleaning" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-semibold mb-2">Teeth Cleaning</h3>
                <p class="text-gray-600 mb-4">Professional cleaning to remove plaque and tartar, keeping your teeth and gums healthy.</p>
                <a href="{{ route('services') }}" class="text-blue-500 font-medium hover:text-blue-600">Learn more →</a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                <div class="h-40 bg-gray-200 rounded-lg mb-4 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Dental Implants" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-semibold mb-2">Dental Implants</h3>
                <p class="text-gray-600 mb-4">Permanent solution for missing teeth that look and function like natural teeth.</p>
                <a href="{{ route('services') }}" class="text-blue-500 font-medium hover:text-blue-600">Learn more →</a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                <div class="h-40 bg-gray-200 rounded-lg mb-4 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1564420228450-d4f0b1e6d2ac?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Cosmetic Dentistry" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-semibold mb-2">Cosmetic Dentistry</h3>
                <p class="text-gray-600 mb-4">Enhance your smile with our cosmetic dental treatments including veneers and whitening.</p>
                <a href="{{ route('services') }}" class="text-blue-500 font-medium hover:text-blue-600">Learn more →</a>
            </div>
        </div>
        <div class="text-center mt-10">
            <a href="{{ route('services') }}" class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg font-medium transition duration-300">
                View All Services
            </a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">What Our Patients Say</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                <div class="flex items-center mb-4">
                    <div class="text-yellow-400 mr-2">
                        ★★★★★
                    </div>
                </div>
                <p class="text-gray-600 mb-4">"The staff was very friendly and professional. My dental cleaning was painless and thorough. Highly recommend!"</p>
                <div class="flex items-center">
                    <div class="h-10 w-10 rounded-full bg-gray-300 mr-3 overflow-hidden">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah J." class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="font-semibold">Sarah J.</h4>
                        <p class="text-sm text-gray-500">Patient since 2018</p>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                <div class="flex items-center mb-4">
                    <div class="text-yellow-400 mr-2">
                        ★★★★★
                    </div>
                </div>
                <p class="text-gray-600 mb-4">"I was nervous about getting a root canal, but the dentist made me feel completely at ease. Excellent experience."</p>
                <div class="flex items-center">
                    <div class="h-10 w-10 rounded-full bg-gray-300 mr-3 overflow-hidden">
                        <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Michael T." class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="font-semibold">Michael T.</h4>
                        <p class="text-sm text-gray-500">Patient since 2020</p>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                <div class="flex items-center mb-4">
                    <div class="text-yellow-400 mr-2">
                        ★★★★★
                    </div>
                </div>
                <p class="text-gray-600 mb-4">"The entire team is wonderful. They always remember personal details and make each visit comfortable."</p>
                <div class="flex items-center">
                    <div class="h-10 w-10 rounded-full bg-gray-300 mr-3 overflow-hidden">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Emily R." class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="font-semibold">Emily R.</h4>
                        <p class="text-sm text-gray-500">Patient since 2015</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-blue-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Ready for a Healthier Smile?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">Schedule your appointment today and experience the difference in dental care.</p>
        <a href="{{ route('contact') }}" class="inline-block bg-white text-blue-600 hover:bg-gray-100 px-8 py-3 rounded-lg font-semibold transition duration-300">
            Contact Us
        </a>
    </div>
</section>
@endsection