<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appointmentCreationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('appointment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'patientId' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'appointmentDate' => 'required|date',
            'doctor' => 'required',
        ]);

        // Create a new appointment
        Appointment::create([
            'patient_id' => $validatedData['patientId'],
            'first_name' => $validatedData['firstName'],
            'last_name' => $validatedData['lastName'],
            'appointment_date' => $validatedData['appointmentDate'],
            'doctor' => $validatedData['doctor'],
        ]);

        return response()->json(['message' => 'Appointment created successfully']);
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
}
