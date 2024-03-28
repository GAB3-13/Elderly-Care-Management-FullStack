<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_name',
        'date',
        'comment',
        'morning_med',
        'afternoon_med',
        'night_med',
    ];
}

