@extends('dashboard.layouts.main')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
        <div class="text-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Informasi Penyaluran Bantuan Sosial</h1>
            <p class="col-lg-8 m-auto">Kontrol setiap penyaluran informasi bantuan sosial kepada masyarakat</p>
        </div>
        <a href="/dashboard/admin/informasi/create" class="btn mt-2 btn-primary">Tambah Bantuan</a>
        <div class="col-lg-12">
            @if (count($informasi) === 0)
                <p class="text-muted mt-4 text-center" style="font-style: italic;">Informasi bantuan belum ada!</p>
            @else
                <div class="table-responsive-lg d-flex flex-column">
                    {{-- bantuan berhasil ditambah --}}
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show mt-3 mb-0" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    {{-- bantuan berhasil diubah --}}
                    @if (session()->has('successUpdate'))
                        <div class="alert alert-success alert-dismissible fade show mt-3 mb-0" role="alert">
                            {{ session('successUpdate') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    {{-- bantuan berhasil dihapus --}}
                    @if (session()->has('successDestroy'))
                        <div class="alert alert-success alert-dismissible fade show mt-3 mb-0" role="alert">
                            {{ session('successDestroy') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <table class="table-bordered mt-3">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th scope="col" class="text-center p-2">No</th>
                                <th scope="col" class="text-center">Judul Informasi</th>
                                <th scope="col" class="text-center">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($informasi as $info)
                                <tr>
                                    <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                                    <td class="p-2 col-lg-9">
                                        {{ $info->judul_informasi }}
                                        <a href="/dashboard/admin/informasi/{{ $info->id }}"
                                            class="ms-1 badge bg-primary edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                    </td>
                                    <td class="p-2 text-center">{{ $info->created_at->format('d/m/Y') }}
                                    </td>
                                </tr>
                            @endforeach
                    </table>
            @endif
        </div>
        </div>
    </main>
@endsection
