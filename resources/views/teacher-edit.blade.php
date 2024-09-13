@extends('layout.mainlayout')
@section('title', 'Edit Guru')
@section('content')
    <h1>Ini Halaman Penambahan Guru</h1>

    <div class="mt5 col-8 m-auto">
        <form action="/teacher-update/{{ $teacher->id }}" method="post">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="name">Nama Guru</label>
                <input type="text" class="form-control" id="name" name="name" required value="{{ $teacher->name }}">
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </div>


@endsection
