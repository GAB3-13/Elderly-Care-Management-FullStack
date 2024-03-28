<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Models\newRoster;
// use\App\Models\individuals;
use App\Models\rosters;
use Illuminate\Support\Carbon;
use App\Models\individuals;

class newRosterController extends Controller
{
    public function newRoster()
    {
        if (session()->has('userID') && session()->has('roleID')) {
            $userID = session('userID');
            $roleID = session('roleID');

        $today = Carbon::today();

        $setRosters = Rosters::whereDate('rosterDate', '>=', $today)
            ->orderBy('rosterDate')
            ->get();

        $caregiverIndividuals = Individuals::where('roleID', 2)
            ->where('approved', 1)
            ->get(); 
    
        $doctorIndividuals = Individuals::where('roleID', 3)
            ->where('approved', 1)
            ->get(); 
    
        $supervisorIndividuals = Individuals::where('roleID', 5)
            ->where('approved', 1)
            ->get(); 
    
        return view('adminpages/newroster', compact('caregiverIndividuals', 'doctorIndividuals', 'supervisorIndividuals','setRosters'));

    } 
    
    
    else {
 
        return redirect('/login');
    }
    }
    

   

    public function saveRoster(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'rosterDate' => 'required',
                'supervisorID' => 'required',
                'doctorID' => 'required',
                'caregiverID1' => 'required|different:caregiverID2,different:caregiverID3',
                'caregiverID2' => 'required|different:caregiverID1,different:caregiverID3',
                'caregiverID3' => 'required|different:caregiverID1,different:caregiverID2',
            ]);
            // dd($validatedData);
    // dd($validatedData);
            $roster = rosters::create($validatedData);
            return redirect()->route('newRoster')->with('success', 'Roster created successfully!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->route('newRoster', ['error' => $e->getMessage()]);
        } catch (\Exception $e) {
            return redirect()->route('newRoster', ['error' => 'Failed to create the roster!']);
        }
    }
}
    
