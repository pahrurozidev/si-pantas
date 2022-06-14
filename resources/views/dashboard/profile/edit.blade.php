@extends('dashboard.layouts.main')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
        <div class="col-lg-12 m-auto">
            <div
                class="d-flex justify-content-between text-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2 text-center m-auto mb-3">Edit Profile</h1>
            </div>
            <form action="{{ route('profile.update') }}" method="post" class="col-lg-8 p-5 shadow m-auto">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input value="{{ old('nama', Auth::user()->nama) }}" type="text" class="form-control" name="nama"
                        id="nama" placeholder="nama">
                    @error('nama')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input value="{{ old('username', Auth::user()->username) }}" type="text" class="form-control"
                        name="username" id="username" placeholder="username">
                    @error('username')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input value="{{ old('nik', Auth::user()->nik) }}" type="number" class="form-control" name="nik"
                        id="nik" placeholder="nik">
                    @error('nik')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="telepon" class="form-label">Telepon</label>
                    <input value="{{ old('telepon', Auth::user()->telepon) }}" type="number" class="form-control"
                        name="telepon" id="telepon" placeholder="telepon">
                    @error('telepon')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="{{ old('email', Auth::user()->email) }}" type="email" class="form-control"
                        name="email" id="email" placeholder="email">
                    @error('email')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                    <input value="{{ old('tgl_lahir', Auth::user()->tgl_lahir) }}" type="date" class="form-control"
                        name="tgl_lahir" id="tgl_lahir" placeholder="tgl_lahir">
                    @error('tgl_lahir')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                    <input value="{{ old('tempat_lahir', Auth::user()->tempat_lahir) }}" type="tempat_lahir"
                        class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir">
                    @error('tempat_lahir')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- Provinsi --}}
                <div class="mb-3">
                    <label for="provinsi" class="form-label">Provinsi</label>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="provinsi">Pilihan</label>
                        <select class="form-select" name="provinsi" id="provinsi">
                            <option selected>Pilih Provinsi</option>
                            {{-- <option
                                value="{{ Auth::user()->provinsi }} {{ ucwords(strtolower(Auth::user()->provinsi)) }}"
                                selected>{{ ucwords(strtolower(Auth::user()->provinsi)) }}</option>
                            @foreach ($dataProvinsi as $provinsi)
                                <option value="{{ $provinsi['id'] }} {{ ucwords(strtolower($provinsi['name'])) }}">
                                    {{ ucwords(strtolower($provinsi['name'])) }}</option>
                            @endforeach --}}
                        </select>
                        @error('provinsi')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{-- Kota / Kabupaten --}}
                <div class="mb-3">
                    <label for="kabupaten" class="form-label">Kabupaten / Kota</label>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="kabupaten">Pilihan</label>
                        <select class="form-select" name="kabupaten" id="kabupaten">
                            <option selected>Pilih Provinsi Dahulu</option>
                            <option value="{{ ucwords(strtolower(Auth::user()->kabupaten)) }}" selected>
                                {{ ucwords(strtolower(Auth::user()->kabupaten)) }}</option>
                        </select>
                        @error('kabupaten')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{-- Kecamatan --}}
                <div class="mb-3">
                    <label for="kecamatan" class="form-label">Kecamatan</label>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="kecamatan">Pilihan</label>
                        <select class="form-select" name="kecamatan" id="kecamatan">
                            <option selected>Pilih Kabupaten Dahulu</option>
                            <option value="{{ ucwords(strtolower(Auth::user()->kecamatan)) }}" selected>
                                {{ ucwords(strtolower(Auth::user()->kecamatan)) }}</option>
                        </select>
                        @error('kecamatan')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{-- Desa --}}
                <div class="mb-3">
                    <label for="desa" class="form-label">Desa / Kelurahan</label>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="desa">Pilihan</label>
                        <select class="form-select" name="desa" id="desa">
                            <option selected>Pilih Kecamatan Dahulu</option>
                            <option value="{{ ucwords(strtolower(Auth::user()->desa)) }}" selected>
                                {{ ucwords(strtolower(Auth::user()->desa)) }}</option>
                        </select>
                        @error('desa')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="rt_rw" class="form-label">RT / RW</label>
                    <input value="{{ old('rt_rw', Auth::user()->rt_rw) }}" type="text" class="form-control"
                        name="rt_rw" id="rt_rw" placeholder="RT / RW">
                    @error('kode_pos')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="kode_pos" class="form-label">Kode Pos</label>
                    <input value="{{ old('kode_pos', Auth::user()->kode_pos) }}" type="number" class="form-control"
                        name="kode_pos" id="kode_pos" placeholder="Kode Pos">
                    @error('kode_pos')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
@endsection
