@extends('layout.mainlayout')
@section('title', 'Hapus Data Ekstrakurikuler {{ $ekskul->name }}')
@section('content')
    <div class="container my-3">
        <a href="/ekskul/extracurricular" class="btn btn-primary">Kembali</a>

        <div class="card mt-3">
            <div class="card-header">
                <center>
                    <h1>Hapus Ekstrakurikuler</h1>
                </center>
            </div>

            <div class="card-body">
                <div class="my-2">
                    <center>
                        <h2>Apakah anda yakin akan menghapus data dari Ekstrakurikuler {{ $ekskul->name }} ?</h2>
                    </center>
                </div>

                <div class="my-2 mt-3">
                    <center>
                        <form action="/extracurricular-destroy/{{ $ekskul->id }}" style="display:inline-block"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="/ekskul/extracurricular" class="btn btn-primary">Cancel</a>
                    </center>
                </div>
                </form>
            </div>

        </div>
    </div>

@endsection
