@extends('layouts.navbar')

@section('tampilan')
<a href="{{ route('create.nilai') }}" class="btn btn-primary">Buat Nilai</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Kelas</th>
        <th scope="col">Npm</th>
        <th scope="col">Nilai</th>
      </tr>
    </thead>
    <tbody>
      <?php $i =1; ?>
      @foreach ($daftar_nilai as $dn)
      <tr>
        <td><?= $i ?></td>
        <td>{!! $dn->nama!!}</td>
        <td>{!! $dn->kelas!!}</td>
        <td>{!! $dn->npm!!}</td>
        <td>{!! $dn->nilai!!}</td>
        {{-- <td>{!! $dn->id!!}</td> --}}
        <td>
          <a href="{{ route('edit.nilai', $dn->id) }}" class="btn btn-warning">Edit</a>
          <a href="{{ route('delete.nilai', $dn->id) }}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      <?php $i++; ?>
      @endforeach
    </tbody>
  </table>

@endsection
