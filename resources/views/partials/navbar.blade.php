<header>
    <nav id='hype-custom-nav'
        class="fixed-header container d-flex margin-x-auto rounded-2 align-items-center justify-content-between">
        <div class="d-flex">
            <div class="img-container py-1">
                <img class="img-fluid" src="" alt="logo">
            </div>
            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row  align-items-center gap-5">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">{{ __('Home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/projects') }}">{{ __('All Projects') }}</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="user-account gap-3 d-flex fs-3 align-self-stretch align-items-end">
            <div id='hype-nav-search-button' class="icon-container rounded-top-2 order-0" role="button">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div id='hype-nav-login-button'
                class="icon-container rounded-top-2 d-flex flex-column @auth justify-content-start @endauth order-2"
                role="button">
                <i class="fa-solid fa-user"></i>
                @Auth
                    <p class="fs-6">{{ \App\Functions\Helpers::getInitialsFromWords(Auth::user()->name) }}</p>
                @endauth
            </div>
            <div id='hype-nav-kebab-button' class="icon-container rounded-top-2 d-lg-none order-1" role="button">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div id='hype-nav-search-bar-input'
                class="search-bar-input bar-input active-color rounded-bottom-2 position-absolute container d-none ">
                <form class="d-flex p-3" role="search">
                    <input class="form-control me-4 bg-dark-subtle" type="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-danger btn-mine text-white hover-size" type="submit">Search</button>
                </form>
            </div>
            <div id='hype-nav-kebab-menu'
                class=" bar-input active-color rounded-bottom-2 position-absolute container d-none ">
                <div class="w-100 d-flex align-content-center justify-content-center p-3">
                    <ul class="fs-6 w-100 text-decoration-none list-unstyled text-center gap-2 m-0">
                        <li class="py-1 border-bottom border-dark border-1 ">
                            <a class="nav-link" href="{{ url('/') }}">{{ __('Home') }}</a>
                        </li>
                        <li class="py-1 border-bottom border-dark border-1"> <a class="nav-link"
                                href="{{ url('/projects') }}">{{ __('All Projects') }}</a>
                        </li>
                    </ul>

                </div>
            </div>
            <div id='hype-nav-login-bar-input'
                class="bar-input active-color rounded-bottom-2 position-absolute container d-flex p-0 d-none ">
                @guest
                    <div class="singup-container w-50 p-3 border-end border-dark border-2">
                        @include('auth.register_custom')
                    </div>
                    @if (Route::has('register'))
                        <div class="login-container w-50 p-3 m-1">
                            @include('auth.login_custom')
                        </div>
                    @endif
                @else
                    <div class="w-100 d-flex align-content-center justify-content-center p-3">
                        <ul class="fs-6 w-100 text-decoration-none list-unstyled text-center gap-2 m-0">
                            <li class="py-1 border-bottom border-dark border-1 ">
                                <a class="dropdown-item" href="{{ url('admin') }}">{{ __('Dashboard') }}</a>
                            </li>
                            <li class="py-1 border-bottom border-dark border-1"> <a class="dropdown-item"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>

                    </div>
                @endguest
            </div>
        </div>
    </nav>
</header>
