<?php

namespace App\Http\Controllers;

use App\Models\commentaire;
use App\Models\contact;
use App\Models\Patient;
use App\Models\Service;
use Dotenv\Store\File\Paths;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;

class AdminController extends Controller
{
    // view dashbord//////////////
    public function adminView()
    {
        $patient = Patient::select('nom','id','image','prenom')->where('id','!=',Session::get('patient')->id)->get();
        $service = Service::orderby('id')->get();
        $comm = DB::table('commentaires')
        ->join('patients','from_id','=','patients.id')
        ->select('commentaires.id','content','commentaires.created_at','patients.nom','patients.image')
        ->get();
        return view('administrateur.acceuil',compact('patient','comm'));
    }
    public function viewService(){
        $service = Service::orderBy('id')->get();
        return view('administrateur.service',[
            'service'=>$service
        ]);
    }
// ajouter les service/////////////////////////
public function ajouteService(Request $req){
    $this->validate($req, [
        "titre" => "required",
        "description" => "required",
        "contenu" => 'required',
        "tarif" => "required",
        "image" => "required|image|mimes:jpeg,png,jpg,gif,jfif", // Exemple de règles de validation pour l'image
    ]);

    if ($req->hasFile('image')) {
        $image = $req->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // stokena ilay image
        $image->storeAs('ImageService', $imageName, 'public');

        $service = new Service();
        $service->titre = $req->input('titre');
        $service->description = $req->input('description');
        $service->contenu = $req->input('contenu');
        $service->tarifs = $req->input('tarif');
        $service->image = $imageName; // Stockez le nom du fichier, pas l'entrée du formulaire
        $service->save();
        $error = 'Ajouter avec sucsse !';
        return Redirect()->Route('service')->with('error',$error);
    }else{
        $error = "veuillez bien remplir les champs !";
        return back()->with('error',$error);
    }
}
 // supprimer service //////////////
 public function supprime($id){
    $insert = Service::find($id);
    if($id){
        return redirect()->route('service')->with('id',$id);
    }



}
public function supprimeTwo($id){
    $serviceSuppre = Service::find($id);
    $serviceSuppre->delete();
    return redirect()->route('service');
}
 // modifier les service
 public function modifService ($id){
    $modife=Service::find($id);
    return view('administrateur.modification',[
        'modife'=>$modife
    ]);
}
public function uptadeService (Request $req){
    $this->validate($req,[
        "id"=>"required",
        "titre"=>"required",
        "description"=>"required",
        "tarif"=>"required",
        "image"=>"required"
    ]);
    if ($req->hasFile('image')) {
        $image = $req->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();


        $image->storeAs('ImageService', $imageName, 'public');
    $service = Service::find($req->id);
    $service -> titre = $req -> input('titre');
    $service -> description = $req -> input('description');
    $service -> tarifs = $req -> input('tarif');
    $service -> image = $imageName;
    $service -> update();
    $error = 'Le service est modifier!';

    return redirect()->route('service')->with('error',$error);
    }



}


// view des patients //////////////////////////
    public function viewPatient(){
        $patiente = Patient::select('nom','id','image','prenom','profession')->where('id','!=',Session::get('patient')->id)->get();
        $service = Service::select('titre')->get();
        return view('administrateur.patient',compact('patiente','service'));
    }

// view message//////////////////////////
    public function getmess($id){
        $messid = Patient::find($id);
        return view('administrateur.envoye',[
            'messid' => $messid
        ]);

    }
    public function viewMess(){
        $patient = Patient::orderBy('id')->get();

        return view('administrateur.message',compact('patient'));
    }

    // espace commentaire//////////////////////////
    public function listComs(){
        // $coms = commentaire::select('id','content','created_at')
        // ->orderBy('created_at','ASC')
        // ->get();

        $coms = DB::table('commentaires')
        ->join('patients','from_id','=','patients.id')
        ->select('commentaires.id','content','commentaires.created_at','patients.nom','patients.image')
        ->get();
        return view('administrateur.commentaire',compact('coms'));
    }

    // les contact////////////////////////////////
public function contact(){
    $contact = contact::orderBy('id')->get();
    return view('administrateur.contact',compact('contact'));
}

// rendez vous ////////////////////////////////
public function rdv_view(){

        // affichage des rendevous par patients
    $rdv = DB::table('rendez_vouses')
    ->join('patients','from_id','=','patients.id')
    ->join('services','service_id','=','services.id')

    ->select('rendez_vouses.id',
            'rendez_vouses.service_id',
            'rendez_vouses.nom',
            'rendez_vouses.prenom',
            'patients.email',
            'patients.profession',
            'patients.image',
            'rendez_vouses.date',
            'services.titre')
    ->get();
    // //////////////////////////////////////////////////////

    return view('administrateur.rendezVous',compact('rdv'));
}



}
