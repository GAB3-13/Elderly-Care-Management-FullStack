<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class familypaymentsController extends Controller
{
    public function familypayments()
    {
        return view('familymember/familypayments');
    }
}
