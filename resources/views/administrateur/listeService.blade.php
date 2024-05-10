@foreach ($service as $serv)
<tr>
 <td><img src="/storage/ImageService/{{$serv->image}}" alt=""></td>
 <td>{{$serv->titre}}</td>
 <td>{{$serv->description}}</td>
 <td>{{$serv->tarifs}}</td>
 <td class="sectOpt">
     <div class="sectOpt">
         <div class="opt ONE">
             {{-- <a class="fa fa-edit" href="{{route('modifier',['id'=>$serv->id])}}"></a> --}}
         </div>
         <div class="opt TWO">
             {{-- <a class="fas fa-xmark" href="{{route('suppre',['id'=>$serv->id])}}"></a> --}}
         </div>
     </div>

 </td>
</tr>
@endforeach
