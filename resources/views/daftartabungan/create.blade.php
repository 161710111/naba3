@extends('layouts.admin')
@section('content')
<br>
<br>
<br>

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Daftar Tabungan
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('daftartabungan.store') }}" method="post" >
			  		{{ csrf_field() }}


			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">nama</label>	
			  			<input type="text" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tempatlahir') ? ' has-error' : '' }}">
			  			<label class="control-label">tempatlahir</label>	
			  			<input type="text" name="tempatlahir" class="form-control"  required>
			  			@if ($errors->has('tempatlahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tempatlahir') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tgllahir') ? ' has-error' : '' }}">
			  			<label class="control-label">tgllahir</label>	
			  			<input type="date" name="tgllahir" class="form-control"  required>
			  			@if ($errors->has('tgllahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgllahir') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jk') ? ' has-error' : '' }}">
			  			<label class="control-label">jk</label>	
			  			<input type="text" name="jk" class="form-control"  required>
			  			@if ($errors->has('jk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jk') }}</strong>
                            </span>
                        @endif
			  		</div>


			  		<div class="form-group {{ $errors->has('tanda') ? ' has-error' : '' }}">
			  			<label class="control-label">tanda</label>	
			  			<input type="file" id="tanda" name="tanda" class="validate" accept="image/*" required>
			  			@if ($errors->has('tanda'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanda') }}</strong>
                            </span>
                        @endif
					</div>

			  		<div class="form-group {{ $errors->has('notanda') ? ' has-error' : '' }}">
			  			<label class="control-label">notanda</label>	
			  			<input type="text" name="notanda" class="form-control"  required>
			  			@if ($errors->has('notanda'))
                            <span class="help-block">
                                <strong>{{ $errors->first('notanda') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('alamatsesuai') ? ' has-error' : '' }}">
			  			<label class="control-label">alamatsesuai</label>	
			  			<input type="text" name="alamatsesuai" class="form-control"  required>
			  			@if ($errors->has('alamatsesuai'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamatsesuai') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		

			  		<div class="form-group {{ $errors->has('alamatsurat') ? ' has-error' : '' }}">
			  			<label class="control-label">alamatsurat</label>	
			  			<input type="text" name="alamatsurat" class="form-control"  required>
			  			@if ($errors->has('alamatsurat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamatsurat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
			  			<label class="control-label">email</label>	
			  			<input type="text" name="email" class="form-control"  required>
			  			@if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('rencana') ? ' has-error' : '' }}">
			  			<label class="control-label">rencana</label>	
			  			<input type="text" name="rencana" class="form-control"  required>
			  			@if ($errors->has('rencana'))
                            <span class="help-block">
                                <strong>{{ $errors->first('rencana') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('pendamping') ? ' has-error' : '' }}">
			  			<label class="control-label">pendamping</label>	
			  			<input type="text" name="pendamping" class="form-control"  required>
			  			@if ($errors->has('pendamping'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pendamping') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('paket') ? ' has-error' : '' }}">
			  			<label class="control-label">paket</label>	
			  			<input type="text" name="paket" class="form-control"  required>
			  			@if ($errors->has('paket'))
                            <span class="help-block">
                                <strong>{{ $errors->first('paket') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jumlahwaktu') ? ' has-error' : '' }}">
			  			<label class="control-label">jumlahwaktu</label>	
			  			<input type="text" name="jumlahwaktu" class="form-control"  required>
			  			@if ($errors->has('jumlahwaktu'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlahwaktu') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jumlahsetoran') ? ' has-error' : '' }}">
			  			<label class="control-label">jumlahsetoran</label>	
			  			<input type="text" name="jumlahsetoran" class="form-control"  required>
			  			@if ($errors->has('jumlahsetoran'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlahsetoran') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('setoran') ? ' has-error' : '' }}">
			  			<label class="control-label">setoran</label>	
			  			<input type="text" name="setoran" class="form-control"  required>
			  			@if ($errors->has('setoran'))
                            <span class="help-block">
                                <strong>{{ $errors->first('setoran') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('keterangan') ? ' has-error' : '' }}">
			  			<label class="control-label">keterangan</label>	
			  			<input type="text" name="keterangan" class="form-control"  required>
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