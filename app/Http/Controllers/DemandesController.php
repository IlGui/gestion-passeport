<?php

namespace App\Http\Controllers;
use App\Models\Demande;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DemandesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        
        $request->validate([

            'type'     =>  'required',
            'search'      =>  'required|Min:7|Max:15'
        ]);

        

        $data=(new Demande)->getSearchNinaCin($request->input("search"), 
        $request->input("type"));
        if ($data) {
           return view('user.formulairedemande', compact('data'));
        }else{
            return back()->with('error', 'Le numéro saisi est inexixtant');
        }    

    }

    public function searchEnfant(Request $request)
    {
        
        $request->validate([
            'type'     =>  'required',
            'search'      =>  'required|Min:15|Max:15'
        ]);

        

        $data=(new Demande)->getSearchNinaCinEnfant($request->input("search"), 
        $request->input("type"));
        if ($data) {
            return view('user.formulairedemandeEnfant', compact('data'));   
        }
        return back()->with('error', 'Le numéro saisi est inexixtant');

    }

    public function authCheck ()
    {
        if(Auth::check()){
            return view('user.demandes');
        }

        return redirect()->route('login');
    }

    public function generateTrackerCode()
    {
        $number = mt_rand(10,99).'.'.mt_rand(4000,6999).'.'.mt_rand(1000,3999).'.'.mt_rand(7000,9999);
        $verifycode = DegreeAuthorizationModel::where('tracker', $number)->first();
        if($verifycode)
        {
            return this->generateTrackerCode();
        }
        return $number;
    }
}
