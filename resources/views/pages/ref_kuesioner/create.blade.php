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
        <h1>Menambahkan Kuesioner</h1>
        <form action="{{ route('ref_kuesioner.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label class="form-label" for="pertanyaan">Pertanyaan</label>
                <input class="form-control" type="text" name="pertanyaan" id="pertanyaan"
                    placeholder="Pertanyaan" required>
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
