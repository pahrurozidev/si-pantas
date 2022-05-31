@extends('dashboard.layouts.main')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
        <div class="col-lg-7">
            <div class="d-flex justify-content-between flex-column flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Semua Laporan Warga</h1>
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
            {{-- laporan berhasil dihapus --}}
            @if (session()->has('successDestroy'))
                <div class="alert alert-success alert-dismissible fade show mt-3 mb-3" role="alert">
                    {{ session('successDestroy') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div>
                @foreach ($semuaLaporan as $laporan)
                    <div class="d-flex align-items-center justify-content-between border rounded p-3 mb-2">
                        <h3 class="h5">{{ $laporan->nama }}</h3>
                        <div class="d-flex">
                            <a href="/dashboard/admin/laporan/{{ $laporan->slug }}" class="badge bg-primary detail"><i
                                    class="bi bi-eye h6"></i></a>
                            <form action="/dashboard/admin/laporan/{{ $laporan->slug }}" method="post"
                                class="ms-2">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin?')"><i
                                        class="bi bi-trash h6"></i></button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
