@extends('layout.mainlayout')
@section('title', 'Data Guru')
@section('content')
    <div class="container my-3">
        <center>
            <h1>Data Guru</h1>
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
        <a href="teacher-add" class="btn btn-primary">Tambah Data</a>
        <hr>
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Guru</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($teacherList->count() > 0)
                        @foreach ($teacherList as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->name }}</td>
                                <td>
                                    <a href="teacher-detail/{{ $data->id }}" class="btn btn-secondary">Detail</a>
                                    <a href="teacher-edit/{{ $data->id }}" class="btn btn-warning">Edit</a>
                                    <a href="teacher-delete/{{ $data->id }}" class="btn btn-danger">Delete</a>
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
