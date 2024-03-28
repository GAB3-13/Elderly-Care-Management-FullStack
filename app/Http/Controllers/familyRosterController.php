<?php

namespace App\Http\Controllers;

use App\Models\rosters;
use Illuminate\Support\Carbon;
use App\Models\individuals;

use Illuminate\Http\Request;

class familyRosterController extends Controller
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
                    // dd($setRosters);
            
                return view('familymember/familymemberdashboard', compact('caregiverIndividuals', 'doctorIndividuals', 'supervisorIndividuals','setRosters'));

        } 
        
        
        else {
     
            return redirect('/login');
        }
    }  
        
    }

