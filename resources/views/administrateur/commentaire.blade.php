@extends('administrateur.layoutsAdmin.adminMaster')
@section('contenu')
 <!--Service  -->
 <div class="contenuParty patch1">
    <div class="containteServ">
       <h1 class="zcoms">Zone des commentaires</h1>
       <div class="boxCms">
        <div class="comsImg">
            <img src="{{asset('img/coms.jpg')}}" alt="">
        </div>

        <div class="zoneComs">
            {{-- affichage des commentaire --}}
            @foreach ( $coms as $affComs)
            <div class="patient">
                <div class="pdpPatient">
                    <img src="/storage/ProfilePatient/{{$affComs->image}}" alt="">
                </div>
                <div class="content">
                    <h1>{{$affComs->nom}}</h1>

                    <p class="mess">{{$affComs->content}}</p>
                </div>
            </div>
            @endforeach


        </div>
       </div>
    </div>

</div>
<!-- fin service -->

@endsection
