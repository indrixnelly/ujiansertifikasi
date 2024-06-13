@extends('layout.main')
@section('container')
  <form method="post" action="/history" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label class="form-label" for="basic-form-nama">Nama</label>
      <input class="form-control" id="basic-form-nama" name="nama" type="text" placeholder="Nama Proyek" required />
    </div>
    <div class="mb-3">
      <label class="form-label" for="basic-form-alamat">Alamat</label>
      <input class="form-control" id="basic-form-alamat" name="alamat" type="text" placeholder="Alamat" required />
    </div>
    <div class="mb-3">
      <label class="form-label" for="basic-form-dob">Tanggal</label>
      <input class="form-control" id="basic-form-dob" name="tanggal" type="date" required />
    </div>
    <div class="mb-3">
      <label class="form-label">Unggah Gambar</label>
      <input class="form-control" type="file" name="foto" id="foto" required />
    </div>
    <div class="mb-3">
      <label class="form-label" for="basic-form-textarea">Deskripsi</label>
      <textarea class="form-control" id="basic-form-textarea" rows="3" placeholder="Description" name="deskripsi" id="deskripsi" required></textarea>
    </div>
    <!-- <div class="mb-3">
      <label class="form-label" for="basic-form-anggaran">Anggaran Proyek</label>
      <div id="anggaran-inputs">
        <div class="input-group mb-2">
          <input class="form-control mb-2" type="text" name="nama_anggaran[]" id="nama_anggaran_1" placeholder="Nama Anggaran 1" required/>
          <input class="form-control mb-2" type="text" name="anggaran[]" id="anggaran_1" placeholder="Anggaran 1" required />
          <button type="button" class="btn btn-success btn-add-anggaran">+</button>
        </div>
      </div>
       -->
    </div>
    <button class="btn btn-primary btn-sm mb-3" type="submit">Tambah</button>
    <a class="btn btn-secondary btn-sm mb-3" type="button" href="/history">Kembali</a>
 
  </form>
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    /* $(document).ready(function(){
      var anggaranCount = 1;
      
      $('.btn-add-anggaran').click(function(){
        anggaranCount++;
        var newInput = '<div class="input-group mb-2">'+
        '<input class="form-control mb-2" type="text" name="nama_anggaran[]" id="nama_anggaran_'+ anggaranCount +'" placeholder="Nama Anggaran '+ anggaranCount +'" required/>' +
        '\n<input class="form-control mb-2" type="text" name="anggaran[]" id="anggaran_'+ anggaranCount +'" placeholder="Anggaran '+ anggaranCount +'"required/>' +
        '<button type="button" class="btn btn-danger btn-remove-anggaran">-</button>' +
        '</div>';
        $('#anggaran-inputs').append(newInput);
      });
    }); */
  </script>
@endsection