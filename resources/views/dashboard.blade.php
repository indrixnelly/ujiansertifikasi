@extends('layout.main')
@section('container')
<h4 class="mb-4">Dashboard</h4>
<div class="row">
    <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-body">
                <b class="card-text">Total Pengguna</b>
                <p class="card-text">{{ $totalUsers }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-body">
                <b class="card-text">Total Riwayat Proyek</b>
                <p class="card-text">{{ $totalHistories }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-body">
                <b class="card-text">Total Komentar</b>
                <p class="card-text">{{ $totalComments }}</p>
            </div>
        </div>
    </div>
</div>
@endsection