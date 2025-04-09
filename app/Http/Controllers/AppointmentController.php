<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $appointments = Auth::user()->appointments()->latest()->get();
        return view('appointments.index', compact('appointments'));
    }

    public function create()
    {
        return view('appointments.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'patient_name' => 'required|string|max:255',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required',
            'dentist_name' => 'required|string|max:255',
            'treatment_type' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        Auth::user()->appointments()->create($validated);

        return redirect()->route('appointments.index')->with('success', 'Appointment created successfully!');
    }

    public function show(Appointment $appointment)
    {
        $this->authorize('view', $appointment);
        return view('appointments.show', compact('appointment'));
    }

    public function edit(Appointment $appointment)
    {
        $this->authorize('update', $appointment);
        return view('appointments.edit', compact('appointment'));
    }

    public function update(Request $request, Appointment $appointment)
    {
        $this->authorize('update', $appointment);

        $validated = $request->validate([
            'patient_name' => 'required|string|max:255',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required',
            'dentist_name' => 'required|string|max:255',
            'treatment_type' => 'required|string',
            'status' => 'required|in:scheduled,completed,cancelled',
            'notes' => 'nullable|string',
        ]);

        $appointment->update($validated);

        return redirect()->route('appointments.index')->with('success', 'Appointment updated successfully!');
    }

    public function destroy(Appointment $appointment)
    {
        $this->authorize('delete', $appointment);
        $appointment->delete();
        return redirect()->route('appointments.index')->with('success', 'Appointment deleted successfully!');
    }
}