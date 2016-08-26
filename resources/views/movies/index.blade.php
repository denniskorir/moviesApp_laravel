<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movies</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="page-header">
     <h3> Movies</h3>
    </div>

    <ul>
        @foreach ($all_movies as $movie)
            <li class="list-group-item">
                 <h2 class="list-group-item-heading">{{$movie->title}}</h2>
                <p class="list-group-item-text">
                   <strong>Released on: </strong>{{date('F D,Y',strtotime($movie->released_on))}}
                   <br><strong>Rating: </strong> {{$movie->rating}}
                   <br><strong>Review: </strong> {{$movie->review}}
                </p>
            </li>
            @endforeach

    </ul>
 </div>
</body>
</html>