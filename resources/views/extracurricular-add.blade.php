@extends('layout.mainlayout')
@section('title', 'Tambah Extrakurikuler')
@section('content')
    <h1>Ini Halaman Penambahan Extrakulikuler</h1>

    <div class="mt5 col-8 m-auto">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/extracurricular-store" method="post">
            @csrf
            <div class="mb-3">
                <label for="name">Nama Extra</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>

        </form>
    </div>


@endsection
