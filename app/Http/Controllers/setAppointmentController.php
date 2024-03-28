<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rosters;
use App\Models\doctorAppointment;
use Illuminate\Support\Facades\Session;


class setAppointmentController extends Controller
{
    public function setAppointment(){
        if (session()->has('userID') && session()->has('roleID')) {
            $userID = session('userID');
            $roleID = session('roleID');




            $upcomingAppointments = doctorAppointment::where('patientID', $userID)
            ->get();
        return view('patientpages/setAppointment',compact('upcomingAppointments'));


            return view('patientpages/setAppointment');
        } else {
     
            return redirect('/login');
        }
    }

    public function search(Request $request){
        if (session()->has('userID') && session()->has('roleID')) {
            $userID = session('userID');
            $roleID = session('roleID');

            $setRosters = Rosters::whereDate('rosterDate', $request->rosterDate)
            ->get();
            $upcomingAppointments = doctorAppointment::where('patientID', $userID)
            ->get();





        return view('patientpages/setAppointment',compact('setRosters','upcomingAppointments'));

        } 
        
        
        else {
     
            return redirect('/login');
        }
    }

    public function submit(Request $request){
        if (session()->has('userID') && session()->has('roleID')) {
            $userID = session('userID');
            $roleID = session('roleID');

            //we need to insert into the doctor_appointments table the date,doctor_id,patient_id
// dd($request);

$rosters = Rosters::whereDate('rosterDate', $request->selectedDate)->get();
            // dd($roster,$request->selectedDate);
            // dd($rosters);
            foreach ($rosters as $roster) {

            $doctorAppointment = new doctorAppointment();

            $doctorAppointment->doctorID = $roster->doctorID;
            $doctorAppointment->patientID = $userID;
            $doctorAppointment->scheduleDate = $roster->rosterDate;            
            $doctorAppointment->save();
            }

//right now we need to fix the login to automatically put them in to their own tbale instead of th eindividuals table because this causes a constraint problem

            Session::flash('success', 'Appointments successfully created.');

            return redirect()->back();

        } else {
     
            return redirect('/login');
        }
    }
}
