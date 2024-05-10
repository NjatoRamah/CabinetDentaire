<!-- aside bar -->
<aside>
    <div class="adminPrf">
        <div class="admimg">
            <img src="/storage/ProfilePatient/{{Session::get('patient')->image}}" alt="">
        </div>
        <h2>{{Session::get('patient')->nom}}</h2> <br>
        <h2>{{Session::get('patient')->prenom}}</h2>
    </div>

    <div class="barNav">
        <ul class="navy">
            <a class="nav" href="{{route('admin')}}"><h4  class="nav-link">Dashbord</h4></a>
            <a class="nav" href="{{route('service')}}"><h4  class="nav-link">Service</h4></a>
            <a class="nav" href="{{route('patient')}}"><h4  class="nav-link">Patient</h4></a>
            <a class="nav" href="{{route('message')}}"><h4  class="nav-link">Message</h4></a>
            <a class="nav" href="{{route('coms')}}"><h4  class="nav-link">Commentaire</h4></a>
            <a class="nav"  href="{{route('contact')}}" ><h4 class="nav-link">FAQ</h4></a>
            <a class="nav" href="{{route('rendezVous_view')}}"><h4 class="nav-link">Rendez-vous</h4></li>


        </ul>
    </div>
</aside>
<!-- fin aside bar -->
