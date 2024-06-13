@extends('layout.main')
@section('container')
<form method="post" action="/history/{{ $history->id }}" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
        <label class="form-label" for="basic-form-nama">Nama</label>
        <input class="form-control" id="basic-form-nama" name="nama" type="text" value="{{ old('nama', $history->nama) }}" placeholder="Nama Proyek"/>
    </div>
    <div class="mb-3">
        <label class="form-label" for="basic-form-alamat">Alamat</label>
        <input class="form-control" id="basic-form-alamat" name="alamat" type="text" value="{{ old('alamat', $history->alamat) }}" placeholder="Alamat" />
    </div>
    <div class="mb-3">
        <label class="form-label" for="basic-form-dob">Tanggal</label>
        <input class="form-control" id="basic-form-dob" name="tanggal" type="date" value="{{ old('tanggal', $history->tanggal) }}" />
    </div>
    @if ($history->foto)
    <div class="mb-3">
        <img src="{{ asset('gambar/' . $history->foto) }}" alt="Gambar Lama" style="max-width: 100px;" />
    </div>
    @else
        <p>Tidak ada gambar sebelumnya.</p>
    @endif
    <div class="mb-3">
        <label class="form-label">Unggah Gambar</label>
        <input class="form-control" type="file" name="foto" id="foto">
    </div>
    <div class="mb-3">
        <label class="form-label" for="basic-form-textarea">Deskripsi</label>
        <textarea class="form-control" id="basic-form-textarea" rows="3" placeholder="Deskripsi" name="deskripsi">{{ old('deskripsi', $history->deskripsi) }}</textarea>
    </div>
    <!-- <div class="mb-3">
        <label class="form-label" for="basic-form-anggaran">Anggaran Proyek</label>
        <div id="anggaran-inputs">
            {{-- @foreach($namaAnggaranData as $key => $namaAnggaran)
                <div class="input-group mb-2">
                    <input class="form-control nama_anggaran" type="text" name="nama_anggaran[]" placeholder="Nama Anggaran {{ $key + 1 }}" value="{{ old('nama_anggaran.' . $key, $namaAnggaran) }}" required/>
                    <input class="form-control anggaran" type="text" name="anggaran[]" placeholder="Anggaran {{ $key + 1 }}" value="{{ old('anggaran.' . $key, $anggaranData[$key]) }}" required/>
                    @if ($key === 0) 
                        <button type="button" class="btn btn-success btn-add-anggaran">+</button>
                    @else
                        <button type="button" class="btn btn-danger btn-remove-anggaran">-</button>
                    @endif
                </div>
            @endforeach
            --}}
        </div>
    </div>
    -->
    <div class="mb-3">
        <p>{{ $history->deskripsi_sebelumnya }}</p>
    </div>
    
    <button class="btn btn-primary btn-sm mb-3" type="submit">Perbarui</button>
    <a class="btn btn-secondary btn-sm mb-3" type="button" href="/history">Kembali</a>
</form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
{{-- <script>
 $(document).ready(function(){
    var anggaranCount = {{ count($namaAnggaranData) }};
    
    $('.btn-add-anggaran').click(function(){
        anggaranCount++;
        var newInput = '<div class="input-group mb-2">' +
            '<input class="form-control nama_anggaran" type="text" name="nama_anggaran[]" placeholder="Nama Anggaran '+ anggaranCount +'" required/>' +
            '<input class="form-control anggaran" type="text" name="anggaran[]" placeholder="Anggaran '+ anggaranCount +'" required/>' +
            '<button type="button" class="btn btn-danger btn-remove-anggaran">-</button>' +
            '</div>';
        $('#anggaran-inputs').append(newInput);
    });

    // Fungsi untuk menghapus input anggaran
    $(document).on('click', '.btn-remove-anggaran', function(){
        // Menghapus nilai dari input nama_anggaran dan anggaran
        $(this).closest('.input-group').find('.nama_anggaran, .anggaran').val('');
        $(this).closest('.input-group').remove();
    });
}); --}}
</script>
@endsection