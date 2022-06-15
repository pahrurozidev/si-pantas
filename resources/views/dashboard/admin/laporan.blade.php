@extends('dashboard.layouts.main')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
        <div class="col-lg-12">
            <div
                class="d-flex text-center justify-content-between flex-column flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Semua Laporan Warga</h1>
                <p class="col-lg-8 m-auto">Periksa semua laporan untuk memantau trasparansi bantuan sosial yang tersalurkan
                </p>
            </div>
            <div class="col-lg-8 m-auto">
                {{-- laporan berhasil dihapus --}}
                @if (session()->has('successDestroy'))
                    <div class="alert alert-success alert-dismissible fade show mt-3 mb-3" role="alert">
                        {{ session('successDestroy') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (count($semuaLaporan) === 0)
                    <p class="text-muted mt-4 text-center" style="font-style: italic;">Laporan belum ada!</p>
                @else
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
                                    <button class="badge bg-danger border-0"
                                        onclick="return confirm('Apakah anda yakin?')"><i
                                            class="bi bi-trash h6"></i></button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </main>
@endsection
