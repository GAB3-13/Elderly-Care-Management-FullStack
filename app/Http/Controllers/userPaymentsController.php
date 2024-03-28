<?php

namespace App\Http\Controllers;

use App\Models\home_care;
use App\Models\individuals;
use App\Models\patients;
use App\Models\payments;
use Illuminate\Http\Request;
use App\Models\userpayments;
use Carbon\Carbon;

class userPaymentsController extends Controller
{
    public function userPayments()
    {
        $patients = patients::join('individuals', 'individuals.individualID', '=', 'patients.individualID')
            ->join('payments', 'patients.patientID' , '=', 'payments.patientID')
            ->where('approved', 1)
            ->get();

        $patientDate = individuals::select('created_at')
            ->where('roleID', 1)
            ->where('approved', 1)
            ->get();

        $medicine = home_care::select('morningMeds', 'afternoonMeds', 'nightMeds')
            ->get();

        $payments = payments::select('paymentID')
            ->get();

        $array = [];

        foreach ($patientDate as $p) {
            $array[] = round((strtotime(carbon::today()) - strtotime($p->created_at)) / 86400, 0) * 10;
        }

        // $month =  round((strtotime(carbon::today()) - strtotime($patientDate[0]->created_at))/2592000,0);

        for ($i = 0; $i < count($medicine); $i++) {
            if ($medicine[$i]->morningMeds != NULL) {
                $array[$i] += 5;
            }
            if ($medicine[$i]->afternoonMeds != NULL) {
                $array[$i] += 5;
            }
            if ($medicine[$i]->nightMeds != NULL) {
                $array[$i] += 5;
            }
        }
        for ($i = 0; $i < count($array); $i++) {
            payments::where('paymentID', $payments[$i]->paymentID)
                ->update([
                    'totalDue' => $array[$i]
                ]);
        }

        return view('adminpages/userpayments', compact('patients'));
    }

    public function updatePayment(Request $request) {
        $paymentID = payments::where('paymentID', $request->payments)->get();
        $value = $request->update;

        // dd($paymentID[0]->paymentID);

        payments::where('paymentID', $paymentID[0]->paymentID)
        ->update([
            'payments' => $paymentID[0]->payments + $value
        ]);

        return redirect()->back();
    }
}
