@extends('layout.mainlayout')
@section('title', 'Data Ekstrakurikuler')
@section('content')
    <div class="container my-3">
        <center>
            <h1>Data Ekstrakurikuler</h1>
        </center>

        @if (Session::has('status-add'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message-add') }}
            </div>
        @endif

        @if (Session::has('status-update'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message-update') }}
            </div>
        @endif

        @if (Session::has('status-delete'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message-delete') }}
            </div>
        @endif

        <hr>
        <div class="d-flex justify-content-between">
            <a href="extracurricular-add" class="btn btn-primary">Tambah Data</a>
            <a href="extracurricular-deleted" class="btn btn-info">Data Terhapus</a>
        </div>
        <hr>

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
                    @if ($ekskulList->count() > 0)
                        @foreach ($ekskulList as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->name }}</td>
                                <td>
                                    <a href="extracurricular-detail/{{ $data->id }}"
                                        class="btn btn-secondary">Detail</a>
                                    <a href="extracurricular-edit/{{ $data->id }}" class="btn btn-warning">Edit</a>
                                    <a href="extracurricular-delete/{{ $data->id }}" class="btn btn-danger">Delete</a>
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
