@extends('layouts.admin-master')

@section('title', 'Jadwal')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Jadwal</h1>
        </div>
        <div class="section-body">
            <div class="container ">
                <div class="bg-white p-3 rounded">
                    <a class="btn btn-success mb-3" href="{{ route('jadwal.create') }}">Tambah</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Kegiatan</th>
                                    <th scope="col">Tanggal Awal</th>
                                    <th scope="col">Tanggal Akhir</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jadwal as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->kegiatan->nama_kegiatan }}</td>
                                        <td>{{ $item->tanggal_awal }}</td>
                                        <td>{{ $item->tanggal_akhir }}</td>
                                        <td class="d-flex justify-content-start gap-2">
                                            <div>
                                                <a class="btn btn-link" href="{{ route('jadwal.edit', $item->id) }}">Edit</a>
                                            </div>
                                            <div>
                                                <form action="{{ route('jadwal.destroy', $item->id) }}" method="POST">
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
