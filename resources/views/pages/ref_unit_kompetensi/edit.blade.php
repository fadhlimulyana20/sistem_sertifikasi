@extends('layouts.admin-master')

@section('title')
    Edit Unit Kompetensi
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Edit Unit</h1>
  </div>

  <div class="section-body">
    <div class="container py-5">
        <div class="bg-white p-3 rounded">
        <form action="{{ route('ref_unit_kompetensi.update', $ref_unit_kompetensi->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label" for="nama">Nama</label>
                <input class="form-control" type="text" name="nama" id="nama" placeholder="nama"
                    required>
            </div>
            <button class="btn btn-success" type="submit">Simpan</button>
        </form>
        </div>
    </div>
  </div>
</section>
@endsection
