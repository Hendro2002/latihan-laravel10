@extends('layout.mainlayout')
@section('title', 'Edit Extrakurikuler')
@section('content')
    <h1>Ini Halaman Edit Extrakulikuler</h1>

    <div class="mt5 col-8 m-auto">
        <form action="/extracurricular-update/{{ $ekskul->id }}" method="POST">
            @method('PUT')
            @csrf

            <div class="mb-3">
                <label for="name">Nama Extra</label>
                <input type="text" class="form-control" id="name" name="name" required value="{{ $ekskul->name }}">
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>

        </form>
    </div>


@endsection
