<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"/>
    
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'User Management System') }}</title>

    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" />
    <!-- <script src="/js/app.js" defere></script> -->
    <script src="{{ asset('js/admin.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    

  </head>
  <body id="page-top">

  <div id="wrapper">

    @if(Request::path() != 'admin')
      @include('partials.sidebar')
    @endif

    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">

            @include('partials.adminNav')

            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
  </div>

<script>
  $(document).ready(function(){

    $('#sidebarToggleTop').click(function(){
      $('#accordionSidebar').toggle();
    });
    // hiding accordian icon in dashboard page
    if(window.location.pathname == '/admin') {
      $('#sidebarToggleTop').hide();
    }

  });
</script>

  </body>
</html>