@extends('dashboard.layouts.main')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
        <div
            class="d-flex text-center justify-content-between flex-wrap flex-column flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Daftar Penerima Bantuan Bulanan</h1>
            <p class="col-lg-8 m-auto">Daftar dibawah ini merupakan data warga yang telah menerima dana bantuan sosial. Tetap
                pantau setiap penyaluran pada halaman ini untuk memastikan tingkat transparansi bantuan sosial</p>
        </div>
        <div class="col-lg-12">
            {{-- bantuan terverifikasi --}}
            @if (session()->has('successUpdate'))
                <div class="alert alert-success alert-dismissible fade show mt-3 mb-0" role="alert">
                    {{ session('successUpdate') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (count($dataPenerima) === 0)
                <p class="text-muted mt-4 text-center" style="font-style: italic;">Data penerima belum ada!</p>
            @else
                <table class="table-bordered mt-3">
                    <thead class="bg-secondary text-white">
                        <tr>
                            <th scope="col" class="text-center p-2">No</th>
                            <th scope="col" class="text-center">Nama Penerima</th>
                            <th scope="col" class="text-center">Jenis Bantuan</th>
                            <th scope="col" class="text-center">Jumlah Bantuan</th>
                            <th scope="col" class="text-center">Kabupaten</th>
                            <th scope="col" class="text-center">Kecamatan</th>
                            <th scope="col" class="text-center">Desa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataPenerima as $penerima)
                            <tr>
                                <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                                <td class="p-2 col-lg-3 text-center">{{ $penerima->nama }}</td>
                                <td class="p-2 col-lg-3 text-center">{{ $penerima->jenis_bantuan }}</td>
                                <td class="p-2 col-lg-3 text-center">{{ $penerima->jmlh_bantuan }}</td>
                                <td class="p-2 col-lg-2 text-center">{{ $penerima->kabupaten }}</td>
                                <td class="p-2 col-lg-2 text-center">{{ $penerima->kecamatan }}</td>
                                <td class="p-2 col-lg-2 text-center">{{ $penerima->desa }}</td>
                            </tr>
                        @endforeach
                </table>
            @endif
        </div>
    </main>
@endsection
