@extends('master2')
@section('judulhalaman', 'Info Topi')

@section('konten')

    <br/>
	<h3>Informasi Topi</h3>

	<br/>
	<br/>

	@foreach($topi as $l)
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-5">

        </div>
        <div class="col-sm-7">
            <br/>
                <div class="row">
                    <div class="col-sm-2">Merk</div>
                    <div class="col-sm-10">: {{ $l->merktopi }}</div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-sm-2">Stock</div>
                    <div class="col-sm-10">: {{ $l->stocktopi }}</div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-sm-2">Status</div>
                    <div class="col-sm-10">:
                        @if ($l->tersedia == 0) Tidak Tersedia
                        @elseif ($l->tersedia == 1) Tersedia
                        @endif
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-sm-5"></div>
                    <div class="col-sm-2 text-center">
                    <a href="/topi" class="btn btn-block btn-primary">Done</a>
                    </div>
                </div>
        </div>
    </div>
    </div>

	@endforeach

@endsection
