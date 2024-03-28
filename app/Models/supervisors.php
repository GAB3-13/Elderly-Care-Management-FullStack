<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supervisors extends Model
{
    use HasFactory;

    protected $fillable = [
        'individualID',
        'created_at',
        'updated_at'
    ];
}
