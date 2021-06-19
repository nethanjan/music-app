<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
    <div class="sidebar-brand-icon">
        <i class="fas fa-user-cog"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Barking Owl</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="/admin">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    User Management
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item {{ Request::is('admin/users*') ? 'active' : '' }}">
    <a class="nav-link collapsed" href="/admin/users">
        <i class="fas fa-fw fa-user"></i>
        <span>Users</span>
    </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Category Management
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item {{ Request::is('admin/songs*') ? 'active' : '' }}">
    <a class="nav-link collapsed" href="/admin/songs">
        <i class="fas fa-fw fa-music"></i>
        <span>Songs</span>
    </a>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item {{ Request::is('admin/genres*') ? 'active' : '' }}">
    <a class="nav-link" href="/admin/genres">
        <i class="fas fa-fw fa-compact-disc"></i>
        <span>Genre</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item {{ Request::is('admin/instruments*') ? 'active' : '' }}">
    <a class="nav-link" href="/admin/instruments">
        <i class="fas fa-fw fa-guitar"></i>
        <span>Instruments</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item {{ Request::is('admin/energy-levels*') ? 'active' : '' }}">
    <a class="nav-link" href="/admin/energy-levels">
        <i class="fas fa-fw fa-battery-half"></i>
        <span>Energy Levels</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item {{ Request::is('admin/moods*') ? 'active' : '' }}">
    <a class="nav-link" href="/admin/moods">
        <i class="fas fa-fw fa-theater-masks"></i>
        <span>Moods</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

</ul>
<!-- End of Sidebar -->