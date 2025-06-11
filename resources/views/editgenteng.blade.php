@extends('template')

@section('content')
    <h3>Edit Genteng</h3>

    <br><br>

    @foreach ($genteng as $g)
        <form action="/genteng/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $g->ID }}">

            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label class="control-label">Merk Genteng</label>
                </div>
                <div class="col-6">
                    <input type="text" name="merk" value="{{ $g->merkGenteng }}" required class="form-control">
                </div>
            </div>

            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label class="control-label">Harga</label>
                </div>
                <div class="col-6">
                    <input type="number" name="harga" value="{{ $g->hargaGenteng }}" required class="form-control">
                </div>
            </div>

            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label class="control-label">Tersedia</label>
                </div>
                <div class="col-6">
                    <select name="tersedia" class="form-control" required>
                        <option value="1" {{ $g->tersedia == 1 ? 'selected' : '' }}>Tersedia</option>
                        <option value="0" {{ $g->tersedia == 0 ? 'selected' : '' }}>Kosong</option>
                    </select>
                </div>
            </div>

            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label class="control-label">Berat</label>
                </div>
                <div class="col-6">
                    <input type="number" step="any" name="berat" value="{{ $g->berat }}" required class="form-control">
                </div>
            </div>

            <div class="row p-1 mt-3">
                <div class="col-8 d-flex">
                    <div class="me-2">
                        <a href="/genteng" class="btn btn-secondary">Kembali</a>
                    </div>
                    <div>
                        <input type="submit" value="Simpan Data" class="btn btn-success">
                    </div>
                </div>
            </div>
        </form>
    @endforeach
@endsection
