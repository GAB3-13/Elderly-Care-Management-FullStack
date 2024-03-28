<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class patientscheduleController extends Controller
{
    public function patientSchedule()
    {    
        return view(('patientpages/patientschedule'));
    }  
}
