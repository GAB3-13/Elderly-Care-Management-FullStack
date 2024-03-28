<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class caregiver extends Model
{
    use HasFactory;

    protected $fillable = [
        'individualID',
        'careGroupID',
        'created_at',
        'updated_at'
    ];
}
