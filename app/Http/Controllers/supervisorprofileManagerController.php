<?php

namespace App\Http\Controllers;

use App\Models\individuals;

use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class supervisorprofileManagerController extends Controller
{
    public function profileManagerr()
    {
<<<<<<< Updated upstream
    if(empty(session('roleID')) || session('roleID') == 6 || session('roleID') == 5) {
        $approvedIndividuals = individuals::where('approved', 1)->get();
=======
        if (empty(session('userID')) && session('roleID') != 6 || session('roleID') != 5) {
            return redirect('/login');
        }
>>>>>>> Stashed changes

        $unapprovedIndividuals = individuals::where('approved', 0)->get();

        return view('supervisorpages/profileManager', compact('approvedIndividuals', 'unapprovedIndividuals'));
    } else {
        $approvedIndividuals = individuals::where('approved', 1)->wherenot('roleID', 6)->get();

        $unapprovedIndividuals = individuals::where('approved', 0)->wherenot('roleID', 6)->get();

        return view('supervisorpages/profileManager', compact('approvedIndividuals', 'unapprovedIndividuals'));
    }
}

    public function updateStatus(Request $request)
    {


        $individual = individuals::find($request->individualID);
        if($individual){

            $individual->update(['approved' => 1]);
            return redirect()->back();
        }
        return redirect()->back()->with('error', 'Record not found');
    }

    public function unapproveupdateStatus(Request $request)
    {


        $individual = individuals::find($request->individualID);

        if ($individual) {

            $individual->update(['approved' => 0]);
            return redirect()->back();
        }
        return redirect()->back()->with('error', 'Record not found');
    }
}
