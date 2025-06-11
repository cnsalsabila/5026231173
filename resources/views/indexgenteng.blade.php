@extends('template')

@section('content')

    <h3>Data Genteng</h3>

    <a href="/genteng/tambah" class="btn btn-primary mb-3">+ Tambah Genteng Baru</a>

	<form action="/genteng/cari" method="GET" class="form-inline">
        <label class="form-label">Cari Data Genteng :</label>
        <input type="text" name="cari" placeholder="Ketik Merk Genteng" class="form-control">
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Merk</th>
                <th>Harga</th>
                <th>Tersedia</th>
                <th>Berat</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genteng as $g)
                <tr>
                    <td>{{ $g->merkGenteng }}</td>
                    <td>{{ $g->hargaGenteng }}</td>
                    <td>{{ $g->tersedia }}</td>
                    <td>{{ $g->berat }}</td>
                    <td>
                        <a href="/genteng/edit/{{ $g->ID }}" class="btn btn-success btn-sm">Edit</a>
                        <a href="/genteng/hapus/{{ $g->ID }}" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $genteng->links() }} <!--hanya bisa dipakai dengan paginate, saat get harus dihapus
@endsection
