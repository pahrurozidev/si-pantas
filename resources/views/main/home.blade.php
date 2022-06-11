@extends('layouts.main')

@section('content')
    <main style="margin: 55px auto 100px;">
        {{-- jumbotron --}}
        <section class="jumbotron">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/hero2.webp') }}" class="d-block w-100"
                            style="filter: brightness(70%); -webkit-filter: brightness(70%); object-fit: cover;" alt="..."
                            height="500">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="fs-1" style="line-height: 60px">Selamat Datang, Tingkatkan Integritas dan
                                Transparansi Setiap
                                Penyaluran
                                Bantuan Sosial</h5>
                            <p style="font-size: 20px;">Sipantas atau Sistem Informasi Pelaporan Bantuan Sosial adalah situs
                                web yang akan membantu
                                baik pemerintah maupun penerima bantuan untuk memantau penyaluran bantuan dana sosial yang
                                efektif dan user-friendly. </p>
                        </div>
                    </div>
                    @if (count($informasi))
                        <div class="carousel-item">
                            <img src="{{ asset('img/hero4.webp') }}" class="d-block w-100" alt="..." height="500"
                                style="filter: brightness(70%); -webkit-filter: brightness(70%); object-fit: cover;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="fs-3" style="line-height: 40px">
                                    <a href="/informasi/{{ $informasi[0]->slug }}"
                                        class="text-decoration-none text-white">{{ $informasi[0]->judul_informasi }}</a>
                                </h5>
                                <p style="font-size: 20px;">{{ substr($informasi[0]->deskripsi, 0, 300) }}...</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/hero5.webp') }}" class="d-block w-100" alt="..." height="500"
                                style="filter: brightness(70%); -webkit-filter: brightness(70%); object-fit: cover;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="fs-3" style="line-height: 40px">
                                    <a href="/informasi/{{ $informasi[1]->slug }}"
                                        class="text-decoration-none text-white">{{ $informasi[1]->judul_informasi }}</a>
                                </h5>
                                <p style="font-size: 20px;">{{ substr($informasi[1]->deskripsi, 0, 300) }}...</p>
                            </div>
                        </div>
                    @endif
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        {{-- fitur kami --}}
        <section class="container py-5" id="fitur" style="padding-top: 110px !important">
            <h1 class="text-center">Fitur Kami</h1>
            <p class="text-center">Tingkatkan kemudahan dalam penyaluran bantuan sosial dengan fitur kami</p>
            <div class="row mt-5 p-3 feature">
                <div class="text-center shadow rounded">
                    <img src="{{ asset('img/laporkan.webp') }}" alt="">
                    <h4>Laporkan</h4>
                    <p>Tingkatkan ketepatan bantuan sosial bagi penerima dengan melaporkan setiap penyaluran bantuan sosial
                        yang dilakukan</p>
                </div>
                <div class="text-center shadow rounded">
                    <img src="{{ asset('img/tracking.webp') }}" alt="">
                    <h4>Tracking</h4>
                    <p>Tingkatkan transparansi dan integritas dengan memantau setiap proses penyaluran bantuan sosial</p>
                </div>
                <div class="text-center shadow rounded">
                    <img src="{{ asset('img/selidiki.webp') }}" alt="">
                    <h4>Selidiki</h4>
                    <p>Berantas tindak penyelewengan bantuan sosial dengan melakukan penyelidikan terhadap proses penyaluran
                        bantuan sosial</p>
                </div>
            </div>
        </section>

        {{-- bantuan sosial terbaru --}}
        <section class="container" id="informasi" style="padding-top: 110px !important">
            <h1 class="text-center">Bantuan Sosial Terbaru</h1>
            <p class="text-center col-lg-8 m-auto">Dapatkan seputar informasi bantuan sosial terkini untuk memastikan
                tingkat
                transparansi dan integritas dengan memantau setiap proses penyaluran bantuan sosial</p>
            @if (count($informasi) === 0)
                <h5 class="text-muted text-center mt-5">Informasi bantuan belum ada!</h5>
            @else
                <div class="articles mt-5">
                    <div class="card shadow card-main">
                        <img src="{{ asset('img/hero4.webp') }}" class="card-img-top" alt="..." height="263"
                            style="filter: brightness(70%); -webkit-filter: brightness(70%); object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $informasi[0]->judul_informasi }}</h5>
                            <small class="text-muted mb-2 d-block" style="margin-top: -5px !important;">Updated
                                {{ $informasi[0]->created_at->diffForHumans() }}</small>
                            <p class="card-text" style="line-height: 30px">
                                {{ substr($informasi[0]->deskripsi, 0, 500) }}....</p>
                            <a href="/informasi/{{ $informasi[0]->slug }}" class="btn btn-primary btn-main">Lihat
                                selengkapnya</a>
                        </div>
                    </div>
                    @foreach ($informasi->skip(1) as $info)
                        <div class="card shadow">
                            <img src="{{ asset('img/hero5.webp') }}" class="card-img-top" alt="..."
                                style="filter: brightness(70%); -webkit-filter: brightness(70%); object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $info->judul_informasi }}</h5>
                                <small class="text-muted mb-2 d-block" style="margin-top: -5px !important;">Updated
                                    {{ $info->created_at->diffForHumans() }}</small>
                                <p class="card-text">{{ substr($info->deskripsi, 0, 120) }}...</p>
                                <a href="/informasi/{{ $info->slug }}" class="btn btn-primary">Lihat selengkapnya</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </section>

        {{-- tentang kami --}}
        <section class="container shadow" id="tentang"
            style="padding: 100px 100px 50px; !important; margin-top: 100px !important">
            <h1 class="text-center">Pertanyaan dan Saran</h1>
            <p class="text-center">Hubungi kami jika anda memiliki pertanyaan dan masukan</p>
            <form method="" class="mt-5">
                <div class="d-flex mb-3">
                    <input type="text" class="form-control me-2" id="nama" placeholder="Nama">
                    <input type="email" class="form-control ms-2" id="email" placeholder="Email">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="subjek" placeholder="Subjek">
                </div>
                <div class="mb-3">
                    <textarea class="form-control" id="floatingTextarea2" placeholder="Message" style="height: 100px"></textarea>
                </div>
                <button type="submit" class="btn btn-primary col-12">Kirim</button>
            </form>
        </section>

        {{-- info contact --}}
        <section class="container shadow mt-5 p-5">
            <div class="d-flex mb-3">
                <div class="">
                    <p class="fs-5" style="text-indent: 80px; line-height: 35px">Sipantas atau Sistem Informasi
                        Pelaporan Bantuan Sosial adalah situs web yang akan membantu baik
                        pemerintah maupun penerima bantuan untuk memantau penyaluran bantuan dana sosial yang efektif dan
                        user-friendly. Sipantas berfungsi sebagai wadah dalam pelaporkan setiap kejanggalan dalam penyaluran
                        bantuan sosial dan berfungsi dalam memantau dan menyelidiki guna meningkatkan integritas dan
                        transparansi setiap penyaluran bantuan sosial</p>
                </div>
            </div>
            <div class="d-flex">
                <h1 class="bi bi-house-fill"></h1>
                <div class="ms-3">
                    <h5>Home</h5>
                    <p>Jl. Komala Sari No.12 Dusun Bagek Gaet Desa Pohgading Timur, Kecamatan Pringgabaya, Lombok Timur, NTB
                    </p>
                </div>
            </div>
            <div class="d-flex my-4">
                <h1 class="bi bi-telephone-fill"></h1>
                <div class="ms-3">
                    <h5>Phone</h5>
                    <p>+65 123 456 234</p>
                </div>
            </div>
            <div class="d-flex">
                <h1 class="bi bi-envelope-open-fill"></h1>
                <div class="ms-3">
                    <h5>Email</h5>
                    <p>pantashelp@gmail.com</p>
                </div>
            </div>
        </section>
    </main>
@endsection
