<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('sass/style.css')}}">
    <link href="{{asset('unpkg.com/aos@2.3.1/dist/aos.css')}}" rel="stylesheet">
{{-- slide  --}}
<link rel="stylesheet" type="text/css" href="{{asset('slideOne/engine1/style.css')}}" />
<script type="text/javascript" src="{{asset('slideOne/engine1/jquery.js')}}"></script>
 {{-- slide --}}
 <script src="{{asset('path/htmx.min.js')}}"></script>
    <title>Document</title>
</head>
<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')

    <script src="{{asset('js/anim.js')}}"></script>
    <script src="{{asset('Js/loginAnim.js')}}"></script>
    <script src="{{asset('Js/onePageProfil.js')}}"></script>
    <script src="{{asset('unpkg.com/aos@2.3.1/dist/aos.js')}}"></script>

</body>
<script>
    AOS.init();
</script>
</html>
