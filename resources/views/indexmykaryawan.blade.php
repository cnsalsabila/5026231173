@extends('template')

@section('content')
<div class="table-box">
    <h3>Data Karyawan EAS</h3>

    <table class="table-bordered">
        <thead>
            <tr>
                <th>Kode Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mykaryawan as $m)
                <tr>
                    <td>{{ $m->kodepegawai }}</td>
                    <td>{{ $m->namalengkap }}</td>
                    <td>{{ $m->divisi }}</td>
                    <td>{{ $m->departemen }}</td>
                    <td>
                        <a href="/eas/view/{{ $m->kodepegawai }}" class="btn btn-info btn-sm">View</a>
                        <a href="/eas/edit/{{ $m->kodepegawai }}" class="btn btn-success btn-sm">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
