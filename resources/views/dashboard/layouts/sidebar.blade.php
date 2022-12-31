<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                <span data-feather="home" class="align-text-bottom"></span>
                Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                <span data-feather="file-text" class="align-text-bottom"></span>
                My Posts
                </a>
            </li>
            <hr class="mx-3">
            <li class="nav-item">
                <a class="nav-link" href="/posts">
                <span data-feather="list" class="align-text-bottom"></span>
                See Posts
                </a>
            </li>
        </ul>
    </div>
</nav>