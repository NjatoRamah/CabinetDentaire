@extends('layouts.master')
@section('content')
    <!-- section rendez vous -->
    <section class="sectRndv">
        @if (Session::has('error'))
        <div class="afferror" type="button">

        <p class="text-danger">{{ Session::get('error') }}</p>
        </div>
         @endif
        <div class="formulaire">
            <div class="formImg">
                <img src="img/rdv.jpg" alt="">
            </div>
            <form action="{{route('soumission')}}" method="POST">
                @csrf
                <div class="tlt"><h1>Prendre un rendez-vous</h1></div>

                <h1 class="prix" style="font-size:1em; color:rgb(58, 57, 57)">Consultation + RDV 30 000 Ariary</h1>
                <div class="inputForm">


                    <input type="text" placeholder="Nom de famille" name="nom" id="nom">
                    <input type="text" placeholder="Prenom" name="prenom" id="prenom">
                    {{-- <input type="text" placeholder="Sexe" name="sexe"> --}}
                    <select name="sexe" id="">
                        <option value="Feminin">Feminin</option>
                        <option value="Masculin">Masculin</option>
                    </select>

                    <select name="service" id="">
                        @foreach ( $service as $services)
                        <option  value="{{$services->id}}">{{$services->titre}}</option>
                        @endforeach

                    </select>
                    <input type="date" name="date">
                    </div>
                <div class="boutton">
                    <button type="submit" id='soum' style="color: white;font-size:1.0em;">Soumettre</button>
                </div>
                <a href="" id='paypal-button'></a>
            </form>
{{-- api --}}
            <div>
                <script src="https://www.paypalobjects.com/api/checkout.js" ></script>
                <script>



                  paypal.Button.render({
                          // Manamboatra ny environnement
                          env: 'sandbox',
                          client: {
                              sandbox: 'AWQptJMfI6QdthzVLDG0Dc9xaU7cTP3eELM7kJA19WQTe6ZDXPrqD8bNRS_1Hl_hkx23rB3RNvCRhPOo'

                          },
                          locale: 'fr_FR',
                          style: {
                              size: 'small',
                              color: 'blue',
                              shape: 'pill',
                          },
                          // Miketrika ny paiement
                          payment: function (data, actions) {
                              return actions.payment.create({
                                  transactions: [{
                                      amount: {
                                          total:30000,
                                          currency: 'USD'
                                      }
                                  }]
                          });
                          },
                          // Miexecuter ny paiement
                          onAuthorize: function (data, actions) {
                              return actions.payment.execute()
                              .then(function () {
                                  // Mampiseho ny mess de confirm anle mpividy
                                  //window.alert('Merci pour votre achat!');

                                  // Mirediriger ny page de paiement
                                  window.location = "success/";
                              })
                              .catch(function (error) {
                                  window.location = {{route('soumission')}};
                              });
                          }
                      }, '#paypal-button');



                  function cachebtn() {
                        let nom = document.querySelector('#nom').value
                        let prenom = document.querySelector('#prenom').value
                        let btn = document.querySelector('#soum')
                        let btnpaypal = document.querySelector('#paypal-button')


                        if (nom =='' && prenom =='') {
                            btn.style='display:none;'
                            btnpaypal.style='display:none;'

                        }else{
                            btn.style='display:block;'
                            btnpaypal.style='display:block;'
                        }


                  }
                  setInterval(cachebtn,100)
                </script>
            </div>
        </div>
    </section>

    <!-- fin rendez vous -->
    @endsection
