<?php

namespace App\Http\Controllers\applicant;

use App\Http\Controllers\Controller;
use App\Models\applicant\User1Applicant;
use DateTime;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\Auth;

class ApplicantAuthController extends Controller
{
    function loginPage() {
        return view('applicant.auth.login');
    }

    function registerPage() {
        return view('applicant.auth.register');
    }

    public function store(Request $request) {

        $validated = $request->validate([
            'email' => ['required', 'email', 'unique:user1_applicant'],
            'password' => ['min:6', 'required', 'regex:/[a-z]/', 'regex:/[A-Z]/', 'regex:/[0-9]/', 'regex:/[@$!%*#?&]/'],
            'first_name' => ['required', 'min:2'],
            'middle_name' => ['required', 'min:2'],
            'last_name' => ['required', 'min:2'],
            'suffix_name' => ['required', 'min:2'],
            'day' => ['required'],
            'month' => ['required'],
            'year' => ['required'],
            'sex' => ['required'],
        ]);

                // must contain at least one lowercase letter
                // must contain at least one uppercase letter
                // must contain at least one digit
                // must contain a special character

        $validated2=[
            'id' => IdGenerator::generate(['table' => 'user1_applicant', 'length' => 10, 'prefix' => date('y')]),
            'email' => $validated['email'],
            'password' => '',
            'first_name' => $validated['first_name'],
            'middle_name' => $validated['middle_name'],
            'last_name' => $validated['last_name'],
            'suffix_name' => $validated['suffix_name'],
            'day' => $validated['day'],
            'month' => $validated['month'],
            'year' => $validated['year'],
            'sex' => $validated['sex'],
            'age' => '',
        ];

        $month = (int)$validated['month'];
        $day = (int)$validated['day'];
        $year = $validated['year'];

        $innitialAge = date("Y") - $year;

        if($month > (int)date('m')) {
            $innitialAge = $innitialAge - 1;

        } else if($month == (int)date('m')) {
            if($day > date('d')) {
                $innitialAge = $innitialAge - 1;
            }
        }

        $validated2['age'] = $innitialAge;

        $validated2['password'] = bcrypt($validated['password']);

        $add = User1Applicant::create($validated2);

        if($add) {
            notify()->success('Account Created Sucessfully');
            return redirect('/applicant/login');
        } else {
            notify()->error('Account Created Sucessfully');
            return back()->with('message', 'Error Creating Account');
        }
    }

    public function login(Request $request) {

        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',   
        ]);
    
        if(Auth::guard('user1')->attempt($validated)) {
            notify()->success('Login Successfully');

            return redirect('/') -> with('message', 'Login Sucessfully!!!');
        } else {
            return back()->withErrors(['email' => 'Email or Password dont match!']) -> onlyInput('email');
        }
    }

    public function logout() {
        Auth::guard('user1')->logout();
        notify()->success('Logout Successfully');
        return redirect('/applicant/login') -> with('message', 'Logout successfully');
    }
}
