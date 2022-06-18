@extends('layouts.main')

@section('content')
    <section class="container" style="margin: 100px auto 300px !important">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                {{-- register berhasil --}}
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                {{-- register gagal --}}
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="/login" method="POST" class="shadow rounded p-5 login">
                    @csrf
                    <h1 class="h3 fw-normal text-center">Silakan Masuk</h1>
                    <p class="text-center">Silakan gunakan akun anda untuk memantau dana bantuan sosial</p>
                    <div class="form-floating mt-5 mb-4">
                        <input type="email" name="email" class="form-control" id="floatingInput"
                            placeholder="name@example.com" value="{{ old('email') }}">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" name="password" class="form-control" id="floatingPassword"
                            placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
                    <small class="d-block text-center mt-3">Belum punya akun? <a href="/register">Registrasi
                            sekarang!</a></small>
                </form>
            </div>
        </div>
    </section>
@endsection
