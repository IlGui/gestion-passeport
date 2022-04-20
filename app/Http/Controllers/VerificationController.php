<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Controller
{
    public function authCheck ()
    {
        if(Auth::check()){
            return view('user.verification');
        }

        return redirect()->route('login');
    }
}
