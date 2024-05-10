

@extends('layouts.master')
@section('content')
<!-- section inscription -->
<section class="partInscrit">

    @if (Session::has('error'))
    <div class="afferror" type="button">

        <p class="text-danger">{{ Session::get('error') }}</p>
    </div>
    @endif
    @if ($errors)
    {{-- <div class="afferror" type="button"> --}}
    @foreach ($errors->all() as $item)

        <p>{{ $item }}</p>

    @endforeach
{{-- </div> --}}
  @endif


    <div class="InscritCont">
      <h1 class="act-0">Inscrivez-vous ici</h1>

      <form method="POST" action="{{Route('addPatient')}}" enctype="multipart/form-data">
        @csrf
        <input type="text" placeholder="Nom de famille" name="nom">
        <input type="text" placeholder="Prenom" name="prenom">
        <input type="text" placeholder="Contact" name="contact">
        <input type="text" placeholder="Email" name="email">
        <input type="password" placeholder="Mot de passe" name="password">
        <input type="password" placeholder="Confirmer le mot de passe" name="confpwd">
        <input type="text" placeholder="Profession" name="profession">
        <input type="file" name="image" id="image">
        <button>Inscivez</button>
      </form>
      <div class="connect vald ">
        <h1 class="act">connectez-vous</h1>

        <form action="{{route('connecter')}}" method="POST">
            @csrf
          <input type="text" placeholder="Email" name="email">
          <input type="password" placeholder="Mot de passe" name="password">
          <button>Connexion</button>
        </form>
        <div class="retour">
            <h1 class="act-2">Inscivez-vous</h1>
        </div>
      </div>
    </div>
  </section>
<!-- Fin inscription -->
@endsection
