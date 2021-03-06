@extends('layouts.admin-master')

@section('title')
    Syarat Sertifikasi
@endsection

@section('content')
<body>
    <section class="section">
        <div class="section-header">
            <h1>Mengubah Syarat Sertifikasi</h1>
        </div>
        <div class="container">
            @if ($errors->any())
                {{ implode('', $errors->all('<div>:message</div>')) }}
            @endif
            <div class="bg-white p-3 rounded">
                <form action="{{ route('syarat_sertifikasi.update', $syarat_sertifikasi->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="ref_jenis_sertifikasi">Jenis Sertifikasi</label>
                        <select class="form-control" id="ref_jenis_sertifikasi" name="ref_jenis_sertifikasi">
                            <option selected>Open this select menu</option>
                            @foreach ($ref_jenis_sertifikasi as $item)
                                @if($syarat_sertifikasi->id_ref_jenis_sertifikasi == $item->id)
                                    <option selected value="{{ $item->id }}">{{ $item->nama }}</option>
                                @else 
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endif
                            @endforeach
                        </select>
                    <div class="mb-3">
                        <label class="form-label" for="syarat">Syarat</label>
                        <input class="form-control" type="text" name="syarat" id="syarat"
                            value="{{ $syarat_sertifikasi->syarat }}" placeholder="Syarat" required>
                    </div>
                    <button class="btn btn-success" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </section>
</body>
@endsection
