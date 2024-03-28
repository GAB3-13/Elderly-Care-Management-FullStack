<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\individuals;
use App\Models\home_care;
use App\Models\patients;

class familymemberController extends Controller
{
    public function familymemberlogin()
    {
        if (session()->has('userID') && session()->has('roleID')) {
            $userID = session('userID');
            $roleID = session('roleID');


        $patientIndividuals = Individuals::where('roleID', 1)
            ->where('approved', 1)
            ->get(); 

    
        return view('familymember/familymemberNavigation', compact('patientIndividuals'));
        }
        else {
 
            return redirect('/login');
        }


    }
    public function searchpatient(Request $request){

//handle the request, make sql query to join both tables to get all the info
$individualID = $request->individualID;
$familyCode = $request->familyCode;

$patientsInfo = Patients::select('patients.*', 'individuals.*')
    ->join('individuals', 'patients.individualID', '=', 'individuals.individualID')
    ->where('patients.individualID', $individualID)
    ->where('patients.familyCode', $familyCode)
    ->get();
    $patientID = $patientsInfo->pluck('patientID')->toArray();



$caregiverInfo = home_care::where('patientID', $patientID)
->get();


// get the patients again
$patientIndividuals = Individuals::where('roleID', 1)->where('approved', 1)->get(); 

// dd($caregiverInfo);


return view('familymember/familymemberNavigation',compact('patientsInfo', 'patientIndividuals','caregiverInfo'));

    }
}

