<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class activityController extends Controller
{
    public function activity()
    {    
        return view('supervisorpages/activity');
    } 
}
