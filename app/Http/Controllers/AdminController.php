<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use App\Providers\RouteServiceProvider;

class AdminController extends Controller
{
    public function Index()
    {
        return view('admin.admin_login');
    }// fin de la methode

    public function Dashboard()
    {
        return view('admin.index');
    }// fin de la methode

    public function Login(Request $request)
    {
        //dd($request->all());
       $check = $request->all();
        if(Auth::guard('admin')->attempt([
            'email' => $check['email'],
            'password' => $check['password']
        ])){
            return redirect()->route('admin.dashboard')->with('message', 'Admin connecté avec succès');
        }else{
            return back()->with('message', 'Email ou mot de passe incorrect!');

        }
    }// fin de la methode

    public function AdminLogout(Request $request)
    {
        
        Auth::guard('admin')->logout();
            
        return redirect()->route('login_form')->with('Erreur', 'Admin deconnecté avec succès');
    }// fin de la methode

    public function AdminRegister()
    {   
        return view('admin.admin_register');
    }// fin de la methode

    public function AdminRegisterCreate(Request $request)
    {
        //dd($request->all());

        Admin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
            
        ]);

        return redirect()->route('login_form')->with('message', 'Admin crée avec succès');


    }// fin de la methode

    public function AdminRegistered(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = new Admin();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->verification_code = sha1(time());
        $user->created_at = Carbon::now();
        $user->save();

        if($user != null){
            MailController::sendSignupEmail($user->name, $user->email, $user->verification_code);
            return redirect()->back()->with(session()->flash('alert-success', 'Votre compte a été créé. Veuillez vérifier l\'email pour le lien de vérification.'));
        }

        return redirect()->back()->with(session()->flash('alert-danger', 'Quelque chose a mal tourné !'));    
    }// fin de la methode


    public function verifyUser(Request $request){
        $verification_code = \Illuminate\Support\Facades\Request::get('code');
        $user = Admin::where(['verification_code' => $verification_code])->first();
        if($user != null){
            $user->is_verified = 1;
            $user->save();
            return redirect()->route('login_form')->with(session()->flash('alert-success', 'Votre compte est vérifié. Veuillez vous connecter !'));
        }

        return redirect()->route('login_form')->with(session()->flash('alert-danger', 'Code de vérification invalide !'));
    }

    public function credentials(Request $request)
    {
        return array_merge($request->only($this->username(), 'password'), ['is_verified' => 1]);
    }
}
    
