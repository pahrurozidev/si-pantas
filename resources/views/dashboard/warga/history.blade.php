@extends('dashboard.layouts.main')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
        <div class="d-flex justify-content-between flex-wrap flex-column flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">History Bantuan Yang Diterima</h1>
        </div>
        @if (count($penerima) === 0)
            <h5 class="text-muted mt-4">History bantuan belum ada!</h5>
        @else
            <div class="col-lg-12">
                {{-- bantuan terverifikasi --}}
                @if ($penerima[0]->status_warga == 'verifikasi')
                    <table class="table-bordered mt-3">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th scope="col" class="text-center">Nama Penerima</th>
                                <th scope="col" class="text-center">Jenis Bantuan</th>
                                <th scope="col" class="text-center">Desa</th>
                                <th scope="col" class="text-center">Tanggal Diterima</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-2 col-lg-3 text-center">
                                    {{ $penerima[0]->nama }}
                                    <a href="/dashboard/warga/detail/{{ $penerima[0]->id }}"
                                        class="text-decoration-none text-dark d-inline-block text-white badge bg-primary">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>
                                <td class="p-2 text-center">{{ $penerima[0]->jenis_bantuan }}</td>
                                <td class="p-2 text-center">{{ $penerima[0]->desa }}</td>
                                <td class="p-2 text-center">{{ substr($penerima[0]->created_at, 0, 10) }}</td>
                            </tr>
                    </table>
                @else
                    <h5 class="mt-5 text-center">Belum Ada Bantuan yang Diterima</h5>
                @endif
            </div>
        @endif
    </main>
@endsection
