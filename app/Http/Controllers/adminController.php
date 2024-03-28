<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function adminlogin()
    {
        // if (empty(session('userID')) && session('roleID') != 6) {
        //     return redirect('/login');
        // }
        return view('adminpages/adminNavigation');
    }

}
