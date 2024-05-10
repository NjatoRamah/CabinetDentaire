@extends('administrateur.layoutsAdmin.adminMaster')
@section('contenu')
 <!--Service  -->
 <div class="contenuParty patch1">
    <div class="containteServ">
        @if (Session::has('error'))
        <div class="boxErr">
            <h1>{{Session::get('error')}}</h1>
        </div>
        @endif
        <div class="modificationSoin">
            <div class="ajoutSoin">
                <div class="barAjout">
                    <h1>Ajouter un service</h1>
                </div>
                <form action="{{route('addService')}}"  class="formAjout" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input placeholder="Titre" type="text" name="titre">
                    <input placeholder="Description" type="text" name="description">
                    <textarea name="contenu" id="" cols="112" rows="10" placeholder="Contenu du soin"></textarea>
                    <input placeholder="Tarif" type="text" name="tarif">
                    <input type="file" name="image">
                    <button>Ajouter</button>
                </form>
            </div>

        </div>

       <div class="listeSoin">
        @if (Session::has('id'))
        <div class="supprBox">
            <a href="" class="fas fa-xmark"></a>
            <div class="confirmSuppr">
                <i class="fas fa-triangle-exclamation"></i>
                <h1>Voullez vous supprimer <br> cette Service !?</h1>
                <a class="ok" href="{{route('suppreTwo',['id'=>Session::get('id')])}}">Oui</a>

            </div>
        </div>
        @endif
           <h1>Les services</h1>
           <table class="table">
               <tr class="tete">
                   <th>Photo</th>
                   <th>Titre</th>
                   <th>details</th>
                   <th>Tarif</th>
                   <th>Option</th>
               </tr>

               @foreach ($service as $serv)
               <tr>
                <td><img src="/storage/ImageService/{{$serv->image}}" alt=""></td>
                <td>{{$serv->titre}}</td>
                <td>{{$serv->description}}</td>
                <td>{{$serv->tarifs}}</td>
                <td class="sectOpt">
                    <div class="sectOpt">
                        <div class="opt ONE">
                            <a class="fa fa-edit" href="{{route('modifier',['id'=>$serv->id])}}"></a>
                        </div>
                        <div class="opt TWO">
                            <a class="fas fa-xmark" href="{{route('suppre',['id'=>$serv->id])}}"></a>
                        </div>
                    </div>

                </td>
            </tr>
               @endforeach


           </table>

       </div>


    </div>

</div>
<!-- fin service -->

@endsection
