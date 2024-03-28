<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctorAppointment extends Model
{
    use HasFactory;

    protected $primaryKey = 'appointmentID';

    protected $fillable = [
        'doctorID',
        'patientID',
        'scheduleDate',
        'SeenDate',
        'Comment',
        'newComment'
    ];

}
