@extends('layouts.main')

@section('content')
    <section class="col-lg-8 m-auto" style="margin: 100px auto 200px !important">
        <div class="border-bottom">
            <h1 class="h2">Detail Bantuan Sosial</h1>
        </div>
        <div class="">
            {{-- nama bantuan --}}
            <h2 class="h4 mt-4">{{ $informasi->judul_informasi }}</h2>
            <small class="text-muted mb-2 d-block" style="margin-top: -5px !important;">Updated
                {{ $informasi->created_at->diffForHumans() }}</small>
            {{-- deskripsi --}}
            <p class="mt-4" style="line-height: 35px">{!! $informasi->deskripsi !!}</p>
            <ul>
                <li class="mb-3">
                    <div class="d-flex">
                        <div class="d-flex justify-content-between" style="width: 200px !important">
                            <span>Provinsi</span>
                            <span>:</span>
                        </div>
                        <div class="ms-2">{{ $informasi->provinsi }}</div>
                    </div>
                </li>
                <li class="mb-3">
                    <div class="d-flex">
                        <div class="d-flex justify-content-between" style="width: 200px !important">
                            <span>Kabupaten</span>
                            <span>:</span>
                        </div>
                        <div class="ms-2">{{ $informasi->kabupaten }}</div>
                    </div>
                </li>
                <li class="mb-3">
                    <div class="d-flex">
                        <div class="d-flex justify-content-between" style="width: 200px !important">
                            <span>Kecamatan</span>
                            <span>:</span>
                        </div>
                        <div class="ms-2">{{ $informasi->kecamatan }}</div>
                    </div>
                </li>
                <li class="mb-3">
                    <div class="d-flex">
                        <div class="d-flex justify-content-between" style="width: 200px !important">
                            <span>Desa</span>
                            <span>:</span>
                        </div>
                        <div class="ms-2">{{ $informasi->desa }}</div>
                    </div>
                </li>
                <li class="mb-3">
                    <div class="d-flex">
                        <div class="d-flex justify-content-between" style="width: 200px !important">
                            <span>Jenis Bantuan</span>
                            <span>:</span>
                        </div>
                        <div class="ms-2">{{ $jenisBantuan[0]['nama_bantuan'] }}</div>
                    </div>
                </li>
                <li class="mb-3">
                    <div class="d-flex">
                        <div class="d-flex justify-content-between" style="width: 200px !important">
                            <span>Jumlah Bantuan</span>
                            <span>:</span>
                        </div>
                        <div class="ms-2">Rp. {{ $informasi->jmlh_bantuan }}</div>
                    </div>
                </li>
                <li class="mb-3">
                    <div class="d-flex">
                        <div class="d-flex justify-content-between" style="width: 200px !important">
                            <span>Target penerima</span>
                            <span>:</span>
                        </div>
                        <div class="ms-2">{{ $informasi->target_penerima }} Orang</div>
                    </div>
                </li>
                <li class="mb-3">
                    <div class="d-flex">
                        <div class="d-flex justify-content-between" style="width: 200px !important">
                            <span>Jumlah Bantuan Per Orang</span>
                            <span>:</span>
                        </div>
                        <div class="ms-2">Rp. {{ $informasi->bantuan_perorang }}</div>
                    </div>
                </li>
                <li class="mb-3">
                    <div class="d-flex">
                        <div class="d-flex justify-content-between" style="width: 200px !important">
                            <span>Penerima</span>
                            <span>:</span>
                        </div>
                        <div class="ms-2 badge bg-primary"><a href="/penerima"
                                class="text-white text-decoration-none penerima">Penerima</a></div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
@endsection
