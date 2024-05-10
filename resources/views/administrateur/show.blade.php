@extends('administrateur.layoutsAdmin.adminMaster')
@section('contenu')
   <!-- zone des message -->
   <div class="contenuParty patch3">
    <div class="containtMsg">
        <div class="contenuMsg">
            <div class="partieMsg">
                <div class="barMsg">
                    <form action="">
                        @csrf
                        <input type="text" name="" id="" placeholder="Recherche">
                        <button>Recherche</button>
                    </form>
                </div>

                <div class="barList">

                    @include('administrateur.testpatient',['patient'=>$patient])

                </div>
            </div>

            <div class="partiEnvoye">
                 <div class="barProfil">

                 <div class="contPdp">
                 <div class="pdp"><img src="/storage/ProfilePatient/{{$Patient->image}}" alt=""></div>
                <h2>{{$Patient->nom}} <span>{{$Patient -> prenom}}</span></h2>
                </div>
            </div>

{{-- affichage lay message lasa --}}
    <div class="barAffiche">
        @foreach ($message as $mess)
            <div class="boxmess {{$mess->statut === 'admin' ? 'boxmess2':''}}">
                <div class="imgpro">
                    <img src="/storage/ProfilePatient/{{$mess->image}}" alt="">
                </div>
                <h1>{{$mess->content}}</h1>
            </div>
        @endforeach
    </div>

    {{-- bar d'envoy message --}}
    <form action="" method="POST" class="barEnvoyeMsg">
      @csrf
        <input type="text" placeholder="Message" name="content">
        <button type="submit">Envoyer</button>
    </form>
            </div>

        </div>
    </div>
    </div>
    <!-- fin message -->

@endsection
