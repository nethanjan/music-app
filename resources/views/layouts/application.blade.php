<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name', 'Barking Owl') }}</title>
    <link
      rel="shortcut icon"
      type="image/png"
      href="https://animaproject.s3.amazonaws.com/home/favicon.png"
    />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="css/auth.min.css" />
  </head>

  @yield('content')
  
</html>
