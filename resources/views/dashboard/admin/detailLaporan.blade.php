@extends('dashboard.layouts.main')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
        <div class="col-lg-12">
            <div class="pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Detail Laporan</h1>
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
                                <span>Tempat Lahir</span>
                                <span>:</span>
                            </div>
                            <div class="ms-2">{{ $laporan->tempat_lahir }}</div>
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
                                <span>RT/RW</span>
                                <span>:</span>
                            </div>
                            <div class="ms-2">{{ $laporan->rt_rw }}</div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="mb-1">
                        <div class="d-flex">
                            <div class="d-flex justify-content-between" style="width: 150px !important">
                                <span>Kode Pos</span>
                                <span>:</span>
                            </div>
                            <div class="ms-2">{{ $laporan->kode_pos }}</div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="mb-1">
                        <div class="d-flex">
                            <div class="d-flex justify-content-between" style="width: 150px !important">
                                <span>Provinsi</span>
                                <span>:</span>
                            </div>
                            <div class="ms-2">{{ $laporan->provinsi }}</div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="mb-1">
                        <div class="d-flex">
                            <div class="d-flex justify-content-between" style="width: 150px !important">
                                <span>Kabupaten</span>
                                <span>:</span>
                            </div>
                            <div class="ms-2">{{ $laporan->kabupaten }}</div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="mb-1">
                        <div class="d-flex">
                            <div class="d-flex justify-content-between" style="width: 150px !important">
                                <span>Kecamatan</span>
                                <span>:</span>
                            </div>
                            <div class="ms-2">{{ $laporan->kecamatan }}</div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="mb-1">
                        <div class="d-flex">
                            <div class="d-flex justify-content-between" style="width: 150px !important">
                                <span>Desa</span>
                                <span>:</span>
                            </div>
                            <div class="ms-2">{{ $laporan->desa }}</div>
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
                            <div class="ms-2 list-group list-group-flush">
                                <div class="list-group-item">
                                    <h3 class="h6 fw-normal">1. Apakah anda belum menerima bantuan?</h3>
                                    <p class="badge bg-primary">{{ $laporan->question1 }}</p>
                                </div>
                                <div class="list-group-item">
                                    <h3 class="h6 fw-normal">2. Apakah jumlah dana yang diterima belum sesuai?</h3>
                                    <p class="badge bg-primary">{{ $laporan->question2 }}</p>
                                </div>
                                <div class="list-group-item">
                                    <h3 class="h6 fw-normal">2. Apa jenis bantuan yang diberikan?</h3>
                                    <p class="badge bg-primary">{{ $laporan->jenis_bantuan }}</p>
                                </div>
                                <div class="list-group-item">
                                    <h3 class="h6 fw-normal">2. Bentuk bantuan</h3>
                                    <p class="badge bg-primary">{{ $laporan->bentuk_bantuan }}</p>
                                </div>
                                @if ($laporan->bentuk_bantuan === 'Tunai')
                                    <div class="list-group-item">
                                        <h3 class="h6 fw-normal">2. Berapa jumlah yang diterima?</h3>
                                        <p class="badge bg-primary">Rp. {{ $laporan->jumlah1 }}</p>
                                    </div>
                                    <div class="list-group-item">
                                        <h3 class="h6 fw-normal">2. Berapa yang seharusnya diterima?</h3>
                                        <p class="badge bg-primary">Rp. {{ $laporan->jumlah2 }}</p>
                                    </div>
                                @endif
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
            <a href="/dashboard/admin/laporan" class="btn btn-secondary mt-3 mb-5 text-white">Kembali</a>
        </div>
    </main>
@endsection
