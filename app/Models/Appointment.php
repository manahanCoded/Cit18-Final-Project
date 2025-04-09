<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'user_id',
        'patient_name',
        'appointment_date',
        'appointment_time', 
        'dentist_name',
        'treatment_type',
        'status',
        'notes'
    ];
    protected $casts = [
        'appointment_date' => 'date',
        'appointment_time' => 'datetime:H:i', // or 'string' if you want to keep it as string
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the user that owns the appointment
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}