@foreach ($patient as $patient )
                    <div class="patientBlock">
                        <div class="pdp">
                            <img src="/storage/ProfilePatient/{{$patient->image}}" alt="">
                        </div>
                        <a href="{{route('conversation.show' ,$patient ->id)}}" class="nom">{{$patient->nom}} {{$patient->prenom}}</a>
                    </div>
@endforeach
