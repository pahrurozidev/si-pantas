@extends('dashboard.layouts.main')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
        <div class="col-lg-8">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Tambah Bantuan Sosial</h1>
            </div>
            <form action="/dashboard/admin/informasi" method="POST">
                @csrf
                {{-- nama bantuan --}}
                <div class="mb-3">
                    <label for="judul_informasi" class="form-label">Judul Informasi
                        Bantuan</label>
                    <input type="text" class="form-control @error('judul_informasi') is-invalid @enderror"
                        name="judul_informasi" id="judul_informasi" placeholder="Judul Informasi Bantuan"
                        value="{{ old('judul_informasi') }}">
                    @error('judul_informasi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- Jumlah Bantuan --}}
                <div class="mb-3">
                    <label for="jmlh_bantuan" class="form-label">Jumlah
                        Bantuan</label>
                    <input type="number" class="form-control @error('jmlh_bantuan') is-invalid @enderror"
                        name="jmlh_bantuan" id="jmlh_bantuan" placeholder="Jumlah Bantuan"
                        value="{{ old('jmlh_bantuan') }}">
                    @error('jmlh_bantuan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- Target penerima --}}
                <div class="mb-3">
                    <label for="target_penerima" class="form-label">Target Penerima</label>
                    <input type="number" class="form-control @error('target_penerima') is-invalid @enderror"
                        name="target_penerima" id="target_penerima" placeholder="Jumlah Bantuan"
                        value="{{ old('target_penerima') }}">
                    @error('target_penerima')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- Jumlah bantuan per orang --}}
                <div class="mb-3">
                    <label for="bantuan_perorang" class="form-label">Jumlah bantuan per orang</label>
                    <input type="number" class="form-control @error('bantuan_perorang') is-invalid @enderror"
                        name="bantuan_perorang" id="bantuan_perorang" placeholder="Jumlah Bantuan"
                        value="{{ old('bantuan_perorang') }}">
                    @error('bantuan_perorang')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- jenis bantuan --}}
                <div class="mb-3">
                    <label for="jenis_bantuan" class="form-label">Jenis
                        Bantuan</label>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="jenis_bantuan">Pilihan</label>
                        <select class="form-select @error('jenis_bantuan') is-invalid @enderror" name="jenisBantuan_id"
                            id="jenis_bantuan">
                            <option selected>Jenis Bantuan</option>
                            @foreach ($jenisBantuan as $bantuan)
                                <option value="{{ $bantuan->id }}">{{ $bantuan->nama_bantuan }}</option>
                            @endforeach
                        </select>
                        @error('jenis_bantuan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{-- Provinsi --}}
                <div class="mb-3">
                    <label for="provinsi" class="form-label">Provinsi</label>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="provinsi">Pilihan</label>
                        <select class="form-select" name="provinsi" id="provinsi">
                            <option selected>Pilih Provinsi</option>
                        </select>
                        @error('provinsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{-- Kota / Kabupaten --}}
                <div class="mb-3">
                    <label for="kabupaten" class="form-label">Kabupaten /
                        Kota</label>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="kabupaten">Pilihan</label>
                        <select class="form-select" name="kabupaten" id="kabupaten">
                            <option selected>Pilih Provinsi Dahulu</option>
                        </select>
                        @error('kabupaten')
                            <div class="invalid-feedback">
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
                        </select>
                        @error('kecamatan')
                            <div class="invalid-feedback">
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
                        </select>
                        @error('desa')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{-- deskripsi --}}
                <div class="mb-3">
                    <label for="deskripsi" class="form-label @error('deskripsi') is-invalid @enderror">Deskripsi</label>
                    <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi') }}">
                    <trix-editor input="deskripsi"></trix-editor>
                    @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
@endsection
