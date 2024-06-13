@extends('layout.main')
@section('container')
  <div id="success-message" class="alert alert-success" style="display: none;">
      Komentar berhasil diperbarui!
  </div>
  <form method="post" action="/komentar/{{ $komentar->id }}" enctype="multipart/form-data" id="edit-comment-form">
    @method('put')
    @csrf
    <div class="mb-3">
        <label class="form-label" for="basic-form-textarea">Komentar</label>
        <textarea class="form-control" id="basic-form-textarea" rows="3" placeholder="Komentar" name="isi_komentar">{{ old('komentar', $komentar->isi_komentar) }}</textarea>
    </div>
    <button class="btn btn-primary btn-sm mb-3" type="submit">Perbarui</button>
    <a class="btn btn-secondary btn-sm mb-3" type="button" href="/history/{{ $komentar->history->id }}/detail">Kembali</a>
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