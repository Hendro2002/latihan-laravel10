@extends('layout.mainlayout')
@section('title', '????')
@section('content')
    <h1>Ini Halaman ???</h1>
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
@endsection
