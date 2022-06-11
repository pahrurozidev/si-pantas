@extends('dashboard.layouts.main')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
        <div class="col-lg-8">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Ubah Bantuan Sosial</h1>
            </div>
            <form action="/dashboard/admin/informasi/{{ $informasi->slug }}" method="POST">
                @method('put')
                @csrf
                {{-- nama bantuan --}}
                <div class="mb-3">
                    <label for="judul_informasi" class="form-label @error('judul_informasi') is-invalid @enderror">Judul
                        informasi Bantuan</label>
                    <input type="text" class="form-control" name="judul_informasi" id="judul_informasi"
                        placeholder="judul_informasi Bantuan"
                        value="{{ old('judul_informasi', $informasi->judul_informasi) }}">
                    @error('judul_informasi')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- Jumlah Bantuan --}}
                <div class="mb-3">
                    <label for="jmlh_bantuan" class="form-label @error('jmlh_bantuan') is-invalid @enderror">Jumlah
                        Bantuan</label>
                    <input type="number" class="form-control" name="jmlh_bantuan" id="jmlh_bantuan"
                        placeholder="Jumlah Bantuan" value="{{ old('jmlh_bantuan', $informasi->jmlh_bantuan) }}">
                    @error('jmlh_bantuan')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- Target penerima --}}
                <div class="mb-3">
                    <label for="target_penerima" class="form-label @error('target_penerima') is-invalid @enderror">Target
                        Penerima</label>
                    <input type="number" class="form-control" name="target_penerima" id="target_penerima"
                        placeholder="Jumlah Bantuan" value="{{ old('target_penerima', $informasi->target_penerima) }}">
                    @error('target_penerima')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- Jumlah bantuan per orang --}}
                <div class="mb-3">
                    <label for="bantuan_perorang" class="form-label @error('bantuan_perorang') is-invalid @enderror">Jumlah
                        bantuan per orang</label>
                    <input type="number" class="form-control" name="bantuan_perorang" id="bantuan_perorang"
                        placeholder="Jumlah Bantuan" value="{{ old('bantuan_perorang', $informasi->bantuan_perorang) }}">
                    @error('bantuan_perorang')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- jenis bantuan --}}
                <div class="mb-3">
                    <label for="jenisBantuan_id" class="form-label @error('jenisBantuan_id') is-invalid @enderror">Jenis
                        Bantuan</label>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="jenisBantuan_id">Pilihan</label>
                        <select class="form-select" name="jenisBantuan_id" id="jenisBantuan_id">
                            <option selected>Jenis Bantuan</option>
                            @foreach ($jenisBantuan as $bantuan)
                                @if (old('jenisBantuan_id', $informasi->jenisBantuan_id) == $bantuan->id)
                                    <option value="{{ $bantuan->id }}" selected>{{ $bantuan->nama_bantuan }}</option>
                                @else
                                    <option value="{{ $bantuan->id }}">{{ $bantuan->nama_bantuan }}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('jenisBantuan_id')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{-- Provinsi --}}
                <div class="mb-3">
                    <label for="provinsi" class="form-label @error('provinsi') is-invalid @enderror">Provinsi</label>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="provinsi">Pilihan</label>
                        <select class="form-select" name="provinsi" id="provinsi">
                            <option value="{{ $informasi->provinsi }} {{ ucwords(strtolower($informasi->provinsi)) }}"
                                selected>
                                {{ ucwords(strtolower($informasi->provinsi)) }}</option>
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
                    <label for="kabupaten" class="form-label @error('kabupaten') is-invalid @enderror">Kabupaten /
                        Kota</label>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="kabupaten">Pilihan</label>
                        <select class="form-select" name="kabupaten" id="kabupaten">
                            <option selected>Pilih Provinsi Dahulu</option>
                            <option value="{{ ucwords(strtolower($informasi->kabupaten)) }}" selected>
                                {{ ucwords(strtolower($informasi->kabupaten)) }}</option>
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
                    <label for="kecamatan" class="form-label @error('kecamatan') is-invalid @enderror">Kecamatan</label>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="kecamatan">Pilihan</label>
                        <select class="form-select" name="kecamatan" id="kecamatan">
                            <option selected>Pilih Kabupaten Dahulu</option>
                            <option value="{{ ucwords(strtolower($informasi->kecamatan)) }}" selected>
                                {{ ucwords(strtolower($informasi->kecamatan)) }}</option>
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
                    <label for="desa" class="form-label @error('desa') is-invalid @enderror">Desa / Kelurahan</label>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="desa">Pilihan</label>
                        <select class="form-select" name="desa" id="desa">
                            <option selected>Pilih Kecamatan Dahulu</option>
                            <option value="{{ ucwords(strtolower($informasi->desa)) }}" selected>
                                {{ ucwords(strtolower($informasi->desa)) }}</option>
                        </select>
                        @error('desa')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{-- deskripsi --}}
                <div class="mb-3">
                    <label for="deskripsi" class="form-label @error('deskripsi') is-invalid @enderror">Deskripsi</label>
                    <input id="deskripsi" type="hidden" name="deskripsi"
                        value="{{ old('deskripsi', $informasi->deskripsi) }}">
                    <trix-editor input="deskripsi"></trix-editor>
                    @error('deskripsi')
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
