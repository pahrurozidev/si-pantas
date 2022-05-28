@extends('dashboard.layouts.main')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Bantuan Sosial</h1>
        </div>
        <div class="col-lg-12">
            <a href="/dashboard/informasi/create" class="btn btn-primary">Tambah Bantuan</a>
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
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <table class="table-bordered mt-3">
                    <thead class="bg-secondary text-white">
                        <tr>
                            <th scope="col" class="text-center p-2">No</th>
                            <th scope="col" class="text-center">Judul</th>
                            <th scope="col" class="text-center">Penulis</th>
                            <th scope="col" class="text-center">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($informasi as $info)
                            <tr>
                                <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                                <td class="p-2 col-lg-9">
                                    {{ $info->judul_informasi }}
                                    <a href="/dashboard/informasi/{{ $info->slug }}" class="ms-1 badge bg-primary edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </td>
                                <td class="p-2 text-center">Administrator</td>
                                <td class="p-2 text-center">{{ substr($info->created_at, 0, 10) }}</td>
                            </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </main>
@endsection
