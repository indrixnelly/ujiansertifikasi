@extends('layout.main')
@section('container')
  <div id="success-message" class="alert alert-success" style="display: none;">
      Pengguna baru berhasil ditambahkan!
  </div>
  <form method="post" action="/pengguna" enctype="multipart/form-data" id="registrasi-form">
    @csrf
    <div class="mb-3">
      <label class="form-label" for="basic-form-nama">Nama</label>
      <input class="form-control" id="basic-form-nama" name="name" type="text" placeholder="Nama Lengkap"/>
    </div>
    <div class="mb-3">
      <label class="form-label" for="basic-form-username">Username</label>
      <input class="form-control" id="basic-form-username" name="username" type="text" placeholder="Username"/>
    </div>
    <div class="mb-3">
      <label class="form-label" for="basic-form-password">Password</label>
      <input class="form-control" id="basic-form-password" name="password" type="password" placeholder="Password"/>
    </div>
    <button class="btn btn-primary btn-sm mb-3" type="submit">Tambah</button>
    <a class="btn btn-secondary btn-sm mb-3" type="button" href="/pengguna">Kembali</a>
  </form>

  <script>
    const form = document.getElementById('registrasi-form');
    form.addEventListener('submit', function(event) {
      document.getElementById('success-message').style.display = 'block';
      setTimeout(function() {
        document.getElementById('success-message').style.display = 'none';
      }, 3000);
    });
  </script>
@endsection
