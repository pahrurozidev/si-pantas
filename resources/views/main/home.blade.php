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
                        <img src="{{ asset('img/hero2.jpg') }}" class="d-block w-100" alt="..." height="500"
                            style="object-fit: cover;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/hero3.jpg') }}" class="d-block w-100" alt="..." height="500"
                            style="object-fit: cover;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/hero1.jpg') }}" class="d-block w-100" alt="..." height="500"
                            style="object-fit: cover;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
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
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, quas.</p>
            <div class="row mt-5 p-3 feature">
                <div class="text-center shadow rounded">
                    <img src="{{ asset('img/laporkan.jpg') }}" alt="">
                    <h4>Laporkan</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi placeat consequuntur numquam ab
                        tenetur nesciunt velit adipisci deleniti laborum totam.</p>
                </div>
                <div class="text-center shadow rounded">
                    <img src="{{ asset('img/tracking.jpg') }}" alt="">
                    <h4>Tracking</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut earum iste fuga corrupti itaque doloribus
                        quo quis qui delectus consectetur?</p>
                </div>
                <div class="text-center shadow rounded">
                    <img src="{{ asset('img/selidiki.jpg') }}" alt="">
                    <h4>Selidiki</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum eos autem corrupti, vero temporibus
                        animi cupiditate reprehenderit enim tenetur reiciendis.</p>
                </div>
            </div>
        </section>

        {{-- bantuan sosial terbaru --}}
        <section class="container" id="informasi" style="padding-top: 110px !important">
            <h1 class="text-center">Bantuan Sosial Terbaru</h1>
            <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, voluptates!</p>
            <div class="articles mt-5">
                <div class="card shadow card-main">
                    <img src="{{ asset('img/hero1.jpg') }}" class="card-img-top" alt="..." height="263"
                        style="object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $informasi[0]->judul_informasi }}</h5>
                        <small class="text-muted mb-2 d-block" style="margin-top: -5px !important;">Updated
                            {{ $informasi[0]->created_at->diffForHumans() }}</small>
                        <p class="card-text">{{ substr($informasi[0]->deskripsi, 0, 300) }}</p>
                        <a href="#" class="btn btn-primary btn-main">Lihat selengkapnya</a>
                    </div>
                </div>
                @foreach ($informasi->skip(1) as $info)
                    <div class="card shadow">
                        <img src="{{ asset('img/hero2.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $info->judul_informasi }}</h5>
                            <small class="text-muted mb-2 d-block" style="margin-top: -5px !important;">Updated
                                {{ $info->created_at->diffForHumans() }}</small>
                            <p class="card-text">{{ substr($info->deskripsi, 0, 120) }}</p>
                            <a href="#" class="btn btn-primary">Lihat selengkapnya</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- tentang kami --}}
        <section class="container px-5 pb-5 shadow" id="tentang"
            style="padding-top: 100px !important; margin-top: 100px !important">
            <h1 class="text-center">Tentang Kami</h1>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, sapiente!</p>
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
