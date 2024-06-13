@extends('layout.main')
@section('container')
<div id="tableExample2" data-list='{"valueNames":["name","username","password"],"page":5,"pagination":true}'>
   <a class="btn btn-falcon-success btn-sm mb-3" type="button" href="/pengguna/create"><span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span><span class="ms-1">Tambah Data</span></a>
    <div class="table-responsive scrollbar">
      <table class="table table-bordered table-striped fs--1 mb-0">
        <thead class="bg-200 text-900">
          <tr>
            <th class="sort" data-sort="no">No</th>
            <th class="sort" data-sort="tgl_daftar">Waktu Daftar</th>
            <th class="sort" data-sort="nama">Nama</th>
            <th class="sort" data-sort="deskripsi">Username</th>
            <th class="sort" data-sort="level">Level</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody class="list">
        @foreach ($pengguna as $user)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>
                @if($user->created_at)
                {{ $user->created_at->format('H:i') }} | {{ $user->created_at->format('d-m-Y') }}
                @else
                    -
                @endif
            </td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->level }}</td>
            <td class="position-relative">
            <div class="d-flex justify-content-center">

              <a href="/pengguna/{{ $user->id }}/edit" class="btn">
                <i class="fas fa-edit"></i>
              </a>
              <form action="/pengguna/{{ $user->id }}" method="post" >
                @method('delete')
                @csrf
                <button type="submit" class="btn ">
                  <i class="fas fa-trash"></i>
                </button>
              </form>
            </div>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <div class="d-flex justify-content-center mt-3">
      <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
      <ul class="pagination mb-0"></ul>
      <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
    </div>
  </div>
@endsection