@extends('layout.mainlayout')
@section('title', 'Tambah Ekstrakurikuler')
@section('content')
    <div class="container my-3">
        <div class="card">
            <div class="card-header">
                <center>
                    <h1>Form Tambah Ekstrakurikuler</h1>
                </center>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="card-body">
                <form action="/extracurricular-store" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="" class="form-label">Nama Ekstrakurikuler</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="my-2">
                        <center>
                            <a href="/ekskul/extracurricular" class="btn btn-secondary">Kembali</a>
                            <button class="btn btn-danger" type="reset">Batal</button>
                            <button class="btn btn-success" type="submit">Kirim</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
