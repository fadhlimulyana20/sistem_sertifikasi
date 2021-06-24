@extends('layouts.admin-master')

@section('title')
    Kegiatan
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Kegiatan</h1>
        </div>

        <div class="section-body">
            <div class="container py-5">
                <div class="bg-white p-3 rounded">
                    <a class="btn btn-success mb-3" href="{{ route('ref_kegiatan.create') }}">Tambah</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Kegiatan</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ref_kegiatan as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->nama_kegiatan }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td class="d-flex justify-content-start gap-2">
                                            <div>
                                                <a class="btn btn-link" href="{{ route('ref_kegiatan.edit', $item->id) }}">Edit</a>
                                            </div>
                                            <div>
                                                <form action="{{ route('ref_kegiatan.destroy', $item->id) }}" method="POST">
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
