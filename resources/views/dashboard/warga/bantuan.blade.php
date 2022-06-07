@extends('dashboard.layouts.main')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
        <div class="d-flex justify-content-between flex-wrap flex-column flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Bantuan Bulan Ini</h1>
            <p>Silakan klik tombol centang jika anda sudah menerima bantuan ini baik dalam bentuk tunai maupun non-tunai!
            </p>
        </div>
        <div class="col-lg-12">
            {{-- bantuan terverifikasi --}}
            @if (session()->has('successUpdate'))
                <div class="alert col-lg-8 alert-success alert-dismissible fade show mt-3 mb-0" role="alert">
                    {{ session('successUpdate') }} Lorem ipsum dolor sit.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="col-lg-12">
                {{-- bantuan terverifikasi --}}
                @if (session()->has('successUpdate'))
                    <div class="alert alert-success alert-dismissible fade show mt-3 mb-0" role="alert">
                        {{ session('successUpdate') }} Lorem ipsum dolor sit.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (count($penerima) === 0)
                    <h5 class="text-muted mt-4">Data anda tidak terdaftar mendapatkan bantuan sosial bulan ini</h5>
                @else
                    <table class="table-bordered mt-3">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th scope="col" class="text-center">Nama Penerima</th>
                                <th scope="col" class="text-center">Jenis Bantuan</th>
                                <th scope="col" class="text-center">Desa</th>
                                <th scope="col" class="text-center">Verifikasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-2 col-lg-4 text-center">
                                    {{ $penerima[0]->nama }}
                                    <a href="/dashboard/warga/detail/{{ $penerima[0]->id }}"
                                        class="text-decoration-none text-dark d-inline-block text-white badge bg-primary">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>
                                <td class="p-2 text-center col-lg-4">{{ $penerima[0]->jenis_bantuan }}</td>
                                <td class="p-2 text-center col-lg-4">{{ $penerima[0]->desa }}</td>
                                @if ($penerima[0]->status_warga == 'verifikasi')
                                    <td class="py-2 px-5 text-center col-lg-4"><span
                                            class="badge bg-primary">Terverifikasi</span>
                                    </td>
                                @else
                                    <td class="py-2 px-5 text-center col-lg-4">
                                        <form action="/dashboard/warga/bantuan/{{ $penerima[0]->id }}" method="POST">
                                            @method('put')
                                            @csrf
                                            <input type="hidden" name="status_warga" value="verifikasi">
                                            <button class="btn btn-primary"
                                                onclick="return confirm('Apakah anda yakin?')"><i
                                                    class="bi bi-check"></i></button>
                                        </form>
                                    </td>
                                @endif
                            </tr>
                    </table>
                @endif
            </div>
        </div>
    </main>
@endsection
