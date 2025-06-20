@extends('template')

@section('content')
<div class="container mt-4">
    <h3>Detail Karyawan</h3>
    <div class="form-group">
        <label>Kode Pegawai</label>
        <input type="text" class="form-control" value="{{ $mykaryawan->kodepegawai }}" readonly>
    </div>
    <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" class="form-control" value="{{ $m->namalengkap }}" readonly>
    </div>
    <div class="form-group">
        <label>Divisi</label>
        <input type="text" class="form-control" value="{{ $m->divisi }}" readonly>
    </div>
    <div class="form-group">
        <label>Departemen</label>
        <input type="text" class="form-control" value="{{ $m->departemen }}" readonly>
    </div>
</div>
@endsection
