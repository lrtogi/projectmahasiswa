@extends('layouts.app')

@section('content')
<a class="btn btn-md btn-primary" href="{{ route('mahasiswa/create') }}">Add</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">NIM</th>
        <th scope="col">Nama</th>
        <th scope="col">Foto</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
@foreach ($data as $row)
    <tr>
        <th scope="row">{{ $row->nim }}</th>
        <td>{{ $row->nama }}</td>
        <td><img src="{{ URL::to('/') }}/uploads/{{ $row->foto }}" alt=""></td>
        <td>Action</td>
    </tr>
@endforeach
    </tbody>
</table>
@endsection
