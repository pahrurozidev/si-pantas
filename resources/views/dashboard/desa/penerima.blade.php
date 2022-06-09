@extends('dashboard.layouts.main')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
        <div
            class="d-flex justify-content-between text-center flex-wrap flex-column flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Penerima Bulanan</h1>
            <p class="col-lg-8 m-auto">Silahkan lakukan Verifikasi dengan memberikan centang pada kolom Verifikasi Desa bila
                pihak desa telah menyalurkan Bantuan Sosial kepada Warga</p>
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
                            <th scope="col" class="text-center">Desa</th>
                            <th scope="col" class="text-center">Verifikasi Warga</th>
                            <th scope="col" class="text-center">Verifikasi Desa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataPenerima as $penerima)
                            <tr>
                                <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                                <td class="p-2 col-lg-3 text-center">
                                    {{ $penerima->nama }}
                                    <a href="/dashboard/desa/penerima/detail/{{ $penerima->id }}"
                                        class="text-decoration-none text-dark d-inline-block text-white badge bg-primary">
                                        <i class="bi bi-eye"></i></a>
                                </td>
                                <td class="p-2 col-lg-3 text-center">{{ $penerima->jenis_bantuan }}</td>
                                <td class="p-2 col-lg-2 text-center">{{ $penerima->desa }}</td>
                                {{-- verifikasi warga --}}
                                @if ($penerima->status_warga == 'verifikasi')
                                    <td class="text-center col-lg-2"><span class="badge bg-primary">Tersalurkan</span></td>
                                @else
                                    <td class="text-center col-lg-2"><span class="badge bg-danger">Belum Tersalurkan</span>
                                    </td>
                                @endif
                                {{-- verifikasi desa --}}
                                @if ($penerima->status_desa == 'verifikasi')
                                    <td class="text-center"><span class="badge bg-primary">Tersalurkan</span></td>
                                @else
                                    <td class="p-2 col-lg-3 text-center">
                                        <form action="/dashboard/desa/penerima/{{ $penerima->id }}" method="POST">
                                            @method('put')
                                            @csrf
                                            <input type="hidden" name="status_desa" value="verifikasi">
                                            <button class="btn btn-primary"
                                                onclick="return confirm('Apakah anda yakin?')"><i
                                                    class="bi bi-check"></i></button>
                                        </form>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                </table>
            @endif
        </div>
    </main>
@endsection
