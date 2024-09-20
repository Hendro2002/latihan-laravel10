@extends('layout.mainlayout')
@section('title', 'Edit Siswa {{ $student->name }}')
@section('content')
    <div class="container my-3">
        <a href="/siswa/students" class="btn btn-primary">Kembali</a>
        <div class="card mt-3">
            <div class="card-header">
                <center>
                    <h1>Form Edit Siswa</h1>
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
                <form action="/student-update/{{ $student->id }}" method="post">
                    @method('PUT')
                    @csrf
                    <center>
                        <h3>Identitas Siswa {{ $student->name }}</h3>
                    </center>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name" value="{{ $student->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">NIS</label>
                        <input type="text" class="form-control" name="nis" value="{{ $student->nis }}">
                    </div>

                    <div class="mb-3">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="form-select">
                            <option value="{{ $student->gender }}">{{ $student->gender }}</option>
                            @if ($student->gender == 'L')
                                <option value="P">Perempuan</option>
                            @else
                                <option value="L">Laki-laki</option>
                            @endif
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="class">Kelas</label>
                        <select name="class_id" class="form-select">
                            <option value="{{ $student->class->id }}">{{ $student->class->name }}</option>
                            @foreach ($class as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="my-2">
                        <center>
                            <a href="/siswa/students" class="btn btn-secondary">Kembali</a>
                            <button class="btn btn-danger" type="reset">Batal</button>
                            <button class="btn btn-success" type="submit">Simpan</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
