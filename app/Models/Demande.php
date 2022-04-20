<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;
use Date;
use DateTime;

class Demande extends Model
{
    use HasFactory;

    protected $fillable=['num_dmd', 'date_dmd', 'statut', 'lieu_dmd', 'nom_agent', 'Duree'];

    public function storeDemande($data)
    {
        return DemandeModel::create($data);
    }

    public function getAllDemande()
    {
        return DemandeModel::get();
    }

    public function getOneDemande($id)
    {
        return DemandeModel::find($id);
    }

    public function getSearchNinaCin($id, $type)
    {
        
        if($type=='nina'){
       
            $dt = Carbon::now();
            $dt = Carbon::parse($dt)->format('Y');
            $dat=DB::table('nina')->where('num_nina',$id)->first();
            $newdate=$dat->date_naiss;
            $newdate = Carbon::parse($newdate)->format('Y');
            
            $age = $dt-$newdate;
            if($age >= 18){
                return $dat;
            }
           else{
                return back()->with('error', 'Le numéro saisit est inexistant ou n\'appartient pas à un adulte.');
            }
        }
        //return DB::table('nina')->where('num_nina',$id)->first();
        return DB::table('cin')->where('num_cin',$id)->first();
    }

    public function updateDemande($data, $id)
    {
        return DemandeModel::find($id)->update($data);
    }


    public function getSearchNinaCinEnfant($id, $type)
    {
        
        $dt = Carbon::now();
        $dt = Carbon::parse($dt)->format('Y');
        $dat=DB::table('nina')->where('num_nina',$id)->first();
        $newdate=$dat->date_naiss;
        $newdate = Carbon::parse($newdate)->format('Y');
            
        $age = $dt-$newdate;
        if($type=='nina' && $age < 18){
            
            return $dat;
            
        }

        return back()->with('error', 'Le numéro saisit est inexistant ou n\'appartient pas à un enfant');
        
    }
}
