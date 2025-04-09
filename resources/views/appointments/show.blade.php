@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
        <div class="px-6 py-4 bg-gray-50 border-b">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-semibold text-gray-800">Appointment Details</h1>
                <span class="px-3 py-1 text-xs font-semibold rounded-full 
                    {{ $appointment->status === 'scheduled' ? 'bg-blue-100 text-blue-800' : '' }}
                    {{ $appointment->status === 'completed' ? 'bg-green-100 text-green-800' : '' }}
                    {{ $appointment->status === 'cancelled' ? 'bg-red-100 text-red-800' : '' }}">
                    {{ ucfirst($appointment->status) }}
                </span>
            </div>
        </div>
        
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h2 class="text-sm font-medium text-gray-500">Patient Name</h2>
                    <p class="mt-1 text-sm text-gray-900">{{ $appointment->patient_name }}</p>
                </div>
                
                <div>
                    <h2 class="text-sm font-medium text-gray-500">Dentist Name</h2>
                    <p class="mt-1 text-sm text-gray-900">{{ $appointment->dentist_name }}</p>
                </div>
                
                <div>
                    <h2 class="text-sm font-medium text-gray-500">Appointment Date</h2>
                    <p class="mt-1 text-sm text-gray-900">{{ $appointment->appointment_date->format('M d, Y') }}</p>
                </div>
                
                <div>
                    <h2 class="text-sm font-medium text-gray-500">Appointment Time</h2>
                    <p class="mt-1 text-sm text-gray-900">{{ $appointment->appointment_time }}</p>
                </div>
                
                <div>
                    <h2 class="text-sm font-medium text-gray-500">Treatment Type</h2>
                    <p class="mt-1 text-sm text-gray-900">{{ $appointment->treatment_type }}</p>
                </div>
                
                <div class="md:col-span-2">
                    <h2 class="text-sm font-medium text-gray-500">Notes</h2>
                    <p class="mt-1 text-sm text-gray-900">{{ $appointment->notes ?? 'None' }}</p>
                </div>
            </div>
            
            <div class="flex justify-end mt-6 space-x-2">
                <a href="{{ route('appointments.edit', $appointment) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md transition duration-300">
                    Edit
                </a>
                <form action="{{ route('appointments.destroy', $appointment) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this appointment?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md transition duration-300">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection