
 <!-- footer -->
 <footer>
    <div class="contenaire">
      <div class="footOne">
        <div class="footLoc">
          <h1 style="color: white;">Adresse</h1>
          <div class="iconFoot">
            <i class="fas fa-location-dot"></i><h2>
              Lot Av xx xxx Antananarivo </h2>
          </div>
          <div class="iconFoot">
            <i class="fas fa-phone"></i><h2>+261 33 456 78</h2>
          </div>
          <div class="iconFoot">
            <i class="fas fa-envelope"></i><h2>
             oramahery@gmail.com</h2>
          </div>
        </div>
        <div class="reseau">
          <i class="fab fa-facebook"></i>
          <i class="fab fa-instagram-square"></i>
          <i class="fab fa-linkedin"></i>
          <i class="fab fa-twitter-square"></i>
        </div>
      </div>

      <div class="footTwo">
        <h1 style="color: white;">Menu</h1>
        <div class="navigateur">
          <ul class="navy">
            @if (Session::has('patient'))
                    @if (Session::get('patient')->statut === "users")
                        <li class="nav"><a href="/" class="nav-link">Accueil</a></li>
                        <li class="nav"><a href="{{route('soin-view')}}" class="nav-link">Nos Soins</a></li>
                        <li class="nav"><a href="{{route('profile')}}" class="nav-link">Profile</a></li>
                        @else
                        <li class="nav"><a href="/" class="nav-link">Accueil</a></li>
                        <li class="nav"><a href="{{route('soin-view')}}" class="nav-link">Nos Soins</a></li>
                        <li class="nav"><a href="{{route('contact-view')}}" class="nav-link">Contact</a></li>
                    @endif
                    @else
                    <li class="nav"><a href="/" class="nav-link">Accueil</a></li>
                    <li class="nav"><a href="{{route('soin-view')}}" class="nav-link">Nos Soins</a></li>
                    <li class="nav"><a href="{{route('contact-view')}}" class="nav-link">Contact</a></li>
                    @endif
        </ul>
        </div>
      </div>
      <div class="footFr">
        <form action="">
          <h1 style="color: white;">Nous contacter</h1>
          <input type="text" placeholder="Email" name="email">
          <textarea placeholder="Message" name="content">
          </textarea>
          <button>Envoyer</button>
        </form>
      </div>
      <div class="newInsert">
        <div class="partmg1">
            <div class="partmg2">
                <img src="{{asset('image/—Pngtree—dental logo designcreative dentist clinic_5570974.png')}}" alt="">
            </div>

        </div>
        <h1 class="log">Mon Cabinet <br> dentaire</h1>
      </div>
    </div>
    <div class="contfoot" >
      <h1>© Copyright 2024 <a href="">ProjetFinal</a> | Site réalisé par <a href="">Ramahery Oninjatovo</a></h1>
    </div>
  </footer>


