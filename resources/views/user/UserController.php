<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $datas = user::all();
        return view("user.manageusers", compact("datas"));
    }
    
}
