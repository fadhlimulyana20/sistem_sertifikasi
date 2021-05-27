<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body>
    <div class="container py-5">
        <h1>Asesor</h1>
        <a class="btn btn-success" href="{{ route('asesor.create') }}">Tambah</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope=>#</th>
                    <th scope=>Nama</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($asesor as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->nama }}</td>
                        <td class="d-flex justify-content-start gap-2">
                            <div>
                                <a class="btn btn-link" href="{{ route('asesor.show', $item->id) }}">Lihat</a>
                            </div>
                            <div>
                                <a class="btn btn-link" href="{{ route('asesor.edit', $item->id) }}">Edit</a>
                            </div>
                            <div>
                                <form action="{{ route('asesor.destroy', $item->id) }}" method="POST">
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

</html>