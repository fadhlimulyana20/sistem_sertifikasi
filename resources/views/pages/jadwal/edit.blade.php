<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container py-5">
        <h1>Mengubah Jadwal</h1>
        <form action="{{ route('jadwal.update', $jadwal->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label" for="tanggal_awal">Tanggal Awal</label>
                <input class="form-control" type="date" name="tanggal_awal" id="tanggal_awal"
                    value="{{ $jadwal->tanggal_awal }}" placeholder="Tanggal Awal" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="tanggal_akhir">Tanggal Akhir</label>
                <input class="form-control" type="date" name="tanggal_akhir" id="tanggal_akhir"
                    value="{{ $jadwal->tanggal_akhir }}" placeholder="Tanggal Akhir" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5"
                    required>{{ $jadwal->deskripsi }}</textarea>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="is_show" value="" id="is_show">
                <label class="form-check-label" for="is_show">
                    Tampilkan?
                </label>
            </div>
            <button class="btn btn-success" type="submit">Simpan</button>
        </form>
    </div>
</body>

</html>
