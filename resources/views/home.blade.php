<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Movie DB</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
<h1>Welcome in your Movies DB!</h1>

<div class="container py-3">
<div class="row justify-content-center">
    @forelse ($movies as $movie)
    <div class="col-3">
        <div class="card">
            <img src="{{$movie->image}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$movie->title}}</h5>
              <p class="card-text">{{$movie->original_title}}</p>
              <p class="card-text">{{$movie->vote}}</p>
            </div>
          </div>
    </div>
    @empty
        <p>No movies found!</p>
    @endforelse
    
</div>
</div>
</body>

</html>
