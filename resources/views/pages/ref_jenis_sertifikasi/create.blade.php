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
        <h1>Menambahkan Jenis Sertifikasi</h1>
        <form action="{{route('ref_jenis_sertifikasi.store')}}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label class="form-label" for="nama">Nama</label>
                <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama" required>
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea class="form-control" name="keterangan" id="keterangan" rows="2" required></textarea>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-check mb-3" style="float: right; ">

                        <label class="form-check-label" for="status_jenis_sertifikasi">status jenis sertifikasi</label>
                        <input type="hidden" name="status_jenis_sertifikasi" value="0" id="status_jenis_sertifikasi" />
                        <input class="form-check-input" type="checkbox" name="status_jenis_sertifikasi" value="1" id="status_jenis_sertifikasi">
                    </div>
                </div>
                <div class="col">
                  <div class="form-check mb-3" >
                <label class="form-check-label" for="is_aktif">active?</label>
                <input class="form-check-input" type="checkbox" name="is_aktif" value="" id="is_aktif">
                    </div>
                </div>
              </div>
            <button class="btn btn-success" type="submit">Save</button>
        </form>
    </div>
</body>
</html>
