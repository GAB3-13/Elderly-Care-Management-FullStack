<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\individuals;
use App\Models\patients;

use App\Models\rosters;

use Illuminate\Support\Carbon;


class patienthubController extends Controller
{
    public function hub()
    {    
     
            if (session()->has('userID') && session()->has('roleID')) {
                $userID = session('userID');
                $roleID = session('roleID');

                $patients = Patients::where('patients.individualID', $userID)
                ->join('individuals', 'patients.individualID', '=', 'individuals.individualID')
                ->select('patients.*', 'individuals.fName', 'individuals.lName')
                ->get();

                return view('patientpages/patientNavigation',compact('patients'));

        } 
        
        
        else {
     
            return redirect('/login');
        }
    }  
}
