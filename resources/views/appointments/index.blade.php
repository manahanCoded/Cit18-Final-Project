@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Dental Appointments</h1>
        <a href="{{ route('appointments.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md transition duration-300">
            Create Appointment
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Patient</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date & Time</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Dentist</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Treatment</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($appointments as $appointment)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $appointment->patient_name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $appointment->appointment_date->format('M d, Y') }}<br>
                            {{ $appointment->appointment_time }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $appointment->dentist_name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $appointment->treatment_type }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                {{ $appointment->status === 'scheduled' ? 'bg-blue-100 text-blue-800' : '' }}
                                {{ $appointment->status === 'completed' ? 'bg-green-100 text-green-800' : '' }}
                                {{ $appointment->status === 'cancelled' ? 'bg-red-100 text-red-800' : '' }}">
                                {{ ucfirst($appointment->status) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <a href="{{ route('appointments.show', $appointment) }}" class="text-blue-500 hover:text-blue-600 mr-2">View</a>
                            <a href="{{ route('appointments.edit', $appointment) }}" class="text-yellow-500 hover:text-yellow-600 mr-2">Edit</a>
                            <form action="{{ route('appointments.destroy', $appointment) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-600">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-4 text-center text-gray-500">No appointments found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection