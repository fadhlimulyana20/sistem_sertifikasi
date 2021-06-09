@extends('layouts.admin-master')

@section('title')
    Syarat Sertifikasi
@endsection

@section('content')
<body>
    <section class="section">
        <div class="section-header">
            <h1>Syarat Sertifikasi</h1>
        </div>
    <div class="container py-5">
        <a class="btn btn-success" href="{{ route('syarat_sertifikasi.create') }}">Tambah</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope=>#</th>
                    <th scope=>Syarat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($syarat_sertifikasi as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->syarat }}</td>
                        <td class="d-flex justify-content-start gap-2">
                            <div>
                                <a class="btn btn-link" href="{{ route('syarat_sertifikasi.edit', $item->id) }}">Edit</a>
                            </div>
                            <div>
                                <form action="{{ route('syarat_sertifikasi.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
@endsection