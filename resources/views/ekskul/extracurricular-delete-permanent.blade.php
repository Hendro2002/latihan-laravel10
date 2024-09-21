@extends('layout.mainlayout')
@section('title', 'Hapus Ekstrakurikuler secara Permanen')
@section('content')
    <div class="container my-3">
        <a href="/ekskul/extracurricular-deleted" class="btn btn-primary">Kembali</a>

        <div class="card mt-3">
            <div class="card-header">
                <center>
                    <h1>Hapus data Ekstrakurikuler secara Permanen</h1>
                </center>
            </div>

            <div class="card-body">
                <div class="alert alert-danger" role="alert">
                    <h3><i class='bx bx-error'></i> Data yang dihapus tidak dapat dikembalikan!</h3>
                </div>

                <div class="my-2">
                    <center>
                        <h2>Apakah anda yakin akan menghapus data dari Ekstrakurikuler {{ $ekskul->name }} ?</h2>
                    </center>
                </div>

                <div class="my-2 mt-3">
                    <center>
                        <form action="/extracurricular-force-destroy/{{ $ekskul->id }}" style="display:inline-block"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                        <a href="/ekskul/extracurricular-deleted" class="btn btn-primary">Cancel</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
@endsection
