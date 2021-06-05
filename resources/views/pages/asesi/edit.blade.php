@extends('layouts.admin-master')

@section('title')
    Mengubah Asesi
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Mengubah Asesi</h1>
        </div>

        <div class="section-body">
            <div class="container">
                @if ($errors->any())
                    {{ implode('', $errors->all('<div>:message</div>')) }}
                @endif
                <div class="bg-white p-3 rounded">
                    <form action="{{ route('asesi.update', $asesi->id) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="mb-3">
                            <label for="id_user">User</label>
                            <select class="form-control" aria-label="Default select example" name="id_user" id="id_user"
                                disabled>
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
                            <input type="text" class="form-control" name="tempat_lahir"
                                value="{{ $asesi->tempat_lahir }}">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir"
                                value="{{ $asesi->tanggal_lahir }}">
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-control" aria-label="Default select example" name="jenis_kelamin"
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
            </div>
        </div>
    </section>
@endsection

<body>
</body>
