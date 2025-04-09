@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Create New Appointment</h1>

    <form action="{{ route('appointments.store') }}" method="POST" class="max-w-3xl bg-white p-6 rounded-lg shadow-md">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="patient_name" class="block text-gray-700 font-medium mb-2">Patient Name</label>
                <input type="text" name="patient_name" id="patient_name" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('patient_name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="dentist_name" class="block text-gray-700 font-medium mb-2">Dentist Name</label>
                <input type="text" name="dentist_name" id="dentist_name" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('dentist_name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="appointment_date" class="block text-gray-700 font-medium mb-2">Appointment Date</label>
                <input type="date" name="appointment_date" id="appointment_date" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('appointment_date')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="appointment_time" class="block text-gray-700 font-medium mb-2">Appointment Time</label>
                <input type="time" name="appointment_time" id="appointment_time" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('appointment_time')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2">
                <label for="treatment_type" class="block text-gray-700 font-medium mb-2">Treatment Type</label>
                <select name="treatment_type" id="treatment_type" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Select Treatment</option>
                    <option value="Cleaning">Cleaning</option>
                    <option value="Filling">Filling</option>
                    <option value="Extraction">Extraction</option>
                    <option value="Root Canal">Root Canal</option>
                    <option value="Braces">Braces</option>
                    <option value="Whitening">Whitening</option>
                </select>
                @error('treatment_type')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2">
                <label for="notes" class="block text-gray-700 font-medium mb-2">Notes</label>
                <textarea name="notes" id="notes" rows="3"
                          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>
        </div>

        <div class="flex justify-end mt-6">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md transition duration-300">
                Create Appointment
            </button>
        </div>
    </form>
</div>
@endsection