@extends('template')
@section('main')
    <h2>Ini halaman coba</h2>

    @for ($i = 1; $i <= 10; $i++)
        @if ($i % 2)
            <h2>ini perulangan menggunakan blade</h2>
        @endif
    @endfor

    @php
        $no = 2;
        echo $no;
    @endphp

    <img src="{{ asset('img/foto.jpg') }}" width="400" alt="">
@endsection
