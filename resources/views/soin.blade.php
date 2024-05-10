
@extends('layouts.master')
@section('content')
<!-- premiere section -->

<section class="sectionOne">
    <div class="slogan">
      <h1>Les soins disponible</h1>
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
{{-- section test --}}

{{-- <div class="sectionTest">
    @foreach ($service as $service )
    <div class="care">
        <img src="/storage/ImageService/{{$service->image}}" alt="">
        <div class="apros">
            <h1>{{$service->titre}}</h1>
            <a href="{{Route('detail',['id'=>$service->id])}}" class="btn-soin"><i class="fas fa-bookmark"></i>Decouvrire</a>
        </div>
    </div>
    @endforeach
</div> --}}


{{-- section test --}}
  <!-- soinsect-1 -->
  <section class="soinSect-1">
    <!-- <div class="contSoin-1"></div> -->
    @foreach ($service as $service )
    <table>

      <tr>
        <th class="barPht">
          <img src="/storage/ImageService/{{$service->image}}" alt="">
        </th>
        <th>
          <h1>{{$service->titre}}</h1>
          <p>{{$service->description}}</p>
            <a href="{{Route('detail',['id'=>$service->id])}}" class="btn-soin">Decouvrir</a>
        </th>
      </tr>
      @endforeach
    </table>
  </section>

  <!-- fin soinsect-1 -->
@endsection
