<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class contactControlleur extends Controller
{
    public function contactStore(Request $req){
        $this->validate($req,[
            "email" => 'required',
            "nom" => 'required',
            "content" => "accepted"
        ]);
        $contact = new contact();
        $contact->content = $req->input('content');
        $contact->email = $req->input('email');
        $contact->nom = $req->input('nom');
        $contact->save();
        $error = 'Envoyer!';
        return redirect()->route('contact-view')->with('error',$error);
    }
}
