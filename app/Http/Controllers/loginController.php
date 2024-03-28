<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Individuals;
use App\Models\password;





class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (!empty(session('roleID'))) {
            $request->session()->flush();
            return redirect('/login');
        }
        return view('login');
    }

    public function validateLogin(Request $request)
    {
        $data = $request->all();

        $individual = Individuals::where('email', $data['email'])->first();

        if ($individual) {
            $savedPassword = Password::where('individualID', $individual->individualID)->first();

            if ($savedPassword) {
                $passwordMatch = $savedPassword->password === $data['password'];

                $userID = $individual->individualID;
                $roleID = $individual->roleID;
                session(['userID' => $userID]);
                session(['roleID' => $roleID]);

                if ($passwordMatch) {
                    // Redirect based on roleID
                    switch ($individual->roleID) {
                        case 1: // Patient
                            return redirect()->route('patientlogin');
                            break;
                        case 2: // Caregiver
                            return redirect()->route('caregiverlogin');
                            break;
                        case 3: // Doctor
                            return redirect()->route('newRoster');
                            break;
                        case 4: // Family Member
                            return redirect()->route('familymemberlogin');
                            break;
                        case 5: // Supervisor
                            return redirect()->route('supervisorlogin');
                            break;
                        case 6: // admin
                            return redirect()->route('adminNavigation');
                            break;
                        default:
                            return 'Unknown role';
                            break;
                    }
                } else {
                    return 'Incorrect password';
                }
            } else {
                return 'Password not found';
            }
        } else {
            return 'Email not registered';
        }
    }
}
