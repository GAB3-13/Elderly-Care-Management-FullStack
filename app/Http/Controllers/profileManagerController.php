<?php

namespace App\Http\Controllers;

use App\Models\individuals;

use Illuminate\Http\Request;

class profileManagerController extends Controller
{
    public function profileManager()
    {
        // if (empty(session('roleID')) && intval(substr(str(session('roleID')[0]), 10, 1)) != 6) {
        //     return redirect('/login');
        // }
        // dd(session('roleID'));

        if(empty(session('roleID')) || session('roleID') == 6 || session('roleID') == 5) {
            $approvedIndividuals = individuals::where('approved', 1)->get();

            $unapprovedIndividuals = individuals::where('approved', 0)->get();

            return view('adminpages/profileManager', compact('approvedIndividuals', 'unapprovedIndividuals'));
        } else {
            $approvedIndividuals = individuals::where('approved', 1)->wherenot('roleID', 6)->get();

            $unapprovedIndividuals = individuals::where('approved', 0)->wherenot('roleID', 6)->get();

            return view('supervisorpages/profileManager', compact('approvedIndividuals', 'unapprovedIndividuals'));
        }


    }

    public function updateStatus(Request $request){
        // if (empty(session('roleID')) && intval(substr(str(session('roleID')[0]), 10, 1)) != 6) {
        //     return redirect('/login');
        // }

        $individual = individuals::find($request->individualID);

        if($individual){

            $individual->update(['approved' => 1]);
            return redirect()->back();
                // return redirect()->route('profileManager')->with('success', 'Status updated successfully');
        }
        return redirect()->back()->with('error','Record not found');
        // return redirect()->route('profileManager')->with('error', 'Record not found');


}

public function unapproveupdateStatus(Request $request){
        // if (empty(session('roleID')) && intval(substr(str(session('roleID')[0]), 10, 1)) != 6) {
        //     return redirect('/login');
        // }

    $individual = individuals::find($request->individualID);

    if($individual){

        $individual->update(['approved' => 0]);
        return redirect()->back();
            // return redirect()->route('profileManager')->with('success', 'Status updated successfully');
    }
    return redirect()->back()->with('error','Record not found');
    // return redirect()->route('profileManager')->with('error', 'Record not found');


}
}
