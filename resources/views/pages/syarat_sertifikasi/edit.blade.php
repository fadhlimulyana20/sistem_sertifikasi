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
        <h1>Mengubah Syarat</h1>
        <form action="{{ route('syarat_sertifikasi.update', $syarat_sertifikasi->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <input class="form-control" type="text" name="syarat" id="syarat"
                    value="{{ $syarat_sertifikasi->syarat }}" placeholder="Syarat" required>
            </div>
            <button class="btn btn-success" type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>