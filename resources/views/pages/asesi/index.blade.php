@extends('layouts.admin-master')

@section('title')
    Asesi
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Asesi</h1>
        </div>

        <div class="section-body">
            <div class="container">
                <div class="bg-white p-3 rounded">
                    <a href="{{ route('asesi.create') }}" class="btn btn-success mb-3">Tambah</a>
                    <div class="table-responsive">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($asesi as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->user->email }}</td>
                                        <td class="d-flex justify-content-start gap-2">
                                            <div>
                                                <a class="btn btn-link"
                                                    href="{{ route('jadwal.show', $item->id) }}">Lihat</a>
                                            </div>
                                            <div>
                                                <a class="btn btn-link"
                                                    href="{{ route('asesi.edit', $item->id) }}">Edit</a>
                                            </div>
                                            <div>
                                                <form action="{{ route('asesi.destroy', $item->id) }}" method="POST">
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


<body>
</body>
