@extends('layouts.admin')
@section('content')


<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Jadwal
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('jadwalhaji.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('bulan') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Bulan</label>	
			  			<input type="text" name="bulan" class="form-control"  required>
			  			@if ($errors->has('bulan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bulan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('keterangan') ? ' has-error' : '' }}">
			  			<label class="control-label"> Keterangan </label>	
			  			<textarea  name="keterangan"   required></textarea>
			  			@if ($errors->has('keterangan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('keterangan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection
@section('sj')