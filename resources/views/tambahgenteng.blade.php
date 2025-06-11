@extends('template')

@section('content')
    <h3>Tambah Genteng Baru</h3>

    <a href="/genteng"> Kembali</a>

    <br />
    <br />
    {{-- action mengarah ke pegawai/store untuk dilakukan routing --}}
    <form action="/genteng/store" method="post">
        {{ csrf_field() }}
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Merk Genteng </label>
            </div>
            <div class="col-6">
                <input type="text" name="merk" required="required" class="form-control">
            </div>
        </div>
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Harga </label>
            </div>
            <div class="col-6">
                <input type="int" name="harga" required="required" class="form-control">
            </div>
        </div>
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Tersedia </label>
            </div>
            <div class="col-6">
                <select name="tersedia" required="required" class="form-control">
                    <option value="1">Tersedia</option>
                    <option value="0">Kosong</option>
                </select>
            </div>
        </div>
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Berat </label>
            </div>
            <div class="col-6">
                <input type="text" name="berat" required="required" class="form-control">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection

