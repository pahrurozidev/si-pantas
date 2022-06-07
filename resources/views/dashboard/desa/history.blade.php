@extends('dashboard.layouts.main')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
        <div class="d-flex justify-content-between flex-wrap flex-column flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">History Bantuan yang Sudah Tersalurkan</h1>
        </div>
        <div class="col-lg-12">
            {{-- bantuan terverifikasi --}}
            @if ($dataPenerima->count())
                <table class="table-bordered mt-3">
                    <thead class="bg-secondary text-white">
                        <tr>
                            <th scope="col" class="text-center p-2">No</th>
                            <th scope="col" class="text-center">Nama Penerima</th>
                            <th scope="col" class="text-center">Jenis Bantuan</th>
                            <th scope="col" class="text-center">Desa</th>
                            <th scope="col" class="text-center">Verifikasi Warga</th>
                            <th scope="col" class="text-center">Tanggal Diverifikasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataPenerima as $penerima)
                            <tr>
                                <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                                <td class="p-2 col-lg-3 text-center">
                                    {{ $penerima->nama }}
                                    <a href="/dashboard/desa/history/detail/{{ $penerima->id }}"
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
                                <td class="p-2 col-lg-2 text-center">{{ substr($penerima->updated_at, 0, 10) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h5 class="mt-3 text-muted">Belum Ada Bantuan yang Tersalurkan</h5>
            @endif
        </div>
    </main>
@endsection
