@extends('layouts.master')
@section('content')
    <!-- section Profil -->
    <section class="sectPro">
        @if (Session::has('error'))
        <div class="afferror" type="button">

        <p class="text-danger">{{ Session::get('error') }}</p>
        </div>
         @endif
        <div class="couvert">
            <div class="msgBv">
                <img src="img/bgk.jpg" alt="">
            </div>
            <div class="imgPro">
                <img src="/storage/ProfilePatient/{{Session::get('patient')->image}}" alt="">
            </div>
            <h1>{{Session::get('patient')->nom}} <br> <span>{{Session::get('patient')->prenom}}</span></h1>
            {{-- <h1 class="email">{{Session::get('patient')->email}}</h1> --}}
            <div class="outils">
              <ul class="navy">
                <li class="nav"><h1 class="nav-link menu" >Commentaire</h1></li>
                <li class="nav bar"><h1 class="nav-link menu">Message</h1></li>
                <li class="nav"><h1 class="nav-link menu">Rendez-vous</h1></li>


            </ul>
            </div>
            <!-- one page  -->
            <div id="coms" class="contenuPart tach-1">
              <div class="Primo">
                <form action="{{route('envComs')}}" method="POST">
                    @csrf
                  <textarea placeholder="Votre commentaire" name="content"></textarea>
                  <button type="submit">Envoyer</button>
                </form>
              </div>
              <div class="second">
                  <i class="fas fa-message"></i>
                <h3 class="comsDt">Votre commentaire sera visible pour les visiteur de ce site</h3>


              </div>

            </div>
            {{-- message --}}
            <div id="coms" class="contenuPart tach-2" >
                <div class="affMsg">
                    @foreach ($affmessage as $aff )

                    <div class="afftext {{$aff->statut === 'users' ? 'afftext2':''}}">
                        <div class="imgpro">
                            <img src="/storage/ProfilePatient/{{$aff->image}}" alt="">
                        </div>
                        <p class="messtext">{{$aff->content}}</p>
                    </div>

                    @endforeach
                </div>
                <form action="{{route('envoyer')}}"   method="POST">
                    @csrf
                    @foreach ($idAdmin as $id )
                    <input type="text" name="idAdmin" value="{{$id->id}}" style="display: none">
                @endforeach

                <div class="sendMsg">
                  <input type="text" name="content" placeholder="Votre Message" >
                  <button type="submit">
                    <i class="fas fa-paper-plane"></i>
                    Envoyer
                  </button>
                </div>
              </form>
            </div>
            {{-- rendez-vous --}}
            <div id="coms" class="contenuPart tach-3">
                <div class="contentBx">
                    @foreach ( $valid as $val)
                    <div class="contrdv">
                        <i class="fas fa-check"></i>
                    <div class="rdvconf">
                        <h4>Rendez-vous : <span>{{$val->date}}</span></h4>
                        <h4>Heure : <span>{{$val->heure}}</span></h4>
                    </div>
                    </div>



                    @endforeach


                </div>
            </div>
            <!-- fin one page -->
        </div>
    </section>
    <!-- Fin inscription -->
@endsection
