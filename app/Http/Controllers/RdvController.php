<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RdvController extends Controller
{
    public function authCheck ()
    {
        if(Auth::check()){
            return view('user.rdv');
        }

        return redirect()->route('login');
    }
}
