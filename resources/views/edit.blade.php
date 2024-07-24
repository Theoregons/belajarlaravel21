@extends('template')
@section('main')
    <h2>Edit Data</h2>
    <form action="{{ route('siswa.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">NIS</label>
            <input type="number" class="form-control @error('nis') is-invalid @enderror" id="exampleInputEmail1" name="nis"
                value="{{ $data->nis }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="exampleInputEmail1"
                name="nama" value="{{ $data->nama }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="exampleInputEmail1"
                name="alamat" value="{{ $data->alamat }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
