<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use App\Models\rosters;
use Illuminate\Http\Request;

class supervisorController extends Controller
{
    public function supervisorlogin()
    {    
        $today = Carbon::today();

        $setRosters = Rosters::whereDate('rosterDate', '>=', $today)
            ->orderBy('rosterDate')
            ->get();



        return view('supervisorpages/supervisorNavigation',compact('setRosters'));
    }  }
