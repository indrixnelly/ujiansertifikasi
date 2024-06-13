@extends('layout.main')
@section('container')
  <div id="success-message" class="alert alert-success" style="display: none;">
      Komentar berhasil ditambahkan!
  </div>
  <form method="post" action="/komentar" enctype="multipart/form-data" id="comment-form">
    @csrf
    <div class="mb-3">
      <input type="hidden" name="id_histories" value="{{ $history->id }}">
      <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
      <label class="form-label" for="basic-form-textarea">Komentar</label>
      <textarea class="form-control" id="basic-form-textarea" rows="3" placeholder="Komentar" name="isi_komentar" id="komentar"></textarea>
    </div>
    <button class="btn btn-primary btn-sm mb-3" type="submit">Tambah</button>
    <a class="btn btn-secondary btn-sm mb-3" type="button" href="/history/{{ $history->id }}/detail">Kembali</a>
  </form>

  <script>
    const form = document.getElementById('comment-form');
    form.addEventListener('submit', function(event) {
      document.getElementById('success-message').style.display = 'block';
      setTimeout(function() {
        document.getElementById('success-message').style.display = 'none';
      }, 3000);
    });
  </script>
@endsection
