<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class additionalPInfoController extends Controller
{
    public function additionalPInfo()
    {    
        return view(('additionalPinfo'));
    }
}
