@extends('layout.mainlayout')
@section('title', 'Tambah Siswa')
@section('content')
    <div class="container my-3">
        <div class="card">
            <div class="card-header">
                <center>
                    <h1>Form Tambah Siswa</h1>
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
                <form action="/student-store" method="post">
                    @csrf
                    <center>
                        <h3>Identitas Siswa</h3>
                    </center>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">NIS</label>
                        <input type="text" class="form-control" name="nis">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <select name="gender" id="" class="form-select">
                            <option value=""> -- Pilih Jenis Kelamin --</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="class">Kelas</label>
                        <select name="class_id" class="form-select">
                            <option value="">-- Pilih Kelas --</option>
                            @foreach ($class as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="my-2">
                        <center>
                            <a href="/siswa/students" class="btn btn-secondary">Kembali</a>
                            <button class="btn btn-danger" type="reset">Batal</button>
                            <button class="btn btn-success" type="submit">Kirim</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
