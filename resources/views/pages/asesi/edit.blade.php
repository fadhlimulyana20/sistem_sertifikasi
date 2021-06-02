<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Asesi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body>
    <div class="container py-5">
        <h1>Menambahkan Asesi</h1>
        @if ($errors->any())
            {{ implode('', $errors->all('<div>:message</div>')) }}
        @endif
        <form action="{{ route('asesi.update', $asesi->id) }}" method="POST">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="id_user">User</label>
                <select class="form-select" aria-label="Default select example" name="id_user" id="id_user" disabled>
                    <option>Open this select menu</option>
                    @foreach ($user as $item)
                        @if ($item->id == $asesi->id_user)
                            <option selected value="{{ $item->id }}">{{ $item->name }}</option>
                        @else
                            <option selected value="{{ $item->id }}">{{ $item->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" name="nim" value="{{ $asesi->nim }}">
            </div>
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" class="form-control" name="nik" value="{{ $asesi->nik }}">
            </div>
            <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" value="{{ $asesi->tempat_lahir }}">
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" value="{{ $asesi->tanggal_lahir }}">
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" aria-label="Default select example" name="jenis_kelamin"
                    value="{{ $asesi->jenis_kelamin }}">
                    <option selected>Open this select menu</option>
                    @if ($asesi->jenis_kelamin == '0')
                        <option selected value="0">Perempuan</option>
                        <option value="1">Laki-laki</option>
                    @elseif ($asesi->jenis_kelamin == "1")
                        <option value="0">Perempuan</option>
                        <option selected value="1">Laki-laki</option>
                    @endif
                </select>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="{{ $asesi->alamat }}">
            </div>
            <div class="mb-3">
                <label for="no_telepon" class="form-label">No Telepon</label>
                <input type="text" class="form-control" name="no_telepon" value="{{ $asesi->no_telepon }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $asesi->email }}">
            </div>
            <div class="mb-3">
                <label for="kualifikasi_pendidikan" class="form-label">Kualifikasi Pendidikan</label>
                <input type="text" class="form-control" name="kualifikasi_pendidikan"
                    value="{{ $asesi->kualifikasi_pendidikan }}">
            </div>
            <div class="py-3">
                <button class="btn btn-success" type="submit">Simpan</button>
            </div>
        </form>
    </div>
</body>

</html>
