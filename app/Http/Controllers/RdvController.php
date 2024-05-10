<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\RendezVous;
use App\Models\Validation;
use Illuminate\Http\Request;
use Session;

class RdvController extends Controller
{
    public function storeRdv(Request $req){
        $this->validate($req,[
            "nom" => "required",
            "prenom"=>"required",
            "sexe"=>'required',
            // "service_id"=>'required',
            'date'=>'required'


        ]);

        $rdv = new RendezVous();
        $rdv->from_id = Session::get('patient')->id;;
        $rdv->nom = $req->input('nom');
        $rdv->prenom = $req->input('prenom');
        $rdv->sexe = $req->input('sexe');
        $rdv->service_id = $req->input('service');
        $rdv->date = $req->input('date');
        $rdv->save();
        $error = 'Demande envoyée!';
        return redirect()->route('rdv')->with('error',$error);


    }
    // envoyer la validation du rendez vous
    public function sendValidat($id,Request $req){
      $validate = new Validation();
      $validate->rdv_id=$id;
      $validate->service_id=$req->input('serv_id');
      $validate->date = $req->input('date');
      $validate->heure = $req->input('time');
      $validate->save();
      $error = 'Validation envoyée';
      return redirect()->route('rendezVous_view')->with('error',$error);
    }
}
