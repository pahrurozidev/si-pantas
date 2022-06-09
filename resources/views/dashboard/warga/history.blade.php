@extends('dashboard.layouts.main')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
        <div
            class="d-flex justify-content-between text-center flex-wrap flex-column flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2 m-auto">History bantuan</h1>
            <p class="my-2 col-lg-8 m-auto">Dapatkan informasi bantuan sosial yang telah anda diterima</p>
        </div>
        <div class="col-lg-12">
            {{-- bantuan terverifikasi --}}
            @if ($penerima[0]->status_warga == 'verifikasi')
                <table class="table-bordered col-lg-12 mt-3">
                    <thead class="bg-secondary text-white">
                        <tr>
                            <th scope="col" class="text-center p-2">Nama Penerima</th>
                            <th scope="col" class="text-center p-2">Jenis Bantuan</th>
                            <th scope="col" class="text-center p-2">Desa</th>
                            <th scope="col" class="text-center p-2">Tanggal Diterima</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center p-2">
                                {{ $penerima[0]->nama }}
                                <a href="/dashboard/warga/history/detail/{{ $penerima[0]->id }}"
                                    class="text-decoration-none text-dark d-inline-block text-white badge bg-primary">
                                    <i class="bi bi-eye"></i>
                                </a>
                            </td>
                            <td class="text-center p-2">{{ $penerima[0]->jenis_bantuan }}</td>
                            <td class="text-center p-2">{{ $penerima[0]->desa }}</td>
                            <td class="text-center p-2">{{ substr($penerima[0]->created_at, 0, 10) }}</td>
                        </tr>
                </table>
            @else
                <p class="text-muted mt-4 text-center" style="font-style: italic;">Riwayat bantuan masih kosong!</p>
            @endif
        </div>
    </main>
@endsection
