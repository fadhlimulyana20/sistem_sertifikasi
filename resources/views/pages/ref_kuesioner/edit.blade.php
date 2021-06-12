@extends('layouts.admin-master')

@section('title')
    Edit Kuesioner
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Edit Kuesioner</h1>
  </div>

  <div class="section-body">
      <div class="container">
            @if ($errors->any())
                {{ implode('', $errors->all('<div>:message</div>')) }}
            @endif
          <div class="bg-white p-3 rounded">
              <form action="{{ route('ref_kuesioner.update', $ref_kuesioner->id) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="mb-3">
                      <label class="form-label" for="pertanyaan">Pertanyaan</label>
                      <input class="form-control" type="text" name="pertanyaan" id="pertanyaan" placeholder="Pertanyaan" value="{{ $ref_kuesioner->pertanyaan }}"
                          required>
                  </div>
                  <div class="form-check mb-3">
                      {{-- checkbox belum mengubah status aktif --}}
                      <input class="form-check-input" type="checkbox" name="is_aktif" id="is_aktif" value="{{ $ref_kuesioner->is_active }}" >
                      <label class="form-check-label" for="is_aktif">Active?</label>
                  </div>
                  <button class="btn btn-success" type="submit">Simpan</button>
              </form>
          </div>
      </div>
  </div>
</section>
@endsection
