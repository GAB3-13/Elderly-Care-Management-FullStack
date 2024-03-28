<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class roleInsertionController extends Controller
{
    public function roleInsertion()
    {    
        return view(('roleInsertion'));
    }  
}