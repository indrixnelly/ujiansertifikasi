@extends('layout.main')
@section('container')
  <div id="success-message" class="alert alert-success" style="display: none;">
      Data pengguna berhasil diperbarui!
  </div>
  <form method="post" action="/pengguna/{{ $pengguna->id }}" enctype="multipart/form-data" id="edit-comment-form">
    @method('put')
    @csrf
    <div class="mb-3">
      <label class="form-label" for="basic-form-nama">Nama</label>
      <input class="form-control" id="basic-form-nama" name="name" type="text" value="{{ old('name', $pengguna->name) }}" required/></input>
    </div>
    <div class="mb-3">
      <label class="form-label" for="basic-form-username">Username</label>
      <input class="form-control" id="basic-form-username" name="username" type="text" value="{{ old('username', $pengguna->username) }}" required/></input>
    </div>
    <div class="mb-3">
      <label class="form-label" for="basic-form-password">Password Baru</label>
      <input class="form-control" id="basic-form-password" name="password" type="password" placeholder="Masukkan Password Baru"/></input>
    </div>
    <div class="mb-3">
        <label class="form-label" for="basic-form-level">Level</label>
        <select class="form-select" id="basic-form-level" name="level" required>
            <option value="admin" {{ old('level', $pengguna->level) === 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="pengguna" {{ old('level', $pengguna->level) === 'pengguna' ? 'selected' : '' }}>Pengguna</option>
        </select>
    </div>
    <button class="btn btn-primary btn-sm mb-3" type="submit">Perbarui</button>
    <a class="btn btn-secondary btn-sm mb-3" type="button" href="/pengguna">Kembali</a>
  </form>

  <script>
    const editForm = document.getElementById('edit-comment-form');
    editForm.addEventListener('submit', function(event) {
      document.getElementById('success-message').style.display = 'block';
      setTimeout(function() {
        document.getElementById('success-message').style.display = 'none';
      }, 5000);
    });
  </script>
@endsection