<nav class="navbar navbar-expand-lg my-auto">
    <div class="container-fluid d-flex flex-column gap-5 align-items-end">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarAdmin"
            aria-controls="navbarAdmin" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarAdmin">
            <ul class="navbar-nav mr-auto">
                <!-- Notifiche -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fs-6" href="#" id="notificationsDropdown"
                        role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        data-bs-auto-close="false">
                        <i class="fa-solid fa-bell fs-3 position-relative hype-text-shadow"> <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger small fs-6">
                                5
                            </span></i> Notifiche
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationsDropdown">
                        <a class="dropdown-item" href="#">Nuova notifica</a>
                        <a class="dropdown-item" href="#">Notifica 1</a>
                        <a class="dropdown-item" href="#">Notifica 2</a>
                        <a class="dropdown-item" href="#">Notifica 3</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Visualizza tutte le notifiche</a>
                    </div>
                </li>

                <!-- Messaggi -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fs-6" href="#" id="messagesDropdown"
                        role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        data-bs-auto-close="false">
                        <i class="fa-solid fa-envelope fs-3 position-relative hype-text-shadow"><span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger small fs-6">
                                2
                            </span></i> Messaggi
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                        <a class="dropdown-item" href="#">Nuovo messaggio</a>
                        <a class="dropdown-item" href="#">Messaggio 1</a>
                        <a class="dropdown-item" href="#">Messaggio 2</a>
                        <a class="dropdown-item" href="#">Messaggio 3</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Visualizza tutti i messaggi</a>
                    </div>
                </li>
            </ul>

            <!-- Link Profilo -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white fs-6" href="#"><i
                            class="fa-solid fa-user fs-3 position-relative hype-text-shadow"></i> Profilo</a>
                </li>
                <!-- Pulsante Logout -->
                <li class="nav-item"> <a class="nav-link text-white fs-6 " href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();"><i
                            class="fas fa-sign-out-alt fs-3 position-relative hype-text-shadow"></i>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
