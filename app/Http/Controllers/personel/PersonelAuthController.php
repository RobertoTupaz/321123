<?php

namespace App\Http\Controllers\personel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonelAuthController extends Controller
{
    function loginPage() {
        return view('personel.auth.login');
    }

    public function login(Request $request) {

        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required',   
        ]);
    
        if(Auth::guard('user2')->attempt($validated)) {
            notify()->success('Login Successfully');

            return redirect('/personel') -> with('message', 'Login Sucessfully!!!');
        } else {
            return back()->withErrors(['email' => 'Email or Password dont match!']) -> onlyInput('email');
        }
    }

    public function logout() {
        Auth::guard('user2')->logout();
        notify()->success('Logout Successfully');
        return redirect('/personel/login') -> with('message', 'Logout successfully');
    }
}
