@extends('layouts.admin')
@section('content')



<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Testimoni
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('testimoni.update',$testimonis->id) }}" method="post" enctype="multipart/form-data">
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
        			@if (isset($testimonis)&& $testimonis->logo)
        			<img src="{{ asset('assets/admin/images/icon/'.$testimonis->logo )}}" style="max-height:100px; max-width: 150px; margin-top: 6px;">
        			@endif
        			<div class="form-group {{ $errors->has('logo') ? ' has-error' : '' }}">
			  			<label class="control-label">Logo</label>
			  			<input type="file" name="logo" class="form-control" value="{{ $testimonis->logo }}"  required>
			  			@if ($errors->has('logo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('logo') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('keterangan') ? ' has-error' : '' }}">
			  			<label class="control-label">Keterangan</label>	
			  			<textarea id="text" name="keterangan" class="form-control" required> {{$testimonis->keterangan}}	</textarea>
			  			@if ($errors->has('keterangan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('keterangan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" value="{{ $testimonis->nama }}" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>


			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection
@section('sj')