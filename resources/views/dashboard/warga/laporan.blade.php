@extends('dashboard.layouts.main')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
        <div class="col-lg-8">
            <div class="d-flex justify-content-between flex-column flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Laporan Warga</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit sapiente nam et amet, distinctio
                    quasi veritatis nobis animi vero, explicabo expedita.</p>
            </div>
            {{-- laporan berhasil dikirim --}}
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show mt-3 mb-3" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form action="/dashboard/warga/laporan" method="POST">
                @csrf
                {{-- question 1 --}}
                <div class="mb-3">
                    <label for="question1" class="form-label">Apakah anda belum menerima bantuan?</label>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="question1">Pilihan</label>
                        <select class="form-select @error('question1') is-invalid @enderror" name="question1"
                            id="question1">
                            <option selected>Pilih opsi</option>
                            <option value="opsi1">Lorem, ipsum dolor.</option>
                            <option value="opsi2">Lorem, ipsum dolor.</option>
                            <option value="opsi3">Lorem, ipsum dolor.</option>
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
                            <option value="opsi1">Lorem, ipsum dolor.</option>
                            <option value="opsi2">Lorem, ipsum dolor.</option>
                            <option value="opsi3">Lorem, ipsum dolor.</option>
                        </select>
                        @error('question2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{-- question 3 --}}
                <div class="mb-3">
                    <label for="question3" class="form-label">Question 1</label>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="question3">Pilihan</label>
                        <select class="form-select @error('question3') is-invalid @enderror" name="question3"
                            id="question3">
                            <option selected>Pilih opsi</option>
                            <option value="opsi1">Lorem, ipsum dolor.</option>
                            <option value="opsi2">Lorem, ipsum dolor.</option>
                            <option value="opsi3">Lorem, ipsum dolor.</option>
                        </select>
                        @error('question3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{-- deskripsi --}}
                <div class="mb-3">
                    <label for="deskripsi" class="form-label @error('deskripsi') is-invalid @enderror">Laporan
                        lainnya</label>
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
@endsection
