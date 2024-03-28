<?php

namespace App\Http\Controllers;
use App\Models\individuals;
use Illuminate\Http\Request;

class adminNavigationController extends Controller
{
    public function adminNavigation()
    {

        $patientCount = Individuals::where('roleID', 1)
        ->where('approved', 1)
        ->count();

      
        $caregiverCount = Individuals::where('roleID', 2)
            ->where('approved', 1)
            ->count();
    
        $doctorCount = Individuals::where('roleID', 3)
            ->where('approved', 1)
            ->count();
        
        $supervisorCount = Individuals::where('roleID', 5)
            ->where('approved', 1)
            ->count();
    
    
        return view('adminpages/adminNavigation', [
            'caregiverCount' => $caregiverCount,
            'doctorCount' => $doctorCount,
            'patientCount'=> $patientCount,
            'supervisorCount'=> $supervisorCount
        ]);
    }
}
    