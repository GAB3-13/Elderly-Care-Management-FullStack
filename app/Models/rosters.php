<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rosters extends Model
{
    use HasFactory;
    protected $fillable = [
        'rosterDate',
        'supervisorID',
        'doctorID',
        'caregiverID1',
        'caregiverID2',
        'caregiverID3',
        

    ];
    public function supervisor()
    {
        return $this->belongsTo(Individuals::class, 'supervisorID', 'individualID');
    }

    public function doctor()
    {
        return $this->belongsTo(Individuals::class, 'doctorID', 'individualID');
    }

    public function caregiver1()
    {
        return $this->belongsTo(Individuals::class, 'caregiverID1', 'individualID');
    }

    public function caregiver2()
    {
        return $this->belongsTo(Individuals::class, 'caregiverID2', 'individualID');
    }

    public function caregiver3()
    {
        return $this->belongsTo(Individuals::class, 'caregiverID3', 'individualID');
    }
}

