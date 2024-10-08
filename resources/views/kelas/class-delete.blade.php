@extends('layout.mainlayout')
@section('title', 'Hapus Data Kelas')
@section('content')
    <div class="container my-3">
        <a href="/kelas/class" class="btn btn-primary">Kembali</a>
        <div class="card mt-3">
            <div class="card-header">
                <center>
                    <h1>Hapus Kelas</h1>
                </center>
            </div>

            <div class="card-body">
                <div class="my-2">
                    <center>
                        <h2>Apakah anda yakin akan menghapus data Kelas {{ $class->name }} ?</h2>
                    </center>
                </div>

                <div class="my-2 mt-3">
                    <center>
                        <form action="/class-destroy/{{ $class->id }}" style="display:inline-block" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="/kelas/class" class="btn btn-primary">Cancel</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
@endsection
