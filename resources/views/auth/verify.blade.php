@extends('layouts.landing')

@section('title', 'Verify Email')
@section('content')
<div class="min-h-screen bg-blue-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <div class="flex justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
        </div>
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
            Verify Your Email Address
        </h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10 text-center">
            @if (session('resent'))
                <div class="mb-4 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif

            <p class="text-gray-600 mb-6">
                {{ __('Before proceeding, please check your email for a verification link.') }}
            </p>
            
            <p class="text-gray-600 mb-6">
                {{ __('If you did not receive the email') }}
            </p>

            <form class="inline-flex" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="text-blue-600 hover:text-blue-500 font-medium">
                    {{ __('click here to request another') }}
                </button>
            </form>

            <div class="mt-8 pt-8 border-t border-gray-200">
                <p class="text-sm text-gray-500">
                    Having trouble? <a href="{{ route('contact') }}" class="font-medium text-blue-600 hover:text-blue-500">Contact our support team</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection