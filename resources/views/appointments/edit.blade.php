@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Appointment</h1>

    <form action="{{ route('appointments.update', $appointment) }}" method="POST" class="max-w-3xl bg-white p-6 rounded-lg shadow-md">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="patient_name" class="block text-gray-700 font-medium mb-2">Patient Name</label>
                <input type="text" name="patient_name" id="patient_name" value="{{ old('patient_name', $appointment->patient_name) }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('patient_name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="dentist_name" class="block text-gray-700 font-medium mb-2">Dentist Name</label>
                <input type="text" name="dentist_name" id="dentist_name" value="{{ old('dentist_name', $appointment->dentist_name) }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('dentist_name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="appointment_date" class="block text-gray-700 font-medium mb-2">Appointment Date</label>
                <input type="date" name="appointment_date" id="appointment_date" value="{{ old('appointment_date', $appointment->appointment_date->format('Y-m-d')) }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('appointment_date')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="appointment_time" class="block text-gray-700 font-medium mb-2">Appointment Time</label>
                <input type="time" name="appointment_time" id="appointment_time" value="{{ old('appointment_time', $appointment->appointment_time) }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('appointment_time')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="treatment_type" class="block text-gray-700 font-medium mb-2">Treatment Type</label>
                <select name="treatment_type" id="treatment_type" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="Cleaning" {{ old('treatment_type', $appointment->treatment_type) === 'Cleaning' ? 'selected' : '' }}>Cleaning</option>
                    <option value="Filling" {{ old('treatment_type', $appointment->treatment_type) === 'Filling' ? 'selected' : '' }}>Filling</option>
                    <option value="Extraction" {{ old('treatment_type', $appointment->treatment_type) === 'Extraction' ? 'selected' : '' }}>Extraction</option>
                    <option value="Root Canal" {{ old('treatment_type', $appointment->treatment_type) === 'Root Canal' ? 'selected' : '' }}>Root Canal</option>
                    <option value="Braces" {{ old('treatment_type', $appointment->treatment_type) === 'Braces' ? 'selected' : '' }}>Braces</option>
                    <option value="Whitening" {{ old('treatment_type', $appointment->treatment_type) === 'Whitening' ? 'selected' : '' }}>Whitening</option>
                </select>
                @error('treatment_type')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="status" class="block text-gray-700 font-medium mb-2">Status</label>
                <select name="status" id="status" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="scheduled" {{ old('status', $appointment->status) === 'scheduled' ? 'selected' : '' }}>Scheduled</option>
                    <option value="completed" {{ old('status', $appointment->status) === 'completed' ? 'selected' : '' }}>Completed</option>
                    <option value="cancelled" {{ old('status', $appointment->status) === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                </select>
                @error('status')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2">
                <label for="notes" class="block text-gray-700 font-medium mb-2">Notes</label>
                <textarea name="notes" id="notes" rows="3"
                          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('notes', $appointment->notes) }}</textarea>
            </div>
        </div>

        <div class="flex justify-end mt-6 space-x-2">
            <a href="{{ route('appointments.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-md transition duration-300">
                Cancel
            </a>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md transition duration-300">
                Update Appointment
            </button>
        </div>
    </form>
</div>
@endsection