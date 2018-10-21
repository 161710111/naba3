@extends('layouts.admin')
@section('content')
<br>
<br>
<br>
<br>

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Galeri 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('galeri.store') }}" method="post" enctype="multipart/form-data" >
			  		{{ csrf_field() }}

			  		<div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
			  			<label class="control-label">foto</label>	
			  			<input type="file" id="foto" name="foto" class="validate" accept="image/*" required>
			  			@if ($errors->has('foto'))
                            <span class="help-block">
                                <strong>{{ $errors->first('foto') }}</strong>
                            </span>
                        @endif
					</div>

					<div class="form-group {{ $errors->has('kategorig_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Kategori</label>
			  			<select name="kategorig_id" class="form-control">
			  				@foreach($kategorigs as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('kategorig_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kategorig_id') }}</strong>
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