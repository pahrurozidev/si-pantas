@extends('dashboard.layouts.main')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
        <div class="col-lg-12">
            <div class="pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Detail Laporan</h1>
                <a href="/dashboard/admin/laporan" class="btn btn-warning text-white">Kembali</a>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="mb-1">
                        <div class="d-flex">
                            <div class="d-flex justify-content-between" style="width: 150px !important">
                                <span>Nama Penerima</span>
                                <span>:</span>
                            </div>
                            <div class="ms-2">{{ $laporan->nama }}</div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="mb-1">
                        <div class="d-flex">
                            <div class="d-flex justify-content-between" style="width: 150px !important">
                                <span>Jenis Bantuan</span>
                                <span>:</span>
                            </div>
                            <div class="ms-2">{{ $laporan->jenis_bantuan }}</div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="mb-1">
                        <div class="d-flex">
                            <div class="d-flex justify-content-between" style="width: 150px !important">
                                <span>Jumlah Bantuan</span>
                                <span>:</span>
                            </div>
                            <div class="ms-2">Rp. {{ $laporan->jmlh_bantuan }}</div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="mb-1">
                        <div class="d-flex">
                            <div class="d-flex justify-content-between" style="width: 150px !important">
                                <span>NIK</span>
                                <span>:</span>
                            </div>
                            <div class="ms-2">{{ $laporan->nik }}</div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="mb-1">
                        <div class="d-flex">
                            <div class="d-flex justify-content-between" style="width: 150px !important">
                                <span>Telepon</span>
                                <span>:</span>
                            </div>
                            <div class="ms-2">{{ $laporan->telepon }}</div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="mb-1">
                        <div class="d-flex">
                            <div class="d-flex justify-content-between" style="width: 150px !important">
                                <span>Email</span>
                                <span>:</span>
                            </div>
                            <div class="ms-2">{{ $laporan->email }}</div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="mb-1">
                        <div class="d-flex">
                            <div class="d-flex justify-content-between" style="width: 150px !important">
                                <span>Tanggal Lahir</span>
                                <span>:</span>
                            </div>
                            <div class="ms-2">{{ $laporan->tgl_lahir }}</div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="mb-1">
                        <div class="d-flex">
                            <div class="d-flex justify-content-between" style="width: 150px !important">
                                <span>Telepon</span>
                                <span>:</span>
                            </div>
                            <div class="ms-2">{{ $laporan->telepon }}</div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="mb-1">
                        <div class="d-flex">
                            <div class="d-flex justify-content-between" style="min-width: 150px !important">
                                <span>Laporan</span>
                                <span>:</span>
                            </div>
                            <div class="ms-2">
                                <div>
                                    <h3 class="h6 fw-normal">1. Apakah anda belum menerima bantuan?</h3>
                                    <p>{{ $laporan->question1 }}</p>
                                </div>
                                <div>
                                    <h3 class="h6 fw-normal">2. Apakah anda belum menerima bantuan?</h3>
                                    <p>{{ $laporan->question2 }}</p>
                                </div>
                                <div>
                                    <h3 class="h6 fw-normal">3. Apakah anda belum menerima bantuan?</h3>
                                    <p>{{ $laporan->question3 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="mb-1">
                        <div class="d-flex">
                            <div class="d-flex justify-content-between" style="width: 150px !important">
                                <span>Laporan Lainnya</span>
                                <span>:</span>
                            </div>
                            <div class="ms-2">{!! $laporan->deskripsi !!}</div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </main>
@endsection
