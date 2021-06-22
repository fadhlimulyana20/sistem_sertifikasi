@extends('layouts.admin-master')

@section('title')
    Edit Asesor
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Edit Asesor</h1>
  </div>

  <div class="section-body">
      <div class="container">
            @if ($errors->any())
                {{ implode('', $errors->all('<div>:message</div>')) }}
            @endif
          <div class="bg-white p-3 rounded">
              <form action="{{ route('asesor.update', $asesor->id) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="mb-3">
                      <label class="form-label" for="nama">Nama</label>
                      <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama" value="{{ $asesor->nama }}"
                          required>
                  </div>
                  <button class="btn btn-success" type="submit">Simpan</button>
              </form>
          </div>
      </div>
  </div>
</section>
@endsection

