@extends('layouts.master')
@section('content')
        <!-- section 1 -->
        <section class="sectOcup">
            <img src="{{asset('img/photol.jpg')}}" alt="">
            <div class="backCol"></div>
            <h1>{{$service->titre}}</h1>
          </section>
          <!-- fin du section -->
          <!-- section 2 details -->
          <section class="sectDetail">
              <div class="contDetail-1">
                  <div class="partOne">
                      <h2>{{$service->titre}}</h2>
                      <p>{{$service->contenu}}</p>
                      <h2><i class="fas fa-money-bill-1-wave" style="margin-right: 12px;"></i>{{$service->tarifs}}</h2>
                        <div class="prtone">
                            <img src="/storage/ImageService/{{$service->image}}" alt="">
                            {{-- <source src="{{asset('image/Détartrage.mp4')}}" type="video/mp4  " ></source> --}}
                        </div>
                      <a class="butn" href="{{Route('soin-view')}}">
                        <i class="fas fa-left-long"></i>
                        Retour
                      </a>
                  </div>
                  <div class="partTwo">
                      <img src="{{asset('img/soinprof.jpg')}}" alt="">
                  </div>

              </div>

          </section>

          <!-- fin section -->
    @endsection
