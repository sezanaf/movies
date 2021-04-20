<html>

<head>
  <title>Movies</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <style>
    body {

      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>

<body>
  
  <div class="container">

  <h2>Movies</h2>
<ul>
  @foreach($movies as $movie)
  <li>{{$movie->title}}</li>
  @endforeach
</ul>
  </div>
</body>

</html>