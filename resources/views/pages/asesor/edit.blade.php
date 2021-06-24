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
                            <label for="id_user">User</label>
                            <select class="form-control" aria-label="Default select example" name="id_user" id="id_user"
                                disabled>
                                <option>Open this select menu</option>
                                @foreach ($user as $item)
                                    @if ($item->id == $asesor->id_user)
                                        <option selected value="{{ $item->id }}">{{ $item->name }}</option>
                                    @else
                                        <option selected value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="nama">Nama</label>
                            <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama"
                                value="{{ $asesor->nama }}" required>
                        </div>
                        <button class="btn btn-success" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
