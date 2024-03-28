<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index');
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
    public function showMissedActivity()
    {
        // Fetch missed patient activity details from the database
        $missedActivityDetails = MissedActivity::all();

        return response()->json(['missedActivityDetails' => $missedActivityDetails]);
    }
}
