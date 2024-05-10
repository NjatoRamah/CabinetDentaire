@extends('administrateur.layoutsAdmin.adminMaster')
@section('contenu')
                {{-- liste patient --}}
                <div class="contenuParty patch2">
                    <div class="containtePatient">
                     <div class="listPatient">
                         <h1>Listes des patients</h1>
                         <table class="table">
                             <tr class="tete">
                                 <th>Photo</th>
                                 <th>Nom</th>
                                 <th>Prenom</th>
                                 <th>Profession</th>
                                 <th>Supprimer</th>
                             </tr>

                        @foreach ($patiente as $patient )
                        <tr>
                            <td><img src="/storage/ProfilePatient/{{$patient->image}}" alt=""></td>
                            <td>{{$patient->nom}}</td>
                            <td>{{$patient->prenom}}</td>
                            <td>{{$patient->profession}}</td>
                            <td class="sectOpt">

                                <div class="opt">
                                    <a class="fas fa-x" href="{{route('supprePatient',['id'=>$patient->id])}}"></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    

                         </table>
                     </div>
                    </div>
                 </div>
                 {{-- fin liste patient --}}

@endsection
