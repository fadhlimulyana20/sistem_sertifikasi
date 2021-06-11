@extends('layouts.admin-master')

@section('title')
    Menambah Kuesioner
@endsection

@section('content')
    <section class="section">
    <div class="section-header">
        <h1>Menambah Kuesioner</h1>
    </div>
    <div class="section-body">
        <div class="bg-white p-3 rounded">
            <div class="container py-5">
                <form action="{{ route('ref_kuesioner.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label class="form-label" for="pertanyaan">Pertanyaan</label>
                        <input class="form-control" type="text" name="pertanyaan" id="pertanyaan"
                            placeholder="Pertanyaan" required>
                    </div>
                    <div class="form-check mb-3">
                        {{-- checkbox belum mengubah status aktif --}}
                        <input class="form-check-input" type="checkbox" name="is_aktif" value="" id="is_aktif">
                        <label class="form-check-label" for="is_aktif">
                            Aktif?
                        </label>
                    </div>
                    <button class="btn btn-success" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
