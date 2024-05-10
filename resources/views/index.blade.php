@extends('layouts.master')
@section('content')
  <!-- premiere section -->
    <section class="sectionOne">
      <div class="slogan">
        <h1>Votre santé <br>notre priorité </h1>
      </div>
      <div class="pub">
        <div class="pubDate">
          <i class="fas fa-location-dot"></i><h1>Lot Av xxx Bis, Antananarivo</h1>
        </div>
        <div class="pubDate">
          <i class="fas fa-phone"></i><h1>+261 34 66 701 96</h1>
        </div>
      </div>
      <div class="desc">
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore placeat repellat deleniti assumenda quos cumque sint laboriosam necessitatibus unde, atque odit fugit distinctio consequatur doloribus, dignissimos veniam sapiente? Incidunt, temporibus?</h1>
       @if (Session::has('patient'))
            @if (Session::get('patient')->statut === "users")
            <a class="btn-1" href="{{Route('rdv')}}" >Rendez-vous</a>
            @endif
        @else
        <a class="btn-1" href="{{Route('inscription-view')}}" >Inscrivez-vous</a>
        @endif
      </div>
    </section>
    <!-- fin du section -->
    <!-- deuxieme section -->
    <section class="sectionTwo">
      <div   class="STwoOne">
        <div class="descTone">
        <h1>Mon Cabinet</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, minus facere distinctio dolor, explicabo blanditiis eius quisquam molestiae voluptatem praesentium deleniti repudiandae aliquid. Rem iste voluptatum enim non sunt consectetur.</p>
        <div class="descTwo">
          <div class="descFre">
            <i class="fas fa-tooth"></i><h2>Blanchiment dentaire et détartrage </h2>
          </div>
          <div class="descFre">
            <i class="fas fa-tooth"></i><h2>
              Appareils et prothèses dentaires </h2>
          </div>
          <div class="descFre">
            <i class="fas fa-tooth"></i><h2>
              Invisalign </h2>
          </div>
        </div>
        </div>
        <div class="descTone img">
            <div class="prodImg">
                <img src="img/dokotera.png" alt="">
            </div>

        </div>
      </div>
    {{-- vue anle slide  --}}
      <div class="posImg" data-aos="fade-up"
      data-aos-duration="900" >
        {{-- <img src="img/poto1.jpg" alt=""> --}}

<div id="wowslider-container1">
    <div class="ws_images"><ul>
            <li><img src="{{asset('image/Marceau_-11-1024x512.jpg')}}" alt="82108708_1279368025583013_5120357236018774016_n" title="82108708_1279368025583013_5120357236018774016_n" id="wows1_0"/></li>
            <li><img src="{{asset('image/Marceau_-12.jpg')}}" alt="css image gallery" title="197527420_1707964106056734_4126169857762082234_n" id="wows1_1"/></li>
            <li><img src="{{asset('image/Marceau_-14-1024x512.jpg')}}" alt="exemple" title="exemple" id="wows1_2"/></li>

        </ul></div>
    <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery slider</a> by WOWSlider.com v9.0</div>
    <div class="ws_shadow"></div>
    </div>
    {{-- <script type="text/javascript" src="{{asset('slideOne/engine1/wowslider.js')}}"></script> --}}
    <script type="text/javascript" src="{{asset('slideOne/engine1/script.js')}}"></script>
      </div>
      {{-- vue anle slide  --}}
    </section>
    <!-- fin section -->
    <!-- section troi  -->
    <section class="sectionF">

      <div class="titreSoin" data-aos="fade-up"
      data-aos-duration="900">
        <div class="iconD">
          <i class="fas fa-tooth"></i>
        </div>
        <h1>Nos Soins</h1>
      </div>
      <div class="descSoin">
          <div class="soinImg"></div>
          <div class="soinDetOne">
              <div class="iconD">
              <i class="fas fa-tooth"></i>
              </div>
              <h1>Implant dentaire</h1>
              <p>Ils permettent de remplacer une ou plusieurs dents manquantes sans abimer les adjacentes, restaurent l esthétique et la fonction masticatoire. </p>
          </div>
          <div class="soinDetTwo">
            <div class="iconD">
              <i class="fas fa-teeth-open"></i>
            </div>
            <h1>Prothèses dentaires </h1>
            <p>Ils permettent de remplacer une ou plusieurs dents manquantes sans abimer les adjacentes, restaurent l esthétique et la fonction masticatoire. </p>
          </div>
          <a class="bout" href="{{Route('soin-view')}}"><i class="fas fa-eye" style="margin-right: 10px;font-size:1.5em;"></i>voir plus</a>

      </div>
    </section>
      <!-- fin section -->
      <!-- section 4 -->
    <section class="sectionFor">
      <div class="titrePatient">
        <h1>Notre équipe</h1>
      </div>
      {{-- slide des equipe --}}
      <div class="slidePatient">
        <div class="PatientContenaire doc" style="background-color: #6496eb;" data-aos="fade-down"
        data-aos-easing="ease"
        data-aos-duration="1000">
                <div class="profilPatient" >
                    <img src="img/prof1.jpg" alt="">
                </div>
                <div class="contenuPatient">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nam modi error aut consectetur impedit atque, excepturi voluptatibus quia provident perferendis ipsa autem magni voluptatem dolore! Praesentium maiores voluptas nam.</p>
                    <h1 style="text-align: center;">Ramah <br> Njato</h1>
                    <h2>Chirurgie dentiste</h2>
                </div>
        </div>

        <div class="PatientContenaire" data-aos="fade-up"
        data-aos-easing="ease"
        data-aos-duration="1000">
            <div class="profilPatient">
                <img src="{{asset('image/team-3.jpg')}}" alt="">
            </div>
            <div class="contenuPatient">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nam modi error aut consectetur impedit atque, excepturi voluptatibus quia provident perferendis ipsa autem magni voluptatem dolore! Praesentium maiores voluptas nam.</p>
                <h1 style="text-align: center;">Andrianinjatovo <br> </h1>
                <h2>Assitante du cabinet</h2>
            </div>
    </div>
      </div>


      {{-- slide des equipe --}}

    </section>
    <!-- fin du section -->
@endsection

