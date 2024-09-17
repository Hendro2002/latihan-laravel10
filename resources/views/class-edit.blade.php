@extends('layout.mainlayout')
@section('title', 'Edit Kelas')
@section('content')
    <h1>Ini Halaman Edit Kelas</h1>

    <div class="mt5 col-8 m-auto">
        <form action="/class-update/{{ $class->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="name">Nama Kelas</label>
                <input type="text" class="form-control" id="name" name="name" required value="{{ $class->name }}">
            </div>
            @php
                $no = 1;
            @endphp
            <div class="mb-3">
                <label for="teacher">Guru</label>
                <select name="teacher_id" id="class" class="form-select">
                    <option value="{{ $class->teacher_id }}">{{ $class->homeroomTeacher->name }}</option>

                    @foreach ($teacher as $item)
                        <option value="{{ $item->id }}"> {{ $item->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>

        </form>
    </div>
    {{-- {{ $class }}
    {{ $teacher }} --}}


@endsection
