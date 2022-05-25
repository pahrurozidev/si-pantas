@extends('dashboard.layouts.main')

@section('content')
    <div class="container-fluid dashboard">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-transparent sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <h6
                            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Admin</span>
                            <a class="link-secondary" href="#" aria-label="Add a new report">
                                <span data-feather="plus-circle"></span>
                            </a>
                        </h6>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-clipboard-data"></i> <span class="ms-1">Informasi</span> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-person-lines-fill text-secondary"></i> <span class="ms-1">Data
                                    Warga</span> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-person"></i> <span class="ms-1">Profile</span> </a>
                        </li>
                    </ul>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Laporan</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-flag"></i> <span class="ms-1">Semua Laporan</span> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-archive"></i> <span class="ms-1">Arsip</span> </a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center px-3 mt-4 mb-1 keluar">
                        <i class="bi bi-box-arrow-right"></i><span class="ms-2">Keluar</span>
                    </div>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Data Bantuan Sosial</h1>
                </div>
                <div class="table-responsive-lg">
                    <a href="" class="btn btn-primary">Tambah Data</a>
                    <table class="table-bordered mt-3">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th scope="col" class="text-center p-2">No</th>
                                <th scope="col" class="text-center">Judul</th>
                                <th scope="col" class="text-center">Penulis</th>
                                <th scope="col" class="text-center">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-center">1</th>
                                <td class="p-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta
                                    fuga ullam explicabo.
                                </td>
                                <td class="p-2">Pahrurozi</td>
                                <td class="p-2">01/23/2022</td>
                            </tr>
                    </table>
                </div>
            </main>
        </div>
    </div>
@endsection
