@extends('administrateur.layoutsAdmin.adminMaster')
@section('contenu')
 <!--Pirse de rendez vous -->
 <div class="contenuParty patch1">
    <div class="containteRdv">
        @if (Session::has('error'))
        <div class="boxErr">
            <h1>{{Session::get('error')}}</h1>
        </div>
        @endif
       <h1 class="titleRdv">
        Les rendez vous
       </h1>
       <div class="contenuRdv">
        {{-- affichage des boucle ao rendez vous --}}
        @foreach ($rdv as $rendez )
        <div class="boxRdv">
            <div class="headboxRdv">
                <div class="pdpRdv">
                    <img src="/storage/ProfilePatient/{{$rendez->image}}" alt="">
                </div>
                <div class="detailPatient">
                    <h1>{{$rendez->nom}}<br><span>{{$rendez->prenom}}</span></h1>
                    <h2>{{$rendez->email}}<br><span>{{$rendez->profession}}</span></h2>


                </div>
            </div>
            <div class="headetail">
                <h4>le <span>{{$rendez->date}}</span> pour <span>{{$rendez->titre}}</span></h4>
                <i class="fas fa-tooth"></i>
            </div>
            <form class="headValid" action="{{route('valide',['id'=>$rendez->id])}}" method="POST">
                @csrf
                <input type="date" name="date"><br>
                <input type="hidden" name="serv_id" value="{{$rendez->service_id}}">
                <input type="time" name="time">
                <button type="submit">Valider</button>
            </form>
        </div>
        @endforeach

       </div>
    </div>

</div>
<!-- fin service -->

@endsection
