<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rosters;
use Illuminate\Support\Carbon;
use App\Models\individuals;

class rosterController extends Controller
{
    public function roster()

        {

            if(empty(session('userID')) || session('roleID') != 5) {
                return redirect('/login');
            }
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

            return view('supervisorpages/roster', compact('caregiverIndividuals', 'doctorIndividuals', 'supervisorIndividuals','setRosters'));

        }


        // else {

        //     return redirect('/login');
        // }

        public function saveRosterr(Request $request)
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

                $roster = rosters::create($validatedData);
                return redirect()->route('roster')->with('success', 'Roster created successfully!');
            } catch (\Illuminate\Validation\ValidationException $e) {
                return redirect()->route('newRoster', ['error' => $e->getMessage()]);
            } catch (\Exception $e) {
                return redirect()->route('newRoster', ['error' => 'Failed to create the roster!']);
            }
        }

}
