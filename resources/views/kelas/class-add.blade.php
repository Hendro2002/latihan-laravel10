@extends('layout.mainlayout')
@section('title', 'Tambah Kelas')
@section('content')
    <div class="container my-3">
        <div class="card">
            <div class="card-header">
                <center>
                    <h1>Form Tambah Kelas</h1>
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
                <form action="/class-store" method="post">
                    @csrf
                    <center>
                        <h3>Kelas</h3>
                    </center>

                    <div class="mb-3">
                        <label for="" class="form-label">Nama Kelas</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="mb-3">
                        @php
                            $no = 1;
                        @endphp
                        <label for="teacher">Wali Kelas</label>
                        <select name="teacher_id" id="class" class="form-select">
                            <option value="">-- Pilih Salah Satu Guru --</option>
                            @foreach ($class as $item)
                                <option value="{{ $item->id }}">{{ $no++ }}. {{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="my-2">
                        <center>
                            <a href="/kelas/class" class="btn btn-secondary">Kembali</a>
                            <button class="btn btn-danger" type="reset">Batal</button>
                            <button class="btn btn-success" type="submit">Kirim</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
