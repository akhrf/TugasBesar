@extends('layouts.navbar')

@section('tampilan')
<a href="{{ route('home') }}" class="btn btn-primary">Kembali</a>

<form action="{{ route('update.nilai', $nilai->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Nama Lengkap</label>
      <input type="text" class="form-control" id="name" name="nama" value="{{ $nilai->nama }}" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="kelas" class="form-label">Kelas</label>
      <input type="text" class="form-control" id="kelas" name="kelas" value="{{ $nilai->kelas }}" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="npm" class="form-label">Npm</label>
        <input type="text" class="form-control" id="npm" name="npm" value="{{ $nilai->npm }}" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="nilai" class="form-label">Nilai</label>
        <input type="number" class="form-control" id="nilai" name="nilai" value="{{ $nilai->nilai }}" aria-describedby="emailHelp">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
