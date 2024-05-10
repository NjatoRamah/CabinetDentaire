<?php

namespace App\Http\Controllers;

use App\Models\message;
use App\Models\Patient;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

class MessageController extends Controller
{
    public function index(){
        $idconnecter = Session::get('patient')->id; //recuperer l'id user connecter
        $patient = Patient::select('nom','id','image','prenom')->where('id','!=',$idconnecter)->get();
return view('administrateur.testMessage',compact('patient'));
    }
    public function show ($id){
        $idconnecter = Session::get('patient')->id;
        $Patient = Patient::find($id);
        $patient = Patient::select('nom','id','image','prenom')->where('id','!=',$idconnecter)->get();


        //affichena ny message admin
        // $message = message::select('id','content','from_id','to_id','created_at')
        // ->where('to_id','=', $id)
        // ->where('from_id','=',$idconnecter)
        // ->orwhere('to_id','=',$idconnecter)
        // ->where('from_id','=',$id)
        // ->orderBy('created_at','ASC')
        // ->get();

        $message = DB::table('messages')
        ->join('patients','from_id','=','patients.id')
        ->select('messages.id','content','messages.created_at','from_id','to_id','patients.statut','patients.image')
        ->where('to_id','=', $id)
        ->where('from_id','=',$idconnecter)
        ->orwhere('to_id','=',$idconnecter)
        ->where('from_id','=',$id)
        ->orderBy('created_at','DESC')
        ->get();


        return view('administrateur.show',compact('patient','Patient','message'));
    }
    public function store($id, Request $req){
        $patient = Patient::find($id);
        // $topatient = Patient::select('id')->where('id','===',$id)->get();
        $message = new message();
         $message->content = $req->input('content');
         $message->from_id = Session::get('patient')->id;
         $message->to_id = $id ;
         $message->save();
         return Redirect()->route('conversation.show',['id'=>$patient->id]);
    }





}
