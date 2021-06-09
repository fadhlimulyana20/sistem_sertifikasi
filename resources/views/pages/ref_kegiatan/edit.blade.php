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
        <h1>Mengubah Unit Kompetensi</h1>
        <form action="{{ route('ref_kegiatan.update', $ref_kegiatan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label" for="nama_kegiatan">Nama Kegiatan</label>
                <input class="form-control" type="text" name="nama_kegiatan" id="nama_kegiatan" placeholder="nama"
                    required>
                <label class="form-lable" for="deskripsi">Deskripsi</label>
                <input class="form-control" type="text" name="deskripsi" id="deskripsi" placeholder="deskripsi"
                    required>
            </div>
            <button class="btn btn-success" type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>
