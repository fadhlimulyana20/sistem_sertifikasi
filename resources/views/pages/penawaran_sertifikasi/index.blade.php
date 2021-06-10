@extends('layouts.admin-master')

@section('title', 'Penawaran Sertifikasi')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Penawaran Sertifikasi</h1>
        </div>
        <div class="section-body">
            <div class="container">
                <div class="bg-white p-3 rounded">
                    <a class="btn btn-success mb-3" href="{{ route('penawaran_sertifikasi.create') }}">Tambah</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Periode</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penawaran_sertifikasi as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->periode }}</td>
                                        <td class="d-flex justify-content-start gap-2">
                                            <div>
                                                <a class="btn btn-link" href="{{ route('penawaran_sertifikasi.show', $item->id) }}">Lihat</a>
                                            </div>
                                            <div>
                                                <a class="btn btn-link" href="{{ route('penawaran_sertifikasi.edit', $item->id) }}">Edit</a>
                                            </div>
                                            <div>
                                                <form action="{{ route('penawaran_sertifikasi.destroy', $item->id) }}" method="POST">
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
                </div>
            </div>
        </div>
    </section>
@endsection
