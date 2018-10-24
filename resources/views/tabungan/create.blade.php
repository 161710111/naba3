@extends('layouts.admin')
@section('content')


<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Tabungan 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('tabungan.store') }}" method="post" enctype="multipart/form-data" >
			  		{{ csrf_field() }}


					<div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
			  			<label class="control-label">judul</label>	
			  			<input type="text" name="judul" class="form-control"  required>
			  			@if ($errors->has('judul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
			  		</div>

					<div class="form-group {{ $errors->has('keterangan') ? ' has-error' : '' }}">
			  			<label class="control-label">Keterangan</label>	
			  			<textarea  name="keterangan"   required></textarea>
			  			@if ($errors->has('keterangan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('keterangan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('keunggulan') ? ' has-error' : '' }}">
			  			<label class="control-label">keunggulan</label>	
			  			<textarea  name="keunggulan"   required></textarea>
			  			@if ($errors->has('keunggulan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('keunggulan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('syarat') ? ' has-error' : '' }}">
			  			<label class="control-label">syarat</label>	
			  			<textarea  name="syarat"   required></textarea>
			  			@if ($errors->has('syarat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('syarat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('logo') ? ' has-error' : '' }}">
			  			<label class="control-label">Logo</label>	
			  			<input type="file" id="logo" name="logo" class="validate" accept="image/*" required>
			  			@if ($errors->has('logo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('logo') }}</strong>
                            </span>
                        @endif
					</div>
			  		
			  		<div class="form-group {{ $errors->has('note') ? ' has-error' : '' }}">
			  			<label class="control-label">note</label>	
			  			<textarea  name="note"   required></textarea>
			  			@if ($errors->has('note'))
                            <span class="help-block">
                                <strong>{{ $errors->first('note') }}</strong>
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