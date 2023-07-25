<nav class="p-3 text-white bg-dark" style="width: 280px; height: 697px">
    <a href="/admin/dashboard" class="p-3 text-white text-decoration-none">
        <span class="fs-5">Dashboard Admin</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/admin/dashboard" class="nav-link text-white" aria-current="page">
                <i class="bi bi-speedometer"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="/admin/posts" class="nav-link text-white">
                <i class="bi bi-file-post"></i>
                Post
            </a>
        </li>
        <li>
            <a href="/admin/toko" class="nav-link text-white">
                <i class="bi bi-cart-plus"></i>
                Toko
            </a>
        </li>
        <li>
            <a href="/admin/penginapan" class="nav-link text-white">
                <i class="bi bi-house-gear"></i>
                Homestay
            </a>
        </li>
        <li>
            <a href="/admin/fasilitas" class="nav-link text-white">
                <i class="bi bi-building-gear"></i>
                Fasilitas
            </a>
        </li>
    </ul>

    <hr>

    <ul class="nav nav-pills flex-column mb-auto">
        @auth
            <li>
                <form action="/admin/dashboard/logout" method="post">
                    @csrf
                    <button type="submit" class="nav-link text-white">
                        <i class="bi bi-box-arrow-in-left"></i>
                        Logout
                    </button>
                </form>
            </li>
        @endauth
    </ul>

</nav>
