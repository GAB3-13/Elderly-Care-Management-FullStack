<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class familyMemberHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('family_member_home.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function updateDetails(Request $request)
    {
        $validatedData = $request->validate([
            'familyCode' => 'required',
            'patientId' => 'required',
        ]);

        // Fetch patient details based on family code and patient id
        $patientDetails = PatientDetail::where('family_code', $validatedData['familyCode'])
            ->where('patient_id', $validatedData['patientId'])
            ->first();

        return response()->json(['patientDetails' => $patientDetails]);
    }
}

