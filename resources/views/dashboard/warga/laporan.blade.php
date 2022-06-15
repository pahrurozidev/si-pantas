@extends('dashboard.layouts.main')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
        <div class="col-lg-12 m-auto">
            <div
                class="d-flex justify-content-between text-center flex-column flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2 text-center">Laporan Warga</h1>
                <p class="col-lg-8 my-2 m-auto">Silahkan lakukan pelaporan apabila terjadi kejanggalan dalam penyaluran
                    bantuan
                    sosial</p>
            </div>
            {{-- laporan berhasil dikirim --}}
            @if (session()->has('success'))
                <div class="col-lg-10 m-auto alert alert-success alert-dismissible fade show mt-3 mb-3" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            {{-- laporan gagal dikirim --}}
            @if (session()->has('faild'))
                <div class="col-lg-10 m-auto alert alert-warning alert-dismissible fade show mt-3 mb-3" role="alert">
                    {{ session('faild') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form action="/dashboard/warga/laporan" method="POST" class="col-lg-10 shadow m-auto p-5">
                @csrf
                {{-- question 1 --}}
                <p class="text-danger" style="font-style: italic;">Data anda otomatis akan direcord oleh sistem*</p>
                <hr class="mb-4">
                <div class="mb-3">
                    <label for="question1" class="form-label">Apakah anda belum menerima bantuan?</label>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="question1">Pilihan</label>
                        <select class="form-select @error('question1') is-invalid @enderror" name="question1"
                            id="question1">
                            <option selected>Pilih opsi</option>
                            <option value="Tersalurkan">Tersalurkan</option>
                            <option value="Belum Tersalurkan">Belum Tersalurkan</option>
                        </select>
                        @error('question1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{-- question 2 --}}
                <div class="mb-3">
                    <label for="question2" class="form-label">Apakah jumlah dana yang diterima belum sesuai?</label>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="question2">Pilihan</label>
                        <select class="form-select @error('question2') is-invalid @enderror" name="question2"
                            id="question2">
                            <option selected>Pilih opsi</option>
                            <option value="Sesuai">Sesuai</option>
                            <option value="Belum sesuai">Belum sesuai</option>
                        </select>
                        @error('question2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{-- question 3 / jenis bantuan --}}
                <div class="mb-3">
                    <label for="jenis_bantuan" class="form-label">Apa jenis bantuan yang diberikan?</label>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="jenis_bantuan">Pilihan</label>
                        <select class="form-select @error('jenis_bantuan') is-invalid @enderror" name="jenis_bantuan"
                            id="jenis_bantuan">
                            <option selected>Pilih opsi</option>
                            @foreach ($jenisBantuan as $bantuan)
                                <option value="{{ $bantuan->nama_bantuan }}">{{ $bantuan->nama_bantuan }}</option>
                            @endforeach
                        </select>
                        @error('jenis_bantuan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{-- question 4 / bentuk bantuan --}}
                <div class="mb-3">
                    <label for="bentuk_bantuan" class="form-label">Pilih bentuk Bantuan?</label>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="bentuk_bantuan">Pilihan</label>
                        <select class="form-select @error('bentuk_bantuan') is-invalid @enderror" name="bentuk_bantuan"
                            id="bentuk_bantuan">
                            <option selected>Pilih opsi</option>
                            <option value="Tunai">Tunai</option>
                            <option value="Non Tunai">Non Tunai</option>
                        </select>
                        @error('bentuk_bantuan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="jumlah_bantuan_laporan">
                    {{-- jumlah yang diterima --}}
                    <div class="mb-3">
                        <label for="jumlah1" class="form-label">Berapa jumlah yang diterima?</label>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control @error('jumlah1') is-invalid @enderror" name="jumlah1"
                                id="jumlah1" value="{{ old('jumlah1') }}" placeholder="Masukkan Jumlah Angka">
                            @error('jumlah1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    {{-- jumlah yang seharusnya --}}
                    <div class="mb-3">
                        <label for="jumlah2" class="form-label">Berapa yang seharusnya diterima?</label>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control @error('jumlah2') is-invalid @enderror" name="jumlah2"
                                id="jumlah2" value="{{ old('jumlah2') }}" placeholder="Masukkan Jumlah Angka">
                            @error('jumlah1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
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

                <button type="submit" name="submit" class="btn btn-primary">Laporkan</button>
            </form>
        </div>
    </main>

    <script>
        const bentukBantuan = document.querySelector("#bentuk_bantuan");
        const jumlahBantuanLaporan = document.querySelector(".jumlah_bantuan_laporan");
        bentukBantuan.addEventListener("change", () => {
            if (bentukBantuan.value === "Tunai") {
                jumlahBantuanLaporan.style.display = "block";
            } else {
                jumlahBantuanLaporan.style.display = "none";
            }
        });
    </script>
@endsection
