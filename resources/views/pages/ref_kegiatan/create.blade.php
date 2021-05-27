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
        <h1>Menambahkan Kegiatan</h1>
        <form action="{{ route('ref_kegiatan.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label class="form-label" for="periode">Periode</label>
                <input class="form-control" type="text" name="periode" id="periode"
                    placeholder="Periode" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_kegiatan" class="form-label">Deskripsi Kegiatan</label>
                <textarea class="form-control" name="deskripsi_Kegiatan" id="deskripsi_kegiatan" rows="5" required></textarea>
            </div>
            {{-- <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="is_active" value="" id="is_active">
                <label class="form-check-label" for="is_active">
                    Active?
                </label>
            </div> --}}
            <button class="btn btn-success" type="submit">Simpan</button>
        </form>
    </div>
</body>

</html>
