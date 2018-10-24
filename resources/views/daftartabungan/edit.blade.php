@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Daftar Tabungan
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('daftartabungan.update',$daftartabungans->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
        			
        			<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" value="{{ $daftartabungans->nama }}" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tempatlahir') ? ' has-error' : '' }}">
			  			<label class="control-label">Tempat Lahir</label>	
			  			<input type="text" value="{{ $daftartabungans->tempatlahir }}" name="tempatlahir" class="form-control"  required>
			  			@if ($errors->has('tempatlahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tempatlahir') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tgllahir') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Lahir</label>	
			  			<input type="date" value="{{ $daftartabungans->tgllahir }}" name="tgllahir" class="form-control"  required>
			  			@if ($errors->has('tgllahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgllahir') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jk') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis Kelamin</label>	
			  			<select name="jk" type="text" class="form-control" value="{{ $daftartabungans->jk }}" required>
						<option selected>- Pilih -</option>
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
						</select>
			  			@if ($errors->has('jk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jk') }}</strong>
                            </span>
                        @endif
			  		</div>


        			<div class="form-group {{ $errors->has('tanda') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanda Pengenal</label>
			  			<select name="tanda" type="text" class="form-control" value="{{ $daftartabungans->tanda }}" required>
						<option selected>- Pilih -</option>
						<option value="KTP">KTP</option>
						<option value="PASPOR">PASPOR</option>
						</select>
			  			@if ($errors->has('tanda'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanda') }}</strong>
                            </span>
                            @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('notanda') ? ' has-error' : '' }}">
			  			<label class="control-label">No. Tanda Pengenal (KTP/Paspor)</label>	
			  			<input type="text" value="{{ $daftartabungans->notanda }}" name="notanda" class="form-control"  required>
			  			@if ($errors->has('notanda'))
                            <span class="help-block">
                                <strong>{{ $errors->first('notanda') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('alamatsesuai') ? ' has-error' : '' }}">
			  			<label class="control-label">Alamat sesuai KTP/Paspor</label>	
			  			<input type="text" value="{{ $daftartabungans->alamatsesuai }}" name="alamatsesuai" class="form-control"  required>
			  			@if ($errors->has('alamatsesuai'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamatsesuai') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		
			  		<div class="form-group {{ $errors->has('alamatsurat') ? ' has-error' : '' }}">
			  			<label class="control-label">Alamat surat-menyurat</label>	
			  			<input type="text" value="{{ $daftartabungans->alamatsurat }}" name="alamatsurat" class="form-control"  required>
			  			@if ($errors->has('alamatsurat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamatsurat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
			  			<label class="control-label">email</label>	
			  			<input type="text" value="{{ $daftartabungans->email }}" name="email" class="form-control"  required>
			  			@if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('rencana') ? ' has-error' : '' }}">
			  			<label class="control-label">Rencana Umrah Bersama</label>	
			  			<select name="rencana" type="text" class="form-control" value="{{ $daftartabungans->rencana }}" required>
						<option selected>- Pilih -</option>
						<option value="Suami/Istri">Suami/Istri</option>
						<option value="Sendiri">Sendiri</option>
						<option value="Orangtua">Orang tua</option>
						<option value="Anak">Anak</option>
						<option value="Lain-Lain">Lain-Lain</option>
						</select>
			  			@if ($errors->has('rencana'))
                            <span class="help-block">
                                <strong>{{ $errors->first('rencana') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('pendamping') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Pendamping</label>	
			  			<input type="text" value="{{ $daftartabungans->pendamping }}" name="pendamping" class="form-control"  required>
			  			@if ($errors->has('pendamping'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pendamping') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('paket') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Paket</label>	
			  			<input type="text" value="{{ $daftartabungans->paket }}" name="paket" class="form-control"  required>
			  			@if ($errors->has('paket'))
                            <span class="help-block">
                                <strong>{{ $errors->first('paket') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jumlahwaktu') ? ' has-error' : '' }}">
			  			<label class="control-label">Jangka Waktu Menabung</label>	
			  			<input type="text" value="{{ $daftartabungans->jumlahwaktu }}" name="jumlahwaktu" class="form-control"  required>
			  			@if ($errors->has('jumlahwaktu'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlahwaktu') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jumlahsetoran') ? ' has-error' : '' }}">
			  			<label class="control-label">Jumlah Setoran</label>	
			  			<input type="text" value="{{ $daftartabungans->jumlahsetoran }}" name="jumlahsetoran" class="form-control"  required>
			  			@if ($errors->has('jumlahsetoran'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlahsetoran') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('setoran') ? ' has-error' : '' }}">
			  			<label class="control-label">Setoran/pembayaran dilakukan melalui</label>	
			  			<select name="setoran" type="text" class="form-control" value="{{ $daftartabungans->setoran }}" required>
						<option selected>- Pilih -</option>
						<option value="Tunai">Tunai</option>
						<option value="Transfer">Transfer</option>
						</select>
			  			@if ($errors->has('setoran'))
                            <span class="help-block">
                                <strong>{{ $errors->first('setoran') }}</strong>
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