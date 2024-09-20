@extends('layout.mainlayout')
@section('title', 'Detail Ekstrakurikuler {{ $ekskul->name }}')
@section('content')
    <div class="container my-3">
        <a href="/ekskul/extracurricular" class="btn btn-primary">Kembali</a>
        <div class="card mt-3">
            <div class="card-header">
                <center>
                    <h1>Detail Ekstrakurikuler {{ $ekskul->name }}</h1>
                </center>
            </div>
            <div class="card-body">
                <div class="table-responsive mt-3">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th>Nama Ekstrakurikuler</th>
                            <td>{{ $ekskul->name }}</td>
                        </tr>
                        <tr>
                            <th>Siswa</th>
                            <td>
                                <ol>
                                    @foreach ($ekskul->students as $item)
                                        <li>{{ $item->name }}</li>
                                    @endforeach
                                </ol>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
