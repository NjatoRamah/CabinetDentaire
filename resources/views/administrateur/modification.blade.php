@extends('administrateur.layoutsAdmin.adminMaster')
@section('contenu')
 <!--Service  -->
 <div class="contenuParty patch1">
    <div class="containteServ">
       <div class="modificationSoin">
          <div class="modifSoin">
            @if ($errors)
            @foreach ($errors->all() as $item)
                <p>{{ $item }}</p>
            @endforeach
          @endif
               <div class="barModif">
                   <h1>Modification</h1>
               </div>

               <form method="POST"  action="{{route('update')}}"  enctype="multipart/form-data" class="formModif">
                @csrf

                    <input type="hidden" name="id" style="display: none" value="{{$modife->id}}">
                    <input placeholder="titre" name="titre" type="text" value="{{$modife->titre}}">
                    <input placeholder="description" name="description" type="text" value="{{$modife->description}}">
                    <input placeholder="tarif" name="tarif" type="text" value="{{$modife->tarifs}}">

                    <div class="placeImg" style="background: url(/storage/ImageService/{{$modife->image}}); background-size:cover;">

                    </div>
                    <input type="file" name="image" value="{{$modife->image}}">

                <button>Modifier</button>
               </form>
           </div>
       </div>
    </div>

</div>
<!-- fin service -->

@endsection
