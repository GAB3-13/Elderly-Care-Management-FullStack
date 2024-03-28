<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home_care extends Model
{
    use HasFactory;

    protected $table = 'home_care';
    protected $primaryKey = 'appointmentID';


    protected $fillable = [
        'patientID',
        'doctorID',
        'appointmentDate',
        'caregiverID',
        'morningMeds',
        'afternoonMeds',
        'nightMeds',
        'breakfast',
        'lunch',
        'dinner',
        'check_morningMeds',
        'check_afternoonMeds',
        'check_nightMeds',
        'check_breakfast',
        'check_lunch',
        'check_dinner'
    ];
    protected $attributes = [
        'patientID' => null,
        'doctorID' => null,
        'appointmentDate' => null,
        'caregiverID' => null,
        'morningMeds' => null,
        'afternoonMeds' => null,
        'nightMeds' => null,
        'breakfast' => null,
        'lunch' => null,
        'dinner' => null,
        'check_morningMeds' => null,
        'check_afternoonMeds' => null,
        'check_nightMeds' => null,
        'check_breakfast' => null,
        'check_lunch' => null,
        'check_dinner' => null,
    ];
}
