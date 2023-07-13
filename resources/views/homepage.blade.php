<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Movie cards</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <!-- Container generico -->
    <div class="container-fluid bg-secondary">

        <!-- Titolo -->
        <h1 class="text-center mb-3 text-dark">Movie cards</h1>

        <!-- Container delle cards -->
        <div class="container bg-secondary p-3 ">
            <div class="row g-3">
                @foreach ($movies as $movie)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <!-- Id -->
                        <div>
                            <b>id :</b> <span>{{$movie->id}}</span>
                        </div>

                        <!-- Title -->
                        <div>
                            <b>Title :</b><span>{{$movie->title}}</span>
                        </div>

                        <!-- Original Title -->
                        <div>
                            <b>Original Title :</b><span>{{$movie->original_title}}</span>
                        </div>

                        <!-- Nationality -->
                        <div>
                            <b>Nationality :</b><span>{{$movie->nationality}}</span>
                        </div>

                        <!-- Date -->
                        <div>
                            <b>Date :</b><span>{{$movie->date}}</span>
                        </div>

                        <!-- Vote -->
                        <div>
                            <b>Vote :</b><span>{{$movie->vote}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>



</body>

</html>