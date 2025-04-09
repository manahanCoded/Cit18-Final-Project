<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Dental Clinic') }} | @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <a href="{{ route('home') }}" class="flex items-center py-4 px-2">
                            <span class="font-semibold text-gray-500 text-lg">DentalCare</span>
                        </a>
                    </div>
                </div>
                <div class="hidden md:flex items-center  gap-10  space-x-1">
                    <div class="flex flex-row items-center">
                    <a href="{{ route('home') }}" class="py-4 px-2 text-blue-500 border-b-4 border-blue-500 font-semibold">Home</a>
                    <a href="{{ route('about') }}" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">About</a>
                    <a href="{{ route('services') }}" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Services</a>
                    </div>
                    
                    <div class="flex flex-row items-center">
                    @auth
                    <div class="flex flex-row items-center gap-x-5">
                    <x-nav-link :href="route('tasks.index')" 
                    :active="request()->routeIs('tasks.*')">
                        {{ __('Tasks') }}
                    </x-nav-link>
                    <button @click="open = !open" class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700">
                    </div>
                    @auth
            {{ Auth::user()->name }}
        @else
            Guest
        @endauth
        <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
        </div>
    </button>

    <!-- Dropdown menu - only visible when open is true -->
    <div x-show="open" @click.away="open = false" x-transition
         class="absolute right-40 top-15 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
        <div class="py-1">
            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
            <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-responsive-nav-link>
        </form>
        </div>
    </div>
</div>


        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="md:hidden block">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('tasks.index')" :active="request()->routeIs('tasks.*')">
                {{ __('Tasks') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
            @auth
    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
@endauth

            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
                    @else
                        <a href="{{ route('login') }}" class="py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition duration-300 ml-4">
                            Login
                        </a>
                    @endauth
                </div>
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg class="w-6 h-6 text-gray-500" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div class="hidden mobile-menu">
            <ul class="">
                <li class="active"><a href="{{ route('home') }}" class="block text-sm px-2 py-4 text-white bg-blue-500 font-semibold">Home</a></li>
                <li><a href="{{ route('about') }}" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">About</a></li>
                <li><a href="{{ route('services') }}" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">Services</a></li>
                <li><a href="{{ route('dentists') }}" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">Our Dentists</a></li>
                <li><a href="{{ route('contact') }}" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">Contact</a></li>
                @auth
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('tasks.index')" :active="request()->routeIs('tasks.*')">
                        {{ __('Tasks') }}
                    </x-nav-link>

                    <button @click="open = !open" class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700">
        @auth
            {{ Auth::user()->name }}
        @else
            Guest
        @endauth
        <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
    </button>

    <!-- Dropdown menu - only visible when open is true -->
    <div x-show="open" @click.away="open = false" x-transition
         class="absolute right-40 top-15 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
        <div class="py-1">
            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
            <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-responsive-nav-link>
        </form>
        </div>
    </div>
</div>


        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="md:hidden block">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('tasks.index')" :active="request()->routeIs('tasks.*')">
                {{ __('Tasks') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
            @auth
    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
@endauth

            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
                 
                @else
                    <li><a href="{{ route('login') }}" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">Login</a></li>
                @endauth
            </ul>
        </div>
    </nav>

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white pt-12 pb-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/3 lg:w-1/4 mb-8">
                    <h3 class="text-xl font-bold mb-4">DentalCare</h3>
                    <p class="text-gray-400">Providing quality dental care for you and your family.</p>
                </div>
                <div class="w-full md:w-1/3 lg:w-1/4 mb-8">
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul>
                        <li class="mb-2"><a href="{{ route('home') }}" class="text-gray-400 hover:text-white">Home</a></li>
                        <li class="mb-2"><a href="{{ route('about') }}" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li class="mb-2"><a href="{{ route('services') }}" class="text-gray-400 hover:text-white">Services</a></li>
                        <li class="mb-2"><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/3 lg:w-1/4 mb-8">
                    <h4 class="text-lg font-semibold mb-4">Services</h4>
                    <ul>
                        <li class="mb-2"><a href="#" class="text-gray-400 hover:text-white">Teeth Cleaning</a></li>
                        <li class="mb-2"><a href="#" class="text-gray-400 hover:text-white">Dental Implants</a></li>
                        <li class="mb-2"><a href="#" class="text-gray-400 hover:text-white">Cosmetic Dentistry</a></li>
                        <li class="mb-2"><a href="#" class="text-gray-400 hover:text-white">Orthodontics</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/3 lg:w-1/4 mb-8">
                    <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
                    <p class="text-gray-400 mb-2">123 Dental Street</p>
                    <p class="text-gray-400 mb-2">City, State 12345</p>
                    <p class="text-gray-400 mb-2">Phone: (123) 456-7890</p>
                    <p class="text-gray-400">Email: info@dentalcare.com</p>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} DentalCare. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile menu script -->
    <script>
        const btn = document.querySelector(".mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
        </script>
</body>
</html>

