@extends('layouts.admin-master')

@section('title')
Mengubah Ref Jenis Sertifikasi
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Mengubah Ref Jenis Sertifikasi</h1>
  </div>

  <div class="section-body">
      <div class="container">
        <div class="bg-white p-3 rounded">
          <form action="{{route('ref_jenis_sertifikasi.update',$ref_jenis_sertifikasi->id)}}" method="POST">
              @csrf
              @method('PUT')
              <div class="mb-3">
                  <label class="form-label" for="nama">Nama</label>
                  <input class="form-control" type="text" name="nama" id="nama" value="{{$ref_jenis_sertifikasi->nama}}" placeholder="Nama" required>
              </div>

              <div class="mb-3">
                  <label for="keterangan" class="form-label">Keterangan</label>
                  <textarea class="form-control" name="keterangan" id="keterangan" rows="2" required>{{$ref_jenis_sertifikasi->nama}}</textarea>
              </div>
              <div class="row">
                  <div class="col">
                    <div class="form-check mb-3" style="float: right">
                        <input class="form-check-input" type="checkbox" name="status_jenis_sertifikasi" value="1" id="status_jenis_sertifikasi">
                        <input type="hidden" name="status_jenis_sertifikasi" value="0" id="status_jenis_sertifikasi" />
                        <label class="form-check-label" for="status_jenis_sertifikasi">
                            Status jenis sertifikasi
                        </label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="is_aktif" value="" id="is_aktif">
                        <label class="form-check-label" for="is_aktif">
                            Active?
                        </label>
                    </div>
                  </div>
                </div>
              <button class="btn btn-success" type="submit">Save</button>
          </form>
        </div>
      </div>
  </div>
</section>
@endsection


