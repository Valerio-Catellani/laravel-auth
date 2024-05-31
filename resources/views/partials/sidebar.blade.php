<nav id='sidebar' class=" navbar-dark">
    <a href="/" class="nav-link text-white d-flex p-3">
        <div class="logo-img-container d-flex align-items-center">
            <img class="img-fluid hype-color-invert" src={{ asset('images/portfolio-logo.png') }} alt="logo">
        </div>
        <h2 class="p-3">Portfolio </h2>
    </a>
    <ul class="nav flex-column">
        <li class="nav-item {{ Route::currentRouteName() === 'admin.dashboard' ? 'active' : '' }}">
            <a class="nav-link text-white " aria-current="page" href="{{ route('admin.dashboard') }}"><i
                    class="fa-solid fa-home fs-4 pe-3"></i>Home</a>
        </li>
        <li
            class="nav-item {{ Route::currentRouteName() === 'admin.projects.index' || Route::currentRouteName() === 'admin.projects.create' ? 'active' : '' }}">
            <a class="nav-link text-white " aria-current="page" href="{{ route('admin.projects.index') }}"><i
                    class="fa-solid fa-book-open fs-4 pe-3"></i>Projects</a>
        </li>
    </ul>
</nav>
