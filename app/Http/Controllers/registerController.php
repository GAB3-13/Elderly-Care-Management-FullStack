<?php

namespace App\Http\Controllers;

use App\Models\caregiver;
use App\Models\doctor;
use App\Models\individuals;
use App\Models\patients;
use App\Models\emergencyContact;
use App\Models\password;
use App\Models\payments;
use App\Models\supervisors;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function register()
    {
        return view(('register'));
    }

    public function registerUser(Request $request)
    {
        $data = $request->all();

        $individual =individuals::create([
            'fName' => $data['fName'],
            'lName' => $data['lName'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'dob' => $data['dob'],
            'roleID' =>$data['roleID']
        ]);
        // dd($individual);

        $individualID = $individual->individualID;

        password::create([
            'individualID'=>$individualID,
            'password' =>$data['password']
        ]);

        if($data['roleID'] == 1){

            $patients = patients::create([
                'individualID'=>$individualID,
                'careGroupID'=>null,
                'familyCode'=>$data['familyCode'],
                'admissionDate'=>today()
            ]);

            $patientID = $patients->patientID;

            emergencyContact::create([
                'patientID'=>$patientID,
                'familyCode'=>$data['familyCode'],
                'emergencyContact'=>$data['emergencyContact'],
                'relation'=>$data['ecRelationship']
            ]);

            payments::create([
                'patientID'=>$patientID,
            ]);

        }

        if($data['roleID'] == 2){

            caregiver::create([
                'individualID' => $individualID,
                'careGroupID' => null,
            ]);
        }

        if($data['roleID'] == 3){
            doctor::create([
                'individualID' => $individualID,
            ]);
        }

        if($data['roleID'] == 5){
            supervisors::create([
                'individualID' => $individualID,
            ]);
        }

    return redirect()->route('login');
    }
}
