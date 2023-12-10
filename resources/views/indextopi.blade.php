@extends('master2')
@section('judulhalaman', 'Data Topi')

@section('konten')
    <br/>
	<h3>Data Topi</h3>

	<a href="/topi/tambahtopi" class="btn btn-primary"> + Tambah Topi Baru</a>

	<br/>
    <p>Cari Data Topi :</p>
	<form action="/topi/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Merk Topi .."
        value="{{ old("cari", isset($cari) ? $cari : '') }}">
        <br/>
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/>

	<table class="table table-striped table-hover" style="width: 100%">
		<tr>
			<th style="width: 15%">Kode Topi</th>
			<th style="width: 30%">Merk Topi</th>
			<th style="width: 17%">Stock Topi</th>
			<th style="width: 17%">Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($topi as $l)
		<tr>
			<td>{{ $l->kodetopi }}</td>
			<td>{{ $l->merktopi }}</td>
			<td>{{ $l->stocktopi }}</td>
			<td>
                @if ($l->tersedia == 0) Tidak Tersedia
                @elseif ($l->tersedia == 1) Tersedia
                @endif
            </td>
			<td>
                <a href="/topi/view/{{ $l->kodetopi }}" class="btn btn-info">View</a>
                |
				<a href="/topi/edit/{{ $l->kodetopi }}" class="btn btn-warning">Edit</a>
				|
				<a href="/topi/hapus/{{ $l->kodetopi }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


@endsection
