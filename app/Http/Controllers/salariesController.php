<?php

namespace App\Http\Controllers;
use App\Models\salaries;
use App\Models\individuals;
use Illuminate\Http\Request;

class salariesController extends Controller
{
    public function salaries()
{
    if (session()->has('userID') && session()->has('roleID')) {
        $userID = session('userID');
        $roleID = session('roleID');

    $caregiverIndividuals = Individuals::leftJoin('salaries', 'individuals.individualID', '=', 'salaries.individualID')
        ->where('individuals.roleID', 2)
        ->where('individuals.approved', 1)
        ->get(['individuals.*', 'salaries.salary']);

    $doctorIndividuals = Individuals::leftJoin('salaries', 'individuals.individualID', '=', 'salaries.individualID')
        ->where('individuals.roleID', 3)
        ->where('individuals.approved', 1)
        ->get(['individuals.*', 'salaries.salary']);

    $supervisorIndividuals = Individuals::leftJoin('salaries', 'individuals.individualID', '=', 'salaries.individualID')
        ->where('individuals.roleID', 5)
        ->where('individuals.approved', 1)
        ->get(['individuals.*', 'salaries.salary']);

        return view('adminpages.salaries', compact('caregiverIndividuals', 'doctorIndividuals', 'supervisorIndividuals'));

} 


else {

    return redirect('/login');
}
}  


    public function updateSalary(Request $request)
    {

        $individualIDs = $request->input('individualID');
        $roleIDs = $request->input('roleID');
        $newSalaries = $request->input('salary');

        // dd($individualIDs,$roleIDs,$newSalaries);

        foreach ($individualIDs as $key => $individualID) {
            $newSalary = $newSalaries[$individualID];
    
            salaries::updateOrCreate(
                ['individualID' => $individualID,],
                ['salary' => $newSalary]
            );
        }

        return redirect()->back()->with('success', 'Salary updated successfully');
    }
}
