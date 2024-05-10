<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ComsController;
use App\Http\Controllers\contactControlleur;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\RdvController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::get('/',[Postcontroller::class, 'home'])->name('index');
route::get('/contact',[Postcontroller::class, 'contactView'])->name('contact-view');
route::get('/inscription',[Postcontroller::class, 'inscriptionView'])->name('inscription-view');
route::get('/soin',[Postcontroller::class, 'soinView'])->name('soin-view');
route::get('/profile',[Postcontroller::class,'profile'])->name('profile');
route::get('/rendezVous',[Postcontroller::class,'rendez'])->name('rdv');
route::get('detail/{id}',[Postcontroller::class,'detailSoin'])->name('detail');


// admin route
route::get('/admin',[AdminController::class,'adminView'])->name('admin');
route::get('/serviceForm',[AdminController::class,'viewService'])->name('service');
route::get('/partientForm',[AdminController::class,'viewPatient'])->name('patient');
route::get('commentaire',[AdminController::class,'listComs'])->name('coms');
route::get('contactAd',[AdminController::class,'contact'])->name('contact');
route::get('PriseRdv',[AdminController::class,'rdv_view'])->name('rendezVous_view');

// route::get('messageForm',[AdminController::class,'viewMess'])->name('message');
// route::get('getmessage/{id}',[AdminController::class,'getmess'])->name('getmess');

route::post('service',[AdminController::class,'ajouteService'])->name('addService');

//modification
route::get('modifier/{id}',[AdminController::class,'modifService'])->name('modifier');
route::post('modifer',[AdminController::class,'uptadeService'])->name('update');

// suppresisson
route::get('supprimer/{id}',[AdminController::class,'supprime'])->name('suppre');
route::get('supprimerTwo/{id}',[AdminController::class,'supprimeTwo'])->name('suppreTwo');
// fin admin


// ajoute inscription
route::post('/inscrit',[Postcontroller::class,'ajoutPatient'])->name('addPatient');
// supprimer patient
route::get('supprPatient/{id}',[PostController::class,'supprime'])->name('supprePatient');

//fonction pour l'afficahge erreur
// route::get('affPatient/{id}',[PostController::class,'affError'])->name('affichage');

//connexion
route::post('/connecter',[SessionController::class,'connect'])->name('connecter');
// deconnexion
route::get('deconnexion',[SessionController::class,'deconnecter'])->name('deconnecter');



// conversation
route::get('/message',[MessageController::class,'index'])->name('message');
route::get('/conversation',[MessageController::class,'index'])->name('conversation');
route::get('conversationShow/{id}',[MessageController::class,'show'])->name('conversation.show');
route::post('conversationShow/{id}',[MessageController::class,'store']);
//conversation view user
route::post('conversationUser',[Postcontroller::class,'storeUser'])->name('envoyer');

// commentaire
route::post('coms',[ComsController::class,'comsStore'])->name('envComs');

// envoye contact
route::post('sendCont',[contactControlleur::class,'contactStore'])->name('sendCont');
//save rendez Vous
route::post('priseRdv',[RdvController::class,'storeRdv'])->name('soumission');

// save validation
route::post('priseRdv/{id}',[RdvController::class,'sendValidat'])->name('valide');
