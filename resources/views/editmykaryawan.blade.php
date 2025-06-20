@extends('template')

@section('content')
    <h3>Edit Data Karyawan</h3>

    <br><br>

    @foreach ($mykaryawan as $m)
        <form action="/eas/edit" method="post">
            {{ csrf_field() }}
            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label class="control-label">Kode Karyawan</label>
                </div>
                <div class="col-6">
                    <input type="text" name="kodepegawai" value="{{ $m->kodepegawai }}" required class="form-control">
                </div>
            </div>

            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label class="control-label">Nama Lengkap</label>
                </div>
                <div class="col-6">
                    <input type="text" name="namalengkap" value="{{ $m->namalengkap }}" required class="form-control">
                </div>
            </div>

            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label class="control-label">Divisi</label>
                </div>
                <div class="col-6">
                    <input type="text" name="divisi" value="{{ $m->divisi }}" required class="form-control">
                </div>
            </div>

            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label class="control-label">Departemen</label>
                </div>
                <div class="col-6">
                    <input type="text" name="departemen" value="{{ $m->departemen }}" required class="form-control">
                </div>
            </div>
            <input type="submit" value="Simpan Data" class="btn btn-success">
            {{-- <div class="row p-1 mt-3">
                <div class="col-8 d-flex">
                    <div class="me-2">
                        <a href="/eas" class="btn btn-secondary">Kembali</a>
                    </div>
                    <div>
                        <input type="submit" value="Simpan Data" class="btn btn-success">
                    </div>
                </div>
            </div> --}}
        </form>
    @endforeach
@endsection
