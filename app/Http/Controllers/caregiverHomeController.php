<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class caregiverHome extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Fetch patient details for today for the logged-in caregiver
         $patientDetails = PatientDetail::where('caregiver_id', auth()->id())->get();

         return view('caregiver_home.index', compact('patientDetails'));
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
       // Add logic to update patient details based on the submitted data

       return response()->json(['message' => 'Patient details updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
