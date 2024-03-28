<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class doctorController extends Controller
{
    public function doctorlogin()
    {
    
        return view('doctorpages/doctorNavigation');
    }
}
