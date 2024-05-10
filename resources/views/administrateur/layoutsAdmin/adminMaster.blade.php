<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('sassAdmin/style.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="contenaire">
        @include('administrateur.layoutsAdmin.aside')
        @include('administrateur.layoutsAdmin.navbar')
        @yield('contenu')









    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
