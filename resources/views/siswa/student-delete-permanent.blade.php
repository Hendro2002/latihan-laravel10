@extends('layout.mainlayout')
@section('title', 'Hapus Murid secara Permanen')
@section('content')
    <div class="container my-3">
        <a href="/siswa/student-deleted-list" class="btn btn-primary">Kembali</a>
        <div class="card mt-3">
            <div class="card-header">
                <center>
                    <h1>Hapus data Siswa secara Permanen</h1>
                </center>
            </div>

            <div class="card-body">
                <div class="alert alert-danger" role="alert">
                    <h3><i class='bx bx-error'></i> Data yang dihapus tidak dapat dikembalikan!</h3>
                </div>

                <div class="my-2">
                    <center>
                        <h2>Apakah anda yakin akan menghapus data secara permanen dari Siswa yang bernama
                            {{ $student->name }} dengan NIS {{ $student->nis }} ?</h2>
                    </center>
                </div>

                <div class="my-2 mt-3">
                    <center>
                        <form action="/student-force-destroy/{{ $student->id }}" style="display:inline-block"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="/siswa/student-deleted-list" class="btn btn-primary">Cancel</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
@endsection
