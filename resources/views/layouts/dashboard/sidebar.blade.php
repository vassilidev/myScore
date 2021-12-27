<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">
            <div class="sidenav-menu-heading">Core</div>
            <a class="nav-link" href="tables.html">
                <div class="nav-link-icon"><i data-feather="filter"></i></div>
                Tables
            </a>
        </div>
    </div>
    <div class="sidenav-footer">
        <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle">Logged in as:</div>
            <div class="sidenav-footer-title">{{ Auth::user()->name }}</div>
        </div>
    </div>
</nav>
