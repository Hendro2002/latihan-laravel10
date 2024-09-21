@extends('layout.mainlayout')
@section('title', 'Edit Kelas')
@section('content')
    <div class="container my-3">
        <div class="card">
            <div class="card-header">
                <center>
                    <h1>Form Edit Data Kelas</h1>
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
                <form action="/class-update/{{ $class->id }}" method="post">
                    @method('PUT')
                    @csrf
                    <center>
                        <h3>Kelas {{ $class->name }}</h3>
                    </center>

                    <div class="mb-3">
                        <label for="" class="form-label">Nama Kelas</label>
                        <input type="text" class="form-control" name="name" value="{{ $class->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="teacher">Wali Kelas</label>
                        @php
                            $no = 1;
                        @endphp
                        <select name="teacher_id" id="class" class="form-select">
                            <option value="{{ $class->teacher_id }}">{{ $class->homeroomTeacher->name }}</option>

                            @foreach ($teacher as $item)
                                <option value="{{ $item->id }}"> {{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="my-2">
                        <center>
                            <a href="/kelas/class" class="btn btn-secondary">Kembali</a>
                            <button class="btn btn-danger" type="reset">Batal</button>
                            <button class="btn btn-success" type="submit">Simpan</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
