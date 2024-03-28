<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use App\Models\rosters;
use Illuminate\Http\Request;

class patientController extends Controller
{
    public function patientlogin()
    {    
        $today = Carbon::today();

        $setRosters = Rosters::whereDate('rosterDate', '>=', $today)
            ->orderBy('rosterDate')
            ->get();



        return view('patientpages/dashboard',compact('setRosters'));
    }  
}
