@extends('layouts.landing')

@section('title', 'About Us')
@section('content')
<!-- Hero Section -->
<section class="bg-blue-50 py-20">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4 text-center">About Our Dental Clinic</h1>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto text-center">Providing exceptional dental care with compassion and expertise since 2005.</p>
    </div>
</section>

<!-- About Content -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center mb-16">
            <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Our Story</h2>
                <p class="text-gray-600 mb-4">Founded in 2005 by Dr. James Wilson, our clinic began as a small practice with a big vision: to provide comprehensive, patient-centered dental care in a comfortable environment.</p>
                <p class="text-gray-600 mb-4">Over the years, we've grown into a full-service dental clinic with a team of dedicated professionals, but we've never lost sight of our original commitment to personalized care.</p>
                <p class="text-gray-600">Today, we serve thousands of patients in our community, helping them achieve and maintain optimal oral health.</p>
            </div>
            <div class="md:w-1/2">
                <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Our Clinic" class="rounded-lg shadow-xl">
            </div>
        </div>

        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0 order-2 md:order-1">
                <img src="https://images.unsplash.com/photo-1530026186672-2cd00ffc50fe?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Our Mission" class="rounded-lg shadow-xl">
            </div>
            <div class="md:w-1/2 md:pl-10 order-1 md:order-2">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Our Mission</h2>
                <p class="text-gray-600 mb-4">Our mission is to provide exceptional dental care that improves the health and well-being of our patients while creating lasting relationships built on trust and respect.</p>
                <p class="text-gray-600 mb-4">We believe in:</p>
                <ul class="list-disc pl-5 text-gray-600 space-y-2 mb-6">
                    <li>Compassionate, patient-centered care</li>
                    <li>Using the latest dental technology and techniques</li>
                    <li>Continuing education for our team</li>
                    <li>Making dental care accessible to all</li>
                    <li>Creating a welcoming, anxiety-free environment</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Team Preview Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Meet Our Team</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Our dedicated dental professionals are committed to your oral health and comfort.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <div class="h-40 w-40 mx-auto rounded-full bg-gray-200 mb-4 overflow-hidden">
                
                </div>
                <h3 class="text-xl font-semibold mb-1">Dr. James Wilson</h3>
                <p class="text-blue-500 mb-3">Founder & Lead Dentist</p>
                <p class="text-gray-600 text-sm">Specializes in cosmetic dentistry and implants with over 20 years of experience.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <div class="h-40 w-40 mx-auto rounded-full bg-gray-200 mb-4 overflow-hidden">
                   
                </div>
                <h3 class="text-xl font-semibold mb-1">Dr. Sarah Chen</h3>
                <p class="text-blue-500 mb-3">Orthodontist</p>
                <p class="text-gray-600 text-sm">Specializes in braces and Invisalign treatments for all ages.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <div class="h-40 w-40 mx-auto rounded-full bg-gray-200 mb-4 overflow-hidden">
                  
                </div>
                <h3 class="text-xl font-semibold mb-1">Dr. Michael Rodriguez</h3>
                <p class="text-blue-500 mb-3">Periodontist</p>
                <p class="text-gray-600 text-sm">Expert in gum disease treatment and dental implants.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <div class="h-40 w-40 mx-auto rounded-full bg-gray-200 mb-4 overflow-hidden">

                </div>
                <h3 class="text-xl font-semibold mb-1">Dr. Emily Park</h3>
                <p class="text-blue-500 mb-3">Pediatric Dentist</p>
                <p class="text-gray-600 text-sm">Makes dental visits fun and comfortable for children.</p>
            </div>
        </div>
        <div class="text-center mt-10">
            <a href="{{ route('dentists') }}" class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg font-medium transition duration-300">
                Meet All Our Dentists
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-blue-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Experience the Difference</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">Schedule your appointment today and discover why our patients trust us with their smiles.</p>

    </div>
</section>
@endsection