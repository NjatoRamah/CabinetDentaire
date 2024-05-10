<?php

namespace App\Http\Controllers;

use App\Models\message;
use App\Models\Patient;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\File;
use Illuminate\Contracts\Filesystem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Session;
use App\Mail\CabinetMail;


class Postcontroller extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function contactView()
    {
        return view('contact');
    }

    public function inscriptionView()
    {
        return view('inscription');
    }
    public function soinView()
    {
        $service = Service::orderBy('id')->get();
        return view('soin',[
            'service'=>$service
        ]);
    }

    // profile et message et validation
    public function profile(Request $req)
    {
        $idAdmin = Patient::select('id')
        ->where('statut','=','admin')
        ->get('id');
        // $affmessage = message::select('id','content','from_id','to_id','created_at')
        // ->where('from_id','=',Session::get('patient')->id)
        // ->orwhere('to_id','=',Session::get('patient')->id)
        // ->get();


        $affmessage = DB::table('messages')
        ->join('patients','from_id','=','patients.id')
        ->select('messages.id','content','messages.created_at','from_id','to_id','patients.statut','patients.image')
        ->where('from_id','=',Session::get('patient')->id)
        ->orwhere('to_id','=',Session::get('patient')->id)
        ->orderBy('created_at','DESC')
        ->get();

        // validation
        $valid = DB::table('validations')
        ->join('rendez_vouses','rdv_id','=','rendez_vouses.id')
        // ->join('services','service_id','=','services.id')
        ->select('rendez_vouses.id',
                // 'services.titre',
                  'validations.date',
                  'validations.heure',
                  'rendez_vouses.from_id',)
        ->where('rendez_vouses.from_id','=',Session::get('patient')->id)
        ->get();

        return view('profil',compact('idAdmin','affmessage','valid'));
    }
    // controlle message
    public function storeUser(Request $req){
        $this->validate($req,[
            'content'=> 'required'
        ]);
        $message = new message();
        $message->content = $req->input('content');
        $message->from_id = Session::get('patient')->id;
        $message->to_id = $req -> input('idAdmin') ;
        $message->save();
        $error = 'Envoyer';
        return Redirect()->route('profile')->with('error',$error);
    }


// rendez vous /////////////////////////////////////
    public function rendez()
    {

        $service = Service::orderBy('id')->get();
        return view('rdv',compact('service'));
    }


    public function detailSoin($id)
    {
        $service=Service::find($id);
        return view('soinDetail',[
            'service'=>$service
        ]);
    }


    // ajoute des patient inscrit
    public function ajoutPatient(Request $req)
    {
        $this->validate($req, [
            "nom" => "required",
            "prenom" => "required",
            "contact" => "required",
            "email" => "required",
            "profession" => "required",
            "password" => "required|min:8",
            "confpwd" => "required|min:8",
            "image" => "required|image|mimes:jpeg,png,jpg,gif", // Exemple de règles de validation pour l'image
        ]);
        // Storage::disk('public')->put('photo',$req->picture);
        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Stockez l'image dans le dossier "public/images" en utilisant la méthode storeAs
            $image->storeAs('ProfilePatient', $imageName, 'public');
            $pwd = $req ->input('password');
            $confpwd = $req -> input('confpwd');
            $patient = new Patient();
            if ($pwd === $confpwd) {
                $patient->nom = $req->input('nom');
                $patient->prenom = $req->input('prenom');
                $patient->contact = $req->input('contact');
                $patient->statut = "user";
                $patient->email = $req->input('email');
                $patient->password = bcrypt($req->input('password'));
                $patient->profession = $req->input('profession');
                $patient->image = $imageName; // Stockez le nom du fichier, pas l'entrée du formulaire
                $patient->save();
                $error ='vous ete inscrit!';
                return Redirect()->Route('inscription-view')->with('error',$error);
            }else{
                $errors ='Votre mot de passe n\'est pas identique!';
                return back()->with('error',$errors);
            }

        }

    }


// patient
    public function supprime($id){
        $serviceSuppre = Patient::find($id);
        $serviceSuppre->delete();
        return redirect()->route('patient');
    }

    // send mail
    public function CabinetMail(Request $req){
        $this->validate($req,[
            "email" => 'required',
            "content" => "accepted"
        ]);
         $to_mail = "oramahery@gmail.com";
         $title = "Nouvel e-mail";
         $content = "ceci est de".$req->input('email');
         $someso = $req->input('content');

         Mail::to($to_mail)->send(new CabinetMail($title,$content,$someso));
         $error = 'Message envoye avec succes!';
         return view('index')->with('error',$error);
    }

}
