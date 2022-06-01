@extends('dashboard.layouts.main')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">History Bantuan Sosial</h1>
    </div>
    <div class="col-lg-12">
        <table class="table-bordered mt-3">
            <thead class="bg-secondary text-white">
                <tr>
                    <th scope="col" class="text-center p-2">No</th>
                    <th scope="col" class="text-center">Nama Penerima</th>
                    <th scope="col" class="text-center">Jenis Bantuan</th>
                    <th scope="col" class="text-center">Jumlah Bantuan</th>
                    <th scope="col" class="text-center">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($history as $item)
                <tr>
                    <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                    <td class="p-2 text-center">{{ $item->user->nama }}</td>
                    <td class="p-2 text-center">{{ $item->jenisBantuan->nama_bantuan }}</td>
                    <td class="p-2 text-center">Rp. {{ $item->informasi->jmlh_bantuan }}</td>
                    <td class="p-2 text-center">{{ substr($item->informasi->created_at, 0, 10) }}</td>
                </tr>
                @endforeach
        </table>
    </div>
    </div>
</main>
@endsection