<?php

namespace App\Http\Controllers;

use App\Models\commentaire;
use Illuminate\Http\Request;
use Session;

class ComsController extends Controller
{
    public function comsStore(Request $req)
    {
        $this->validate($req,[
            "content" => 'required'
        ]);
        $coms = new commentaire();
        $coms->content = $req->input('content');
        $coms->from_id = Session::get('patient')->id;
        $coms->save();
        $error='Votre commentaire est bien envoyée!';
        return redirect()->route('profile')->with('error',$error);
    }



}
