@extends('layouts.admin-master')

@section('title')
    Unit Kompetensi
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Unit Kompetensi</h1>
        </div>

        <div class="section-body">
            <div class="container py-5">
                <div class="bg-white p-3 rounded">
                    <a class="btn btn-success" href="{{ route('ref_unit_kompetensi.create') }}">Tambah</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope=>#</th>
                                    <th scope=>Nama</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ref_unit_kompetensi as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->nama }}</td>
                                        <td class="d-flex justify-content-start gap-2">
                                            <div>
                                                <a class="btn btn-link" href="{{ route('ref_unit_kompetensi.edit', $item->id) }}">Edit</a>
                                            </div>
                                            <div>
                                                <form action="{{ route('ref_unit_kompetensi.destroy', $item->id) }}" method="POST">
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
