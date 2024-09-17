@extends('layout.mainlayout')
@section('title', 'Tambah Kelas')
@section('content')
    <h1>Ini Halaman Penambahan Kelas</h1>

    <div class="mt5 col-8 m-auto">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/class-store" method="post">
            @csrf
            <div class="mb-3">
                <label for="name">Nama Kelas</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            @php
                $no = 1;
            @endphp
            <div class="mb-3">
                <label for="teacher">Guru</label>
                <select name="teacher_id" id="class" class="form-select">
                    <option value="">Select One</option>
                    @foreach ($class as $item)
                        <option value="{{ $item->id }}">{{ $no++ }}. {{ $item->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>

        </form>
    </div>


@endsection
