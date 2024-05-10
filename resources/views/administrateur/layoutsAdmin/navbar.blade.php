 <!-- nav Bar -->
 <header>
    <div class="headbbb">
        <a>Mon Cabinet</a>
    </div>
    <a href="{{Route('index')}}" class="fas fa-house"> <span style="font-size: 1em;">Accueil</span></a>
    <div class="headTwo">

        <div class="Adpro">
            <img src="/storage/ProfilePatient/{{Session::get('patient')->image}}" alt="">
        </div>
        <h1>{{Session::get('patient')->nom}} <span>{{Session::get('patient')->prenom}}</span></h1>
        <a class="fas fa-power-off" href="{{Route('deconnecter')}}" title="Se deconnecte"></a>
    </div>
</header>
<!-- fin nav bar -->
