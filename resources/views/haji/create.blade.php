@extends('layouts.admin')
@section('content')


<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Haji
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('haji.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
			  			<label class="control-label">Judul</label>	
			  			<input type="text" name="judul" class="form-control"  required>
			  			@if ($errors->has('judul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('isi') ? ' has-error' : '' }}">
			  			<label class="control-label">isi</label>	
			  			<textarea  name="isi"   required></textarea>
			  			@if ($errors->has('isi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('isi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">harga</label>	
			  			<textarea  name="harga"   required></textarea>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('fasilitas') ? ' has-error' : '' }}">
			  			<label class="control-label">fasilitas</label>	
			  			<textarea  name="fasilitas"   required></textarea>
			  			@if ($errors->has('fasilitas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('fasilitas') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('batal') ? ' has-error' : '' }}">
			  			<label class="control-label">batal</label>	
			  			<textarea  name="batal"   required></textarea>
			  			@if ($errors->has('batal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('batal') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('biayamasuk') ? ' has-error' : '' }}">
			  			<label class="control-label">biayamasuk</label>	
			  			<textarea  name="biayamasuk"   required></textarea>
			  			@if ($errors->has('biayamasuk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('biayamasuk') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('biayatidak') ? ' has-error' : '' }}">
			  			<label class="control-label">biayatidak</label>	
			  			<textarea  name="biayatidak"   required></textarea>
			  			@if ($errors->has('biayatidak'))
                            <span class="help-block">
                                <strong>{{ $errors->first('biayatidak') }}</strong>
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

			  		<div class="form-group {{ $errors->has('daftar') ? ' has-error' : '' }}">
			  			<label class="control-label">daftar</label>	
			  			<textarea  name="daftar"   required></textarea>
			  			@if ($errors->has('daftar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('daftar') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('kategoria_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Kategori</label>
			  			<select name="kategoria_id" class="form-control">
			  				@foreach($kategorias as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('kategoria_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kategoria_id') }}</strong>
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