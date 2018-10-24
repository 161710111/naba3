@extends('layouts.admin')
@section('content')

<br>
<br>
<br>


<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Daftar Haji
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('daftarhaji.update',$daftarhajis->id) }}" method="post" enctype="multipart/form-data" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
        			@if (isset($daftarhajis)&& $daftarhajis->foto)
        			<img src="{{ asset('assets/admin/images/icon/'.$daftarhajis->foto )}}" style="max-height:100px; max-width: 150px; margin-top: 6px;">
        			@endif
        			<div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
			  			<label class="control-label">foto</label>
			  			<input type="file" name="foto" class="form-control" value="{{ $daftarhajis->foto }}"  required>
			  			@if ($errors->has('foto'))
                            <span class="help-block">
                                <strong>{{ $errors->first('foto') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('paket') ? ' has-error' : '' }}">
			  			<label class="control-label">Paket</label>	
			  			<input type="text" value="{{ $daftarhajis->paket }}" name="paket" class="form-control"  required>
			  			@if ($errors->has('paket'))
                            <span class="help-block">
                                <strong>{{ $errors->first('paket') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('paspor') ? ' has-error' : '' }}">
			  			<label class="control-label">No.paspor</label>	
			  			<input type="text" value="{{ $daftarhajis->paspor }}" name="paspor" class="form-control"  required>
			  			@if ($errors->has('paspor'))
                            <span class="help-block">
                                <strong>{{ $errors->first('paspor') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama </label>	
			  			<input type="text" value="{{ $daftarhajis->nama }}" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tempatlahir') ? ' has-error' : '' }}">
			  			<label class="control-label">Tempat Lahir</label>	
			  			<input type="text" value="{{ $daftarhajis->tempatlahir }}" name="tempatlahir" class="form-control"  required>
			  			@if ($errors->has('tempatlahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tempatlahir') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tgllahir') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Lahir</label>	
			  			<input type="date" value="{{ $daftarhajis->tgllahir }}" name="tgllahir" class="form-control"  required>
			  			@if ($errors->has('tgllahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgllahir') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jk') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis Kelamin</label>	
			  			<select name="jk" type="text" class="form-control" value="{{ $daftarhajis->jk }}" required>
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

			  		<div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="control-label">Alamat</label>	
			  			<input type="text" value="{{ $daftarhajis->alamat }}" name="alamat" class="form-control"  required>
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('notelp') ? ' has-error' : '' }}">
			  			<label class="control-label">No. Telepon</label>	
			  			<input type="text" value="{{ $daftarhajis->notelp }}" name="notelp" class="form-control"  required>
			  			@if ($errors->has('notelp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('notelp') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
			  			<label class="control-label">Status</label>	
			  			<select name="status" type="text" class="form-control" value="{{ $daftarhajis->status }}" required>
						<option selected>- Pilih -</option>
						<option value="Menikah">Menikah</option>
						<option value="Belum Menikah">Belum Menikah</option>
						<option value="Duda">Duda</option>
						<option value="Janda">Janda</option>
						</select>
			  			@if ($errors->has('status'))
                            <span class="help-block">
                                <strong>{{ $errors->first('status') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('pekerjaan') ? ' has-error' : '' }}">
			  			<label class="control-label">Pekerjaan</label>	
			  			<input type="text" value="{{ $daftarhajis->pekerjaan }}" name="pekerjaan" class="form-control"  required>
			  			@if ($errors->has('pekerjaan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pekerjaan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jabatan') ? ' has-error' : '' }}">
			  			<label class="control-label">Jabatan</label>	
			  			<input type="text" value="{{ $daftarhajis->jabatan }}" name="jabatan" class="form-control"  required>
			  			@if ($errors->has('jabatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jabatan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('almkantor') ? ' has-error' : '' }}">
			  			<label class="control-label">Alamat Kantor</label>	
			  			<input type="text" value="{{ $daftarhajis->almkantor }}" name="almkantor" class="form-control"  required>
			  			@if ($errors->has('almkantor'))
                            <span class="help-block">
                                <strong>{{ $errors->first('almkantor') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('notelpkantor') ? ' has-error' : '' }}">
			  			<label class="control-label">No. Telepon Kantor</label>	
			  			<input type="text" value="{{ $daftarhajis->notelpkantor }}" name="notelpkantor" class="form-control"  required>
			  			@if ($errors->has('notelpkantor'))
                            <span class="help-block">
                                <strong>{{ $errors->first('notelpkantor') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
			  			<label class="control-label">Email</label>	
			  			<input type="text" value="{{ $daftarhajis->email }}" name="email" class="form-control"  required>
			  			@if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('keterangan') ? ' has-error' : '' }}">
			  			<label class="control-label">keterangan</label>	
			  			<input type="text" value="{{ $daftarhajis->keterangan }}" name="keterangan" class="form-control"  required>
			  			@if ($errors->has('keterangan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('keterangan') }}</strong>
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