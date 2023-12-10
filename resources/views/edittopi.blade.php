@extends('master2')
@section('judulhalaman', 'Edit Data Topi')

@section('konten')

    <br/>
	<h3>Edit Data Topi</h3>

	<a href="/topi" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($topi as $l)
	<form action="/topi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $l->kodetopi }}"> <br/>
        <div class="form-group row">
            <label for="inputnama" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="inputnama" value="{{ $l->merktopi }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputjumlah" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-10">
                <input type="number" name="jumlah" class="form-control" id="inputjumlah" value="{{ $l->stocktopi }}">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-info">
	</form>
	@endforeach

@endsection
