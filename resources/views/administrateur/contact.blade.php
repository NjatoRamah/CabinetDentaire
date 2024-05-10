@extends('administrateur.layoutsAdmin.adminMaster')
@section('contenu')
 <!--Service  -->
 <div class="contenuParty patch1">
    <div class="containtCont">
        <h1 class="zcoms">les messages des visiteurs</h1>
        <div class="boxContact">
            <div class="zoneContact">
                @foreach ($contact as $affCont)
                <div class="visiteur">
                    <i class="fas fa-user-tie" style="font-size:6em;"></i>
                    <div class="contentVist">
                        <h1>{{$affCont->nom}}</h1>
                        <h2>{{$affCont->email}}</h2>
                    <p class="mess">{{$affCont->content}}</p>
                    </div>


                </div>
                @endforeach
            </div>
            <div class="contactImg">
                <img src="{{asset('img/contactimg.jpg')}}" alt="">
            </div>
        </div>
    </div>

</div>
<!-- fin service -->

@endsection
