<nav class="navbar navbar-dark  navbar-expand-lg p-xl-1 fixed-top" style="background-color: #336699;">
    <div class="container-fluid p-sm-1">
        <a class="navbar-brand" href="{{ route('index') }}">Biuro pośrednictwa pracy <img
                src="{{ asset('storage/img/icon.png') }}" class="img-fluid" alt="Responsive image"
                style="width: 4vh;"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-auto" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Strona głowna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}#oferty">Oferty pracy</a>
                </li>
                @if (Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Panel administratora
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('create.offer') }}">Dodaj oferte</a></li>
                            <li><a class="dropdown-item" href="{{ route('all.offers') }}">Spis Ofert</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Wyloguj</a></li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Zaloguj się</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Kontakt</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
