@extends('layout.mainlayout')
@section('title', 'List Ekstrakurikular Terhapus')
@section('content')
    <div class="container my-3">
        <center>
            <h1>Data Ekstrakurikular Terhapus</h1>
        </center>

        <hr>
        <div class="d-flex justify-content-between">
            <a href="/ekskul/extracurricular" class="btn btn-primary">Kembali</a>
        </div>
        <hr>

        @if (Session::has('status-restore'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message-restore') }}
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Ekstrakurikuler</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @if ($ekskul->count() > 0)
                        @foreach ($ekskul as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->name }}</td>
                                <td>
                                    <a href="/ekskul/extracurricular/{{ $data->id }}/restore"
                                        class="btn btn-success">Restore</a>
                                    <a href="extracurricular-delete-permanent/{{ $data->id }}"
                                        class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">
                                <center>
                                    <h3>Data Kosong</h3>
                                </center>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
