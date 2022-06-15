@extends('dashboard.layouts.main')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
        <div
            class="d-flex justify-content-between text-center flex-column flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Informasi Akun Anda</h1>
        </div>
        @if (session()->has('successUpdate'))
            <div class="col-lg-8 m-auto alert alert-success alert-dismissible fade show mt-3 mb-3" role="alert">
                {{ session('successUpdate') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="col-lg-8 m-auto shadow p-4 list-group list-group-flush">
            <div class="aksi d-flex justify-content-end mb-4">
                <a href="{{ route('profile.edit') }}" class="btn btn-primary ms-2">Edit</a>
            </div>
            <div class="card-style mb-4 list-group-item">
                <h5>Nama Lengkap</h5>
                <small class="text-muted h6">{{ Auth::user()->nama }}</small>
            </div>
            <div class="card-style mb-4 list-group-item">
                <h5>Username</h5>
                <small class="text-muted h6">{{ Auth::user()->username }}</small>
            </div>
            <div class="card-style mb-4 list-group-item">
                <h5>NIK</h5>
                <small class="text-muted h6">{{ Auth::user()->nik }}</small>
            </div>
            <div class="card-style mb-4 list-group-item">
                <h5>Telepon</h5>
                <small class="text-muted h6">{{ Auth::user()->telepon }}</small>
            </div>
            <div class="card-style mb-4 list-group-item">
                <h5>Email</h5>
                <small class="text-muted h6">{{ Auth::user()->email }}</small>
            </div>
            <div class="card-style mb-4 list-group-item">
                <h5>Tanggal Lahir</h5>
                <small class="text-muted h6">{{ Auth::user()->tgl_lahir }}</small>
            </div>
            <div class="card-style mb-4 list-group-item">
                <h5>Tempat Lahir</h5>
                @if (Auth::user()->tempat_lahir === null)
                    <em class="text-danger" style="font-style: italic;">-- Data Belum Dilengkapi --</em>
                @else
                    <small class="text-muted h6">{{ Auth::user()->tempat_lahir }}</small>
                @endif
            </div>
            <div class="card-style mb-4 list-group-item">
                <h5>Provinsi</h5>
                @if (Auth::user()->provinsi === null)
                    <em class="text-danger" style="font-style: italic;">-- Data Belum Dilengkapi --</em>
                @else
                    <small class="text-muted h6">{{ Auth::user()->provinsi }}</small>
                @endif
            </div>
            <div class="card-style mb-4 list-group-item">
                <h5>Kabupaten / Kota</h5>
                @if (Auth::user()->kabupaten === null)
                    <em class="text-danger" style="font-style: italic;">-- Data Belum Dilengkapi --</em>
                @else
                    <small class="text-muted h6">{{ Auth::user()->kabupaten }}</small>
                @endif
            </div>
            <div class="card-style mb-4 list-group-item">
                <h5>Kecamatan</h5>
                @if (Auth::user()->kecamatan === null)
                    <em class="text-danger" style="font-style: italic;">-- Data Belum Dilengkapi --</em>
                @else
                    <small class="text-muted h6">{{ Auth::user()->kecamatan }}</small>
                @endif
            </div>
            <div class="card-style mb-4 list-group-item">
                <h5>Desa / Kelurahan</h5>
                @if (Auth::user()->desa === null)
                    <em class="text-danger" style="font-style: italic;">-- Data Belum Dilengkapi --</em>
                @else
                    <small class="text-muted h6">{{ Auth::user()->desa }}</small>
                @endif
            </div>
            <div class="card-style mb-4 list-group-item">
                <h5>RT / RW</h5>
                @if (Auth::user()->rt_rw === null)
                    <em class="text-danger" style="font-style: italic;">-- Data Belum Dilengkapi --</em>
                @else
                    <small class="text-muted h6">{{ Auth::user()->rt_rw }}</small>
                @endif
            </div>
            <div class="card-style mb-4 list-group-item">
                <h5>Kode Pos</h5>
                @if (Auth::user()->kode_pos === null)
                    <em class="text-danger" style="font-style: italic;">-- Data Belum Dilengkapi --</em>
                @else
                    <small class="text-muted h6">{{ Auth::user()->kode_pos }}</small>
                @endif
            </div>
        </div>
    </main>
@endsection
