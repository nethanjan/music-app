<div class="nav-bar screen">
    <div class="nav-bar-C61RwL"></div>
    <div class="home-C61RwL valign-text-middle">Home</div>
    <div class="profile-C61RwL valign-text-middle"><a href='/profile'>Profile</a></div>
    <div class="logout-C61RwL valign-text-middle">
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <div class="header-logo-C61RwL">
        <img class="logo-3yjq2X" src="img/logo@2x.svg" />
        <img class="barking-owl-3yjq2X" src="img/barking-owl@2x.svg" />
    </div>
</div>