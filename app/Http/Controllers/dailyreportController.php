<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\caregiver;
use App\Models\home_care;
use App\Models\individuals;

class dailyreportController extends Controller
{

    public function report(Request $request)
    {

        $roleID = session('userID');
        // dd($roleID);

        if (empty(session('userID')) || session('roleID') != 6) {
            return redirect('/login');
        }
        else{

        $caregiverPatients = home_care::join('patients', 'patients.patientID', '=', 'home_care.patientID')
            ->join('individuals', 'individuals.individualID', '=', 'patients.individualID')
            ->where('approved', 1)
            ->get();

        $caregiverInformation = individuals::where('individualID', session('userID'))
            ->get();

// dd($caregiverPatients);

        return view('adminpages/report', ['cgI' => $caregiverInformation])
            ->with(compact('caregiverPatients'));
    }
}




}
