<nav class="navbar navbar-expand-lg" style="background-color: #379237">
    <div class="container">
        <a class="navbar-brand fw-bold text-light" href="/">
            <img src="{{ url('icons/Kampung-Duren.png') }}" style="height: 32px; alt="Logo" />
            Kampung Durian
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse container" id="navbarNav">
            <ul class="navbar-nav nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link text-light {{ $title === '/' ? 'active' : '' }}" aria-current="page"
                        href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light {{ $title === 'Toko' ? 'active' : '' }}" href="/toko">Toko</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light {{ $title === 'Penginapan' ? 'active' : '' }}"
                        href="/penginapan">Penginapan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light {{ $title === 'Tentang-Kami' ? 'active' : '' }}"
                        href="/tentang-kami">Tentang Kami</a>
                </li>
            </ul>

            <ul class="navbar-nav nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Halo, {{ auth()->user()->nama }}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/admin/dashboard">
                                    <i class="bi bi-speedometer"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <form action="/logout" method="POST">
                                @csrf
                                <li>
                                    <button type="submit" class="dropdown-item">
                                        <i class="bi bi-box-arrow-in-left"></i>
                                        Logout
                                    </button>
                                </li>
                            </form>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/login">
                            <i class="bi bi-box-arrow-in-right"></i>
                            Login
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
