@extends('layouts.admin-master')

@section('title')
    Edit Kegiatan
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Edit Kegiatan</h1>
  </div>

  <div class="section-body">
      <div class="container">
            @if ($errors->any())
                {{ implode('', $errors->all('<div>:message</div>')) }}
            @endif
          <div class="bg-white p-3 rounded">
              <form action="{{ route('ref_kegiatan.update', $ref_kegiatan->id) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="mb-3">
                      <label class="form-label" for="nama_kegiatan">Nama Kegiatan</label>
                      <input class="form-control" type="text" name="nama_kegiatan" id="nama_kegiatan" placeholder="nama" value="{{ $ref_kegiatan->nama_kegiatan }}"
                          required>
                      <label class="form-lable" for="deskripsi">Deskripsi</label>
                      <input class="form-control" type="text" name="deskripsi" id="deskripsi" placeholder="deskripsi" value="{{ $ref_kegiatan->deskripsi }}"
                          required>
                  </div>
                  <button class="btn btn-success" type="submit">Simpan</button>
              </form>
          </div>
      </div>
  </div>
</section>
@endsection
