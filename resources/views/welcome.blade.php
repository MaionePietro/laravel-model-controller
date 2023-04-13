<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main class="d-flex vh-100 align-items-center">
        <div class="cards">
            @foreach ($movies as $movie)
            <div class="cardCustom">
                <div>
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <p class="card-text">{{$movie->date}}</p>
                    <p class="card-text"><small class="text-body-secondary">{{$movie->vote}}</small></p>
                </div>
            </div>
            @endforeach
        </div>
    </main>

</body>

</html>
