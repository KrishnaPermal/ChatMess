<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ChatMess</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>

<body>

    <!-- NAVBAR -->
    @include('partials.navbar')

    <main {{isset($id)? "id=".$id : ''}}>
        <!-- CONTENT -->
        @yield('content')
    </main>
    <!-- FOOTER -->
    @include('partials.footer')


    <!-- SCRIPT -->
   
    <script src="{{asset('js/app.js')}}"></script>

</html>