<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\rosters;
use App\Models\DoctorAppointment;
use App\Models\Patients;
use App\Models\individuals;
use App\Models\home_care;
use App\Models\caregiver;

class potdController extends Controller {
public function potd(){

    if (session()->has('userID') && session()->has('roleID')) {
        $userID = session('userID');
        $roleID = session('roleID');

        $today = Carbon::today();

        $caregiversToday = Rosters::whereDate('rosterDate', $today)
        ->select('caregiverID1', 'caregiverID2', 'caregiverID3')
        ->get()
        ->flatMap(function ($roster) {
            return [$roster->caregiverID1, $roster->caregiverID2, $roster->caregiverID3];
        })        ->filter()
        ->unique()
        ->values();

    $caregiversDetails = Individuals::whereIn('individualID', $caregiversToday)
        ->select('individualID', 'fName', 'lName')
        ->get()
        ->keyBy('individualID');

        $setRosters = Rosters::whereDate('rosterDate', '>=', $today)
            ->orderBy('rosterDate')
            ->get();

            $appointments = DoctorAppointment::whereDate('scheduleDate', $today)
    ->select('doctor_appointments.patientID', 'doctor_appointments.appointmentID', 'doctor_appointments.scheduleDate','doctor_appointments.comment','home_care.morningMeds', 'home_care.afternoonMeds', 'home_care.nightMeds', 'home_care.breakfast', 'home_care.lunch', 'home_care.dinner')
    ->leftJoin('home_care', 'doctor_appointments.appointmentID', '=', 'home_care.appointmentID')
    ->get();

            foreach ($appointments as $appointment) {
                $patientDetails = Patients::where('patientID', $appointment->patientID)
                    ->first();

                if ($patientDetails) {
                    $individualID = $patientDetails->individualID;

                    $individualDetails = Individuals::where('individualID', $individualID)
                        ->select('fName', 'lName')
                        ->first();

                    if ($individualDetails) {
                        $appointment->fName = $individualDetails->fName;
                        $appointment->lName = $individualDetails->lName;
                    }
                }
            }


    return view('doctorpages/potd', compact('appointments', 'caregiversDetails'));

    }


    else {

        return redirect('/login');
    }
}


public function set(Request $request)
{
    if (session()->has('userID') && session()->has('roleID')) {
        $userID = session('userID');
        $roleID = session('roleID');

        $today = Carbon::today();


        $appointmentID = $request->input('appointmentID');
        $comment = $request->input('comment');

        $appointment = DoctorAppointment::find($appointmentID);
        if ($appointment) {
         $appointment->comment = $comment;
         $appointment->seenDate = $today;
         $appointment->save();
     }
     $individualID = $request->input('caregiverID');
    //  dd($individualID);
     $caregiver = caregiver::where('individualID', $individualID)->get();
     $caregiverID = $caregiver[0]->caregiverID;


        $patientID = $request->input('patientID');
        $morningMeds = $request->input('morning_meds');
        $afternoonMeds = $request->input('afternoon_meds');
        $nightMeds = $request->input('night_meds');
        $breakfast = $request->input('breakfast');
        $lunch = $request->input('lunch');
        $dinner = $request->input('dinner');

        $homeCare = home_care::where('appointmentID', $appointmentID)->first();
        // $patient = patients::where('patientID', $patientID)->first();
        
// dd($patientID);
//update or create stuff

        if ($homeCare) {
            $homeCare->caregiverID = $caregiverID;
            $homeCare->patientID = $patientID;
            $homeCare->morningMeds = $morningMeds;
            $homeCare->afternoonMeds = $afternoonMeds;
            $homeCare->nightMeds = $nightMeds;
            $homeCare->breakfast = $breakfast;
            $homeCare->lunch = $lunch;
            $homeCare->dinner = $dinner;
            $homeCare->appointmentDate = $today;
            $homeCare->save();
        } else {
            $newHomeCare = new home_care();
            $newHomeCare->appointmentID = $appointmentID;
            $newHomeCare->caregiverID = $caregiverID;
            $newHomeCare->patientID = $patientID;
            $newHomeCare->morningMeds = $morningMeds;
            $newHomeCare->afternoonMeds = $afternoonMeds;
            $newHomeCare->nightMeds = $nightMeds;
            $newHomeCare->breakfast = $breakfast;
            $newHomeCare->lunch = $lunch;
            $newHomeCare->dinner = $dinner;
            $newHomeCare->appointmentDate = $today;
            $newHomeCare->save();
        }
        // dd($patient);
        $patient = patients::where('patientID', $patientID)->first();

        if ($patient) {
            // Patient exists, update the record
            $patient->morningMed = $morningMeds;
            $patient->afternoonMed = $afternoonMeds;
            $patient->nightMed = $nightMeds;
            $patient->breakfast = $breakfast;
            $patient->lunch = $lunch;
            $patient->dinner = $dinner;
            $patient->save();
        } else {
            // Patient doesn't exist, create a new patient record
            $newPatient = new patients();
            $newPatient->patientID = $patientID;
            $newPatient->individualID = $patientID; // Not sure if this should be different from patientID
            $newPatient->caregroup = null;
            $newPatient->familyCode = 1; // Verify if this should be the family code
            $newPatient->admissionDate = $today; // Assuming admission date should be set to today
            $newPatient->morningMeds = $morningMeds;
            $newPatient->afternoonMeds = $afternoonMeds;
            $newPatient->nightMeds = $nightMeds;
            $newPatient->breakfast = $breakfast;
            $newPatient->lunch = $lunch;
            $newPatient->dinner = $dinner;
            $newPatient->save();
        }



    return redirect()->back()->with('success', 'Data updated successfully');

    }


    else {

        return redirect('/login');
    }
}
}





