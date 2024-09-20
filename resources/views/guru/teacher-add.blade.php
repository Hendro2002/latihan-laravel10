@extends('layout.mainlayout')
@section('title', 'Tambah Guru')
@section('content')
    <div class="container my-3">
        <div class="card">
            <div class="card-header">
                <center>
                    <h1>Form Tambah Guru</h1>
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
                <form action="/teacher-store" method="post">
                    @csrf
                    <center>
                        <h3>Identitas Guru</h3>
                    </center>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="my-2">
                        <center>
                            <a href="/guru/teacher" class="btn btn-secondary">Kembali</a>
                            <button class="btn btn-danger" type="reset">Batal</button>
                            <button class="btn btn-success" type="submit">Kirim</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
