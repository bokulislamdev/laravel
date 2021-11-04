<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="container bg-success py-5">

            @guest
                <a class="btn btn-primary" href="{{ route('home') }}">login</a>
                <a class="btn btn-primary" href="{{ route('register') }}">registation</a>   
            @endguest

            @auth
                 <a  class="btn btn-primary" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endauth
        </div>


        <div class="container mt-5">
            <a class="btn btn-secondary d-block my-2" href="{{ route('multi.select') }}">ajex multi select</a>
        <a class="btn btn-secondary d-block my-2" href="{{ route('add.student') }}">add stude</a>
        <a class="btn btn-secondary d-block my-2" href="{{ route('index.mail') }}">send email</a>
        <a class="btn btn-secondary d-block my-2" href="{{ route('liveware.form') }}">liveware form</a>
        {{-- <a href="{{ route('exal.export') }}">exal export</a> --}}
        </div>
    </section>
    




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>