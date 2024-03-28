<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class doctorHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // Fetch old appointments for the logged-in doctor
       $appointments = doctorAppointment::where('doctor_id', auth()->id())->get();

       return view('doctor_home.index', compact('appointments'));
    }

    public function submitTillDate(Request $request)
    {
        $validatedData = $request->validate([
            'tillDate' => 'required|date',
        ]);

        // Add logic to handle the Till Date submission

        return redirect()->route('doctor.home')->with('success', 'Till Date submitted successfully!');
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
}
