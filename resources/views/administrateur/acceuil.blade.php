@extends('administrateur.layoutsAdmin.adminMaster')
@section('contenu')
<!-- contenu -->
<div class="contenu">
    <!-- vue des fonctions -->
    <div class="ensemble">
        <div class="partiContaint">
            <div class="iconLg">
                <i class="fas fa-table-list"></i>
            </div>
            <h4>Services</h4>
            <div class="containteBefor">
                <a href="{{route('service')}}" style="text-decoration: none; color:white;font-size:2em;" class="fas fa-up-right-from-square"></a>
            </div>
        </div>
        <div class="partiContaint">
            <div class="iconLg">
                <i class="fas fa-clipboard-user"></i>
            </div>
            <h4>Patients</h4>
            <div class="containteBefor">
                <a href="{{route('patient')}}" style="text-decoration: none; color:white;font-size:2em;" class="fas fa-up-right-from-square"></a>
            </div>
        </div>
        <div class="partiContaint">
            <div class="iconLg">
                <i class="fas fa-envelope-circle-check"></i>
            </div>
            <h4>Messages</h4>
            <div class="containteBefor">
                <a href="{{route('message')}}" style="text-decoration: none; color:white;font-size:2em;" class="fas fa-up-right-from-square"></a>
            </div>
        </div>
        <div class="partiContaint">
            <div class="iconLg">
                <i class="fas fa-comments"></i>
            </div>
            <h4>Commentaires</h4>
            <div class="containteBefor">
                <a href="{{route('coms')}}" style="text-decoration: none; color:white;font-size:2em;" class="fas fa-up-right-from-square"></a>
            </div>
        </div>

        <div class="partiContaint">
            <div class="iconLg">
                <i class="fas fa-question"></i>
            </div>
            <h4>Question</h4>
            <div class="containteBefor">
                <a href="{{route('contact')}}" style="text-decoration: none; color:white;font-size:2em;" class="fas fa-up-right-from-square"></a>
            </div>
        </div>
        <div class="partiContaint">
            <div class="iconLg">
                <i class="fa fa-edit fa-5x"></i>
            </div>
            <h4>Rendez-vous</h4>
            <div class="containteBefor">
                <a href="{{route('rendezVous_view')}}" style="text-decoration: none; color:white;font-size:2em;" class="fas fa-up-right-from-square"></a>
            </div>
        </div>


    </div>
    <!-- fin des fontions -->

    <div class="ensemble-two">
        <!-- vues des list des patient -->
        <div class="membreListe">
            <div class="barPatient">
                <h3>Les patients</h3>
            </div>
            <div class="listPatient">
                @foreach ( $patient as $patients)
                <div class="prioPat">
                    <div class="promg">
                        <img src="/storage/ProfilePatient/{{$patients->image}}" alt="">
                    </div>
                    <h5>{{$patients->prenom}}</h5>
                </div>
                @endforeach


            </div>
            <a href="{{route('patient')}}">voir plus</a>
        </div>
        <!-- fin de la liste des patient -->

        <!-- vue des commentaire -->
        <div class="comsList">
            <div class="barComs">
                <h3>Les commentaires</h3>
            </div>

            <div class="ListComs">
                @foreach ($comm as $affcoms )
                <div class="ContCom">
                    <div class="comPromg">
                        <img style="height: 100%;" src="/storage/ProfilePatient/{{$affcoms->image}}" alt="">
                    </div>
                    <h1 class="contenuComs">{{$affcoms->content}}
                    </h1>
                </div>
                @endforeach


            </div>
            <a href="{{route('coms')}}">Voir plus</a>
        </div>
        <!-- fin de la commentaire -->
    </div>
</div>
<!-- fin contenu -->
@endsection
