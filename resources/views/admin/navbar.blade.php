<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper" style="margin-top: 1rem;">
        <a class="sidebar-brand brand-logo"><img src="/assets/images/acafe-logo-no-bg.png" alt="logo"
                style="width: 100px; height: 50px;" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item nav-category">
            <a class="nav-link-title" href="{{ url('/redirects') }}"
                style="text-decoration: none; color:#6c6c6c; margin-bottom:10px">Navigation</a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/users') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-security"></i>
                </span>
                <span class="menu-title">Users</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/foodmenu') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-table-large"></i>
                </span>
                <span class="menu-title">Food Menu</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/viewchef') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">Chefs</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/viewreservation') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-chart-bar"></i>
                </span>
                <span class="menu-title">Reservation</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/orders') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Orders</span>
            </a>
        </li>
    </ul>
</nav>
