    @extends('layouts.master')
    @section('content')
    <!-- section rendez vous -->
        <section class="contact">
            @if (Session::has('error'))
        <div class="afferror" type="button">
        <p class="text-danger">{{ Session::get('error') }}</p>
        </div>
         @endif
            <h1>Contacts</h1>
            <div class="contactainer">
              <form action="{{route('sendCont')}}" method="POST">
                @csrf
                <h4>Si vous avez des question</h4>
                <input type="text" placeholder="Email" name="email" id="">
                <input type="text" placeholder="Nom" name="nom" id="">
                <textarea name="content" placeholder="votre message" id=""></textarea>
                <button type="submit" style="color: white;font-size:1.2em;">Envoyer</button>
                <h2>Inscrivez-vous <a href="{{Route('inscription-view')}}">ici</a></h2>
            </form>
            </div>
            <div class="contaOne">
              <div class="blockOne">
                <i class="fas fa-phone"></i>
                <h2>+261 34 66 701 96 <br> <span>oramahery@gmail.com</span></h1>
              </div>
              <div class="blockOne">
                <i class="fas fa-location-dot"></i>
                <h2>AV xxx bis ter <br> <span>Atananarivo, Andoharanofotsy</span></h1>
              </div>
              <div class="blockOne">
                <i class="fas fa-clock"></i>
                <h2>Lundi - Vendredi : 8am - 5pm <br> <span>Fermé le week-end</span></h1>

              </div>
            </div>


        </section>

    <!-- fin rendez vous -->
@endsection
