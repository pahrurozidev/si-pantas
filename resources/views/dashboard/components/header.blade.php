<header class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0 border-bottom dashboard">
    <a class="navbar-brand col-md-3 bg-transparent col-lg-2 me-0 px-3" href="#">DASHBOARD</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav border-start">
        <div class="nav-item text-nowrap">
            <form action="/logout" method="POST" class="d-inline-block nav-link px-3 text-dark">
                @csrf
                <button type="submit" class="dropdown-item keluar"><i class="bi bi-box-arrow-right"></i><span
                        class="ms-2">Keluar</span></button>
            </form>
        </div>
    </div>
</header>

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-transparent sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">

            {{-- all role access --}}
            <div class="d-flex align-items-center px-3 mt-4 mb-1">
                <a href="/" class="text-decoration-none text-dark beranda">
                    <i class="bi bi-house"></i><span class="ms-2">Beranda</span>
                </a>
            </div>
            <li class="nav-item">
                <a class="nav-link" href="/dashboard/profile">
                    <i class="bi bi-clipboard-data"></i> <span class="ms-1">Profile</span> </a>
            </li>

            {{-- label role --}}
            @can('admin')
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Admin</span>
                    <a class="link-secondary" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
            @elsecan('desa')
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Administrasi Desa</span>
                    <a class="link-secondary" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
            @else
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Administrasi Warga</span>
                    <a class="link-secondary" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
            @endcan

            {{-- desa --}}
            @can('desa')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/desa/penerima') ? 'active' : '' }}" href="/dashboard/desa/penerima">
                        <i class="bi bi-person-check text-secondary"></i> <span class="ms-1">Data
                            Penerima</span> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/desa/history') ? 'active' : '' }}" href="/dashboard/desa/history">
                        <i class="bi bi-clock-history"></i> <span class="ms-1">History</span> </a>
                </li>
            @endcan

            {{-- warga --}}
            @can('warga')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/warga/laporan') ? 'active' : '' }}"
                        href="/dashboard/warga/laporan">
                        <i class="bi bi-flag"></i> <span class="ms-1">Laporan</span> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/warga/bantuan') ? 'active' : '' }}"
                        href="/dashboard/warga/bantuan">
                        <i class="bi bi-wallet2"></i> <span class="ms-1">Bantuan</span> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/warga/history') ? 'active' : '' }}"
                        href="/dashboard/warga/history">
                        <i class="bi bi-clock-history"></i> <span class="ms-1">History</span> </a>
                </li>
            @endcan

            {{-- admin --}}
            @can('admin')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/admin/informasi') ? 'active' : '' }}"
                        href="/dashboard/admin/informasi">
                        <i class="bi bi-clipboard-data"></i> <span class="ms-1">Informasi</span> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-person-lines-fill text-secondary"></i> <span class="ms-1">Data
                            Warga</span> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/admin/penerima') ? 'active' : '' }}"
                        href="/dashboard/admin/penerima">
                        <i class="bi bi-person-check text-secondary"></i> <span class="ms-1">Data
                            Penerima</span> </a>
                </li>
            @endcan
        </ul>
        @can('admin')
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Laporan</span>
                <a class="link-secondary" href="#" aria-label="Add a new report">
                    <span data-feather="plus-circle"></span>
                </a>
            </h6>
            <ul class="nav flex-column mb-2">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/admin/laporan') ? 'active' : '' }}"
                        href="/dashboard/admin/laporan">
                        <i class="bi bi-flag"></i> <span class="ms-1">Semua Laporan</span> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-archive"></i> <span class="ms-1">Arsip</span> </a>
                </li>
            </ul>
        @endcan
        <div class="d-flex align-items-center px-3 mt-4 mb-1 keluar">
            <form action="/logout" method="POST" class="d-inline-block nav-link px-3 text-dark">
                @csrf
                <button type="submit" class="dropdown-item keluar"><i class="bi bi-box-arrow-right"></i><span
                        class="ms-2">Keluar</span></button>
            </form>
        </div>
    </div>
</nav>
