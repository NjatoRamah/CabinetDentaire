
    <header class="head">
        <div class="headOne">
          <div class="headOneCont">
            <div class="headOnefirst">
                <i class="fas fa-location-dot"></i><h1>Lot Av xxx Bis, Antananarivo</h1>
              </div>
              <div class="headOnefirst">
                <i class="fas fa-clock"></i><h1 id="date"></h1><h1 id="heure">   </h1>
              </div>
          </div>
          <div class="headOneCont">
            <div class="headOnefirst">
                <i class="fas fa-phone"></i><h1>+261 34 66 701 96</h1>
              </div>
              <div class="headOnefont">
                @if (Session::has('patient'))
                    @if (Session::get('patient')->statut === "users")
                    <div class="imgProPh">
                        <imig src="/storage/ProfilePatent/{{Session::get('patient')->image}}" alt="">
                    </div>
                     <h1 class="nomSess">{{Session::get('patient')->nom}} <span>{{Session::get('patient')->prenom}}</span></h1><br>
                    <a href="{{Route('deconnecter')}}" class="fas fa-power-off" title="se deconnecter"></a>
                    @else
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-twitter-square"></i>
                    <i class="fab fa-instagram-square"></i>
                    <i class="fab fa-linkedin"></i>
                    @endif
                    @else
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-twitter-square"></i>
                    <i class="fab fa-instagram-square"></i>
                    <i class="fab fa-linkedin"></i>
                @endif
              </div>
          </div>
          </div>
        </div>
        <div class="headTwo">
          <div class="headLogo">
            <img src="{{asset('img/logo.jpg')}}" alt="">
          </div>
          <div class="headTwofirst">
            <div class="headnavig">
                <ul class="navy">
                    @if (Session::has('patient'))
                    @if (Session::get('patient')->statut === "users")
                        <li class="nav"><a href="/" class="nav-link">Accueil</a></li>
                        <li class="nav"><a href="{{route('soin-view')}}" class="nav-link">Nos soins</a></li>
                        <li class="nav"><a href="{{route('profile')}}" class="nav-link">Profile</a></li>
                        @else
                        <li class="nav"><a href="/" class="nav-link">Accueil</a></li>
                        <li class="nav"><a href="{{route('soin-view')}}" class="nav-link">Nos soins</a></li>
                        <li class="nav"><a href="{{route('contact-view')}}" class="nav-link">Contact</a></li>
                    @endif
                    @else
                    <li class="nav"><a href="/" class="nav-link">Accueil</a></li>
                    <li class="nav"><a href="{{route('soin-view')}}" class="nav-link">Nos soins</a></li>
                    <li class="nav"><a href="{{route('contact-view')}}" class="nav-link">Contact</a></li>
                    @endif
                </ul>
            </div>
            <div class="headContwo">
                @if (Session::has('patient'))
                    @if (Session::get('patient')->statut === "admin")
                        <div class="adminPh">
                            <img src="/storage/ProfilePatient/{{Session::get('patient')->image}}" alt="">
                        </div>
                        <h1 style="font-size:1.5em;"><a href="{{Route('admin')}}">{{Session::get('patient')->nom}}</a></h1>
                     @else
                     <h1><a href="{{route('rdv')}}">Rendez-vous</a></h1>
                    @endif
                @else
                <h1><a href="{{route('inscription-view')}}">Connectez-vous</a></h1>
                @endif
            </div>
          </div>
        </div>
<!-- header responsive screen 850 -->
        <div class="partRespOne">
          <div class="respOne">
            <i class="fas fa-tooth"></i>

            <h1>on cabinet</h1>
          </div>

          <div class="respTwo">
            <i class="fas fa-bars-staggered"></i>
          </div>
        </div>
        <div class="partRespTwo">
          <div class="headnavig">
            <ul class="navy">
            @if (Session::has('patient'))
                 @if (Session::get('patient')->statut === "users")
                <li class="nav"><a href="/" class="nav-link">Accueil</a></li>
                <li class="nav"><a href="{{route('soin-view')}}" class="nav-link">Nos soins</a></li>
                <li class="nav"><a href="{{route('profile')}}" class="nav-link">Profile</a></li>
                <li class="nav"><a href="{{route('rdv')}}" class="nav-link">Rendez-vous</a></li>
                <li class="nav"><a href="{{Route('deconnecter')}}" class="nav-link" >Deconnecter</a></li>
                @else
                <li class="nav"><a href="/" class="nav-link">Accueil</a></li>
                <li class="nav"><a href="{{route('soin-view')}}" class="nav-link">Nos soins</a></li>
                <li class="nav"><a href="{{route('contact-view')}}" class="nav-link">Contact</a></li>
                @endif
                @else
                <li class="nav"><a href="/" class="nav-link">Accueil</a></li>
                <li class="nav"><a href="{{route('soin-view')}}" class="nav-link">Nos soins</a></li>
                <li class="nav"><a href="{{route('contact-view')}}" class="nav-link">Contact</a></li>
                <li class="nav"><a href="{{route('inscription-view')}}" class="nav-link">Connecter</a></li>
                @endif
            </ul>
        </div>
        </div>

<!-- fin screen 850 -->
    </header>
