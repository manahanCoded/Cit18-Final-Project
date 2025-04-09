<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Appointment;

class AppointmentPolicy
{
    public function view(User $user, Appointment $appointment)
    {
        return $user->id === $appointment->user_id;
    }

    public function create(User $user)
    {
        return true; // Allow all logged-in users to create appointments
    }

    public function update(User $user, Appointment $appointment)
    {
        return $user->id === $appointment->user_id;
    }

    public function delete(User $user, Appointment $appointment)
    {
        return $user->id === $appointment->user_id;
    }
}