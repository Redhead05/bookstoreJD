<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <title>BookStoreJD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .center {
            display: flex;
            justify-content: center;
            align-items: center;

        }
        .table-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="center">
        <div class="jumbotron">
            <h1 class="display-4">BookStoreJD</h1>
            <p class="lead">By Vincentius Wimaga Kresna Muda</p>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('famousAuthor') }}">Famous Author</a>
                    </li>
                    <li class="nav-item">
                      {{-- <a class="nav-link" href="{{ route('addRating') }}">Add Rating</a> --}}
                    </li>
                  </ul>
                </div>
              </nav>
            <hr class="my-2">

            
    @yield('content')
</body>
</html>