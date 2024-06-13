@extends('layout.main')
@section('container')
<div id="tableExample2" data-list='{"valueNames":["komentar"],"page":10,"pagination":true}'>
   <!-- Tombol untuk menambah komentar baru -->
   <a class="btn btn-falcon-success btn-sm mb-3" type="button" href="{{ route('komentar.create', ['id' => $history->id]) }}">
    <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span>
    <span class="ms-1">Tambah Data</span>
  </a>
   <a class="btn btn-secondary btn-sm mb-3" type="button" href="/history">Kembali</a>
   <div class="table-responsive scrollbar">
      <table class="table table-bordered table-striped fs--1 mb-0">
        <thead class="bg-200 text-900">
          <tr>
            <th class="sort" data-sort="no">No</th>
            <th class="sort" data-sort="tanggal">Tanggal</th>
            <th class="sort" data-sort="jam">Pukul</th>
            <th class="sort" data-sort="nama">Nama Pengguna</th>
            <th class="sort" data-sort="komentar">Komentar</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody class="list">
        @foreach ($comments as $comment)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $comment->created_at->format('d/m/Y') }}</td>
            <td>{{ $comment->created_at->format('H:i') }}</td>
            <td>{{ $comment->user->username }}</td>
            <td>{{ $comment->isi_komentar }}</td>
            <td class="position-relative">
            <div class="d-flex justify-content-center">
              <!-- Tombol edit komentar -->
              <a href="/komentar/{{ $comment->id }}/edit" class="btn">
                <i class="fas fa-edit"></i>
              </a>
              <!-- Form untuk menghapus komentar -->
              <form action="/komentar/{{ $comment->id }}" method="post" >
                @method('delete')
                @csrf
                <button type="submit" class="btn">
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
      <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev">
          <span class="fas fa-chevron-left"></span>
      </button>
      <ul class="pagination mb-0"></ul>
      <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next">
          <span class="fas fa-chevron-right"></span>
      </button>
    </div>
  </div>
@endsection