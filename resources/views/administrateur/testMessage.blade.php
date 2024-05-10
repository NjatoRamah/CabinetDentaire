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

                <h1 class="afftest">Veuillez selectioner un message</h1>


            </div>

        </div>
    </div>
    </div>
    <!-- fin message -->

@endsection
