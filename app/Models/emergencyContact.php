<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emergencyContact extends Model
{
    protected $fillable = [
            'patientID',
            'familyCode',
            'emergencyContact',
            'relation'
    ];
}
