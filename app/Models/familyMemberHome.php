<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_name',
        'caregiver_name',
        'morning_medicine',
        'afternoon_medicine',
        'night_medicine',
        'breakfast',
        'lunch',
        'dinner',
    ];
}