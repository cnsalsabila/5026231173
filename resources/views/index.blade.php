@extends('template')

@section('content')
    <h2>www.malasngoding.com</h2>
    <h3>Data Pegawai</h3>

    <a href="/pegawai/tambah" class="btn btn-primary mb-3">+ Tambah Pegawai Baru</a>

	<form action="/pegawai/cari" method="GET" class="form-inline">
        <label class="form-label">Cari Data Pegawai :</label>
        <input type="text" name="cari" placeholder="Ketik Nama Pegawai" class="form-control">
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawai as $p)
                <tr>
                    <td>{{ $p->pegawai_nama }}</td>
                    <td>{{ $p->pegawai_jabatan }}</td>
                    <td>{{ $p->pegawai_umur }}</td>
                    <td>{{ $p->pegawai_alamat }}</td>
                    <td>
                        <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-success btn-sm">Edit</a>
                        <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $pegawai->links() }} <!--hanya bisa dipakai dengan paginate, saat get harus dihapus
@endsection
