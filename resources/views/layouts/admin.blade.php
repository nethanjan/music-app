<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=1440, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'User Management System') }}</title>

    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
    <link src="{{ asset('css/app.js') }}" defere/>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    

  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
    <div class="container">
    <a class="navbar-brand" href="/admin">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="/admin/users">Users</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/songs">Songs</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/songs">Instruments</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/songs">Moods</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/songs">Energy Levels</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/songs">Genre</a>
        </li>
        </ul>
    </div>
    </div>
    </nav>


    <main class="container">
        @yield('content')
    </main>
  </body>
</html>