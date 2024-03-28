<?php


namespace App\Http\Controllers;

use App\Models\caregiver;
use App\Models\home_care;
use App\Models\individuals;
use Illuminate\Http\Request;


class caregiverController extends Controller
{

    public function caregiverlogin(Request $request)
    {
        if (empty(session('userID')) || session('roleID') != 2) {
            return redirect('/login');
        }

        $cg = caregiver::select('caregiverID')->where('individualID', session('userID'))->get();

        $caregiverPatients = home_care::join('patients', 'patients.patientID', '=', 'home_care.patientID')
            ->join('individuals', 'individuals.individualID', '=', 'patients.individualID')
            ->where('approved', 1)
            ->where('caregiverID', $cg[0]->caregiverID)
            ->get();

        $caregiverInformation = individuals::where('individualID', session('userID'))
            ->get();

        return view('caregiverpages/caregiverNavigation', ['cgI' => $caregiverInformation])
            ->with(compact('caregiverPatients'));
    }

    public function createCheckUpdate(Request $request)
    {
        $appointmentID = $request->appointments;
        $appointmentInfo = home_care::where('appointmentID', $appointmentID)->get();
        $check = [
            $request->breakfast,
            $request->morning_meds,
            $request->lunch,
            $request->afternoon_meds,
            $request->dinner,
            $request->night_meds
        ];

        function checkOn($data)
        {
            $returnarray = [];
            foreach ($data as $d) { if ($d == "on") { $returnarray[] = "✓"; } else { $returnarray[] = "✗"; }}
            return $returnarray;
        }

        $numbers = checkOn($check);

        home_care::where('appointmentID', $appointmentID)
            ->where('patientID', $appointmentInfo[0]->patientID)
            ->update([
                'check_morningMeds' => $numbers[1],
                'check_afternoonMeds' => $numbers[3],
                'check_nightMeds' => $numbers[5],
                'check_breakfast' => $numbers[0],
                'check_lunch' => $numbers[2],
                'check_dinner' => $numbers[4]
            ]);

        return redirect()->back();
    }
}
