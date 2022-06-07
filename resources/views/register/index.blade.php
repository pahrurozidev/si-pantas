@extends('layouts.main')

@section('content')
    <section class="container" style="margin: 100px auto 300px !important">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                {{-- konfirmasi password salah --}}
                @if (session()->has('passwordError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('passwordError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="/register" method="POST" class="shadow rounded p-5">
                    @csrf
                    <h1 class="h3 fw-normal text-center">Registrasi Sekarang</h1>
                    <p class="text-center">Registrasi sekarang juga guna memantau bantuan sosial yang tersalurkan</p>
                    <div class="form-floating mt-5 mb-4">
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            value="{{ old('nama') }}" placeholder="nama">
                        <label for="nama">Nama</label>
                        @error('nama')
                            <div class="invalid-feeback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" id="nik"
                            value="{{ old('nik') }}" placeholder="nik">
                        <label for="nik">NIK</label>
                        @error('nik')
                            <div class="invalid-feeback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-4">
                        <input type="tel" name="telepon" class="form-control @error('telepon') is-invalid @enderror"
                            id="telepon" value="{{ old('telepon') }}" placeholder="telepon">
                        <label for="telepon">Nomor Telepon</label>
                        @error('telepon')
                            <div class="invalid-feeback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-4">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" value="{{ old('email') }}" placeholder="email">
                        <label for="email">Email</label>
                        @error('email')
                            <div class="invalid-feeback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-4">
                        <input type="date" name="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror"
                            id="tgl_lahir" value="{{ old('tgl_lahir') }}" placeholder="tgl_lahir">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        @error('tgl_lahir')
                            <div class="invalid-feeback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                            id="username" placeholder="name@example.com" value="{{ old('username') }}"
                            placeholder="username">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feeback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" placeholder="Password" placeholder="password">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feeback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" name="konfirmasi_password"
                            class="form-control @error('konfirmasi_password') is-invalid @enderror" id="konfirmasi_password"
                            placeholder="konfirmasi_password" placeholder="konfirmasi_password">
                        <label for="konfirmasi_password">Konfirmasi Password</label>
                        @error('konfirmasi_password')
                            <div class="invalid-feeback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Registrasi</button>
                    <small class="d-block text-center mt-3">Sudah punya akun? <a href="/login">Silakan login!</a></small>
                </form>
            </div>
        </div>
    </section>
@endsection
