@extends('layouts.app')

@section('content')

<form action="{{ route('mahasiswa/store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Enter Nama">
    </div>
    <div class="mb-3">
        <label class="form-label" for="inputFile">Foto:</label>
        <input
            type="file"
            name="file"
            id="inputFile"
            class="form-control @error('file') is-invalid @enderror">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection
