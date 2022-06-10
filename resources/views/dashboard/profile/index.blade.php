@extends('dashboard.layouts.main')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
        <div class="d-flex justify-content-between flex-column flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Informasi Akun Anda</h1>
            <div class="aksi d-flex me-auto">
                <a href="{{ route('profile.edit') }}" class="btn btn-primary ms-2">Edit</a>
            </div>
        </div>
        @if (session()->has('successUpdate'))
            <div class="alert alert-success alert-dismissible fade show mt-3 mb-3" role="alert">
                {{ session('successUpdate') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="col-lg-12 shadow p-4">
            <div class="card-style mb-4">
                <h5>Nama Lengkap</h5>
                <small class="text-muted h6">{{ Auth::user()->nama}}</small>
            </div>
            <div class="card-style mb-4">
                <h5>Username</h5>
                <small class="text-muted h6">{{ Auth::user()->username}}</small>
            </div>
            <div class="card-style mb-4">
                <h5>NIK</h5>
                <small class="text-muted h6">{{ Auth::user()->nik}}</small>
            </div>
            <div class="card-style mb-4">
                <h5>Nomor Handphone</h5>
                <small class="text-muted h6">{{ Auth::user()->telepon}}</small>
            </div>
            <div class="card-style mb-4">
                <h5>Email</h5>
                <small class="text-muted h6">{{ Auth::user()->email}}</small>
            </div>
            <div class="card-style mb-4">
                <h5>Tanggal Lahir</h5>
                <small class="text-muted h6">{{ Auth::user()->tgl_lahir}}</small>
            </div>
            <div class="card-style mb-4">
                <h5>Provinsi</h5>
                @if (Auth::user()->provinsi === NULL)
                <em class="text-danger h6">-- Data Belum Dilengkapi --</em>
                @else
                <small class="text-muted h6">{{ Auth::user()->provinsi}}</small>
                @endif
            </div>
            <div class="card-style mb-4">
                <h5>Kabupaten / Kota</h5>
                @if (Auth::user()->kabupaten === NULL)
                <em class="text-danger h6">-- Data Belum Dilengkapi --</em>
                @else
                <small class="text-muted h6">{{ Auth::user()->kabupaten}}</small>
                @endif
            </div>
            <div class="card-style mb-4">
                <h5>Kecamatan</h5>
                @if (Auth::user()->kecamatan === NULL)
                <em class="text-danger h6">-- Data Belum Dilengkapi --</em>
                @else
                <small class="text-muted h6">{{ Auth::user()->kecamatan}}</small>
                @endif
            </div>
            <div class="card-style mb-4">
                <h5>Desa / Kelurahan</h5>
                @if (Auth::user()->desa === NULL)
                <em class="text-danger h6">-- Data Belum Dilengkapi --</em>
                @else
                <small class="text-muted h6">{{ Auth::user()->desa}}</small>
                @endif
            </div>
            <div class="card-style mb-4">
                <h5>RT / RW</h5>
                @if (Auth::user()->rt_rw === NULL)
                <em class="text-danger h6">-- Data Belum Dilengkapi --</em>
                @else
                <small class="text-muted h6">{{ Auth::user()->rt_rw}}</small>
                @endif
            </div>
            <div class="card-style mb-4">
                <h5>Kode Pos</h5>
                @if (Auth::user()->kode_pos === NULL)
                <em class="text-danger h6">-- Data Belum Dilengkapi --</em>
                @else
                <small class="text-muted h6">{{ Auth::user()->kode_pos}}</small>
                @endif
            </div>
        </div>
    </main>
@endsection
