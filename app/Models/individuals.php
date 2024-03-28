<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class individuals extends Model
{
    use HasFactory;

    protected $primaryKey = 'individualID';

    protected $fillable = [
        'fName',
        'lName',
        'email',
        'phone',
        'dob',
        'approved',
        'roleID',
    ];
}
