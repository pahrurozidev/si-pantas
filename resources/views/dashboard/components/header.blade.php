<header class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0 border-bottom dashboard">
    <a class="navbar-brand col-md-3 bg-transparent col-lg-2 me-0 px-3" href="#">DASHBOARD</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav border-start">
        <div class="nav-item text-nowrap">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="nav-link px-3 bg-light border-0"><i class="bi bi-box-arrow-right"></i><span
                        class="ms-2">Keluar</span></button>
            </form>
        </div>
    </div>
</header>
