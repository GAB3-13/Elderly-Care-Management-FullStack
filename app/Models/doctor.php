<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'individualID',
        'name',
        'specialization',
        'qualification',
        'license_number',
        'contact_number',
        'address',
        'created_at',
        'updated_at'
    ];
}
