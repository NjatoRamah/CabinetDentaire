<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class SessionController extends Controller
{
    //connecter
    public function connect(Request $req){
        $this->validate($req,[
            'email' => 'email|required',
            'password' => 'required|min:3'
        ]);
        $patient = Patient::where('email',$req->input('email'))->first();

        if($patient){

            if (hash::check($req->input('password'),$patient -> password)){
                Session::put('patient',$patient);

            if ($patient->statut === "users"){
                    return redirect()->Route('index');
                }elseif ($patient->statut === "admin") {
                    return redirect()->Route('admin');
                }
            }else{
                return back()->with('error','mots de passe incorrect!');
            }
        }else{
            return back()->with('error','vous n\'avez pas de compte');
        }
    }

    // deconnexion
    public function deconnecter(){
        Session::forget('patient');
        return redirect()->Route('inscription-view');
    }
}
