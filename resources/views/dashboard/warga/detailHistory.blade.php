@extends('dashboard.layouts.main')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
    <div class="pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Penerima: {{ $penerima->nama }}</h1>
        <a href="/dashboard/warga/history" class="btn btn-warning text-white">Kembali</a>
    </div>
    <div class="col-lg-12 shadow p-4">
        <ul>
            <li class="mb-1">
                <div class="d-flex">
                    <div class="d-flex justify-content-between" style="width: 130px !important">
                        <span>Status</span>
                        <span>:</span>
                    </div>
                    @if ($penerima->status_warga == 'verifikasi')
                    <div class="ms-2  bg-primary badge">Tersalurkan</div>
                    @else
                    <div class="ms-2 bg-danger badge">Belum Tersalurkan</div>
                    @endif
                </div>
            </li>
            <li class="mb-1">
                <div class="d-flex">
                    <div class="d-flex justify-content-between" style="width: 130px !important">
                        <span>Nama Penerima</span>
                        <span>:</span>
                    </div>
                    <div class="ms-2">{{ $penerima->nama }}</div>
                </div>
            </li>
            <li class="mb-1">
                <div class="d-flex">
                    <div class="d-flex justify-content-between" style="width: 130px !important">
                        <span>NIK</span>
                        <span>:</span>
                    </div>
                    <div class="ms-2">{{ $penerima->nik }}</div>
                </div>
            </li>
            <li class="mb-1">
                <div class="d-flex">
                    <div class="d-flex justify-content-between" style="width: 130px !important">
                        <span>Email</span>
                        <span>:</span>
                    </div>
                    <div class="ms-2">{{ $penerima->email }}</div>
                </div>
            </li>
            <li class="mb-1">
                <div class="d-flex">
                    <div class="d-flex justify-content-between" style="width: 130px !important">
                        <span>Tempat Lahir</span>
                        <span>:</span>
                    </div>
                    <div class="ms-2">{{ $penerima->tempat_lahir }}</div>
                </div>
            </li>
            <li class="mb-1">
                <div class="d-flex">
                    <div class="d-flex justify-content-between" style="width: 130px !important">
                        <span>Tanggal Lahir</span>
                        <span>:</span>
                    </div>
                    <div class="ms-2">{{ $penerima->tgl_lahir }}</div>
                </div>
            </li>
            <li class="mb-1">
                <div class="d-flex">
                    <div class="d-flex justify-content-between" style="width: 130px !important">
                        <span>Jenis Bantuan</span>
                        <span>:</span>
                    </div>
                    <div class="ms-2">{{ $penerima->jenis_bantuan }}</div>
                </div>
            </li>
            <li class="mb-1">
                <div class="d-flex">
                    <div class="d-flex justify-content-between" style="width: 130px !important">
                        <span>Jumlah Bantuan</span>
                        <span>:</span>
                    </div>
                    <div class="ms-2">Rp. {{ $penerima->jmlh_bantuan }}</div>
                </div>
            </li>
            <li class="mb-1">
                <div class="d-flex">
                    <div class="d-flex justify-content-between" style="width: 130px !important">
                        <span>Provinsi</span>
                        <span>:</span>
                    </div>
                    <div class="ms-2">{{ $penerima->provinsi }}</div>
                </div>
            </li>
            <li class="mb-1">
                <div class="d-flex">
                    <div class="d-flex justify-content-between" style="width: 130px !important">
                        <span>Kabupaten</span>
                        <span>:</span>
                    </div>
                    <div class="ms-2">{{ $penerima->kabupaten }}</div>
                </div>
            </li>
            <li class="mb-1">
                <div class="d-flex">
                    <div class="d-flex justify-content-between" style="width: 130px !important">
                        <span>Kecamatan</span>
                        <span>:</span>
                    </div>
                    <div class="ms-2">{{ $penerima->kecamatan }}</div>
                </div>
            </li>
            <li class="mb-1">
                <div class="d-flex">
                    <div class="d-flex justify-content-between" style="width: 130px !important">
                        <span>Desa</span>
                        <span>:</span>
                    </div>
                    <div class="ms-2">{{ $penerima->desa }}</div>
                </div>
            </li>
        </ul>
    </div>
</main>
@endsection