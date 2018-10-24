@extends('layouts.frontend')
@section('content')

	<!--POPUP-->
	<section class="p-0">
	<div class="container-fluid">
    <div class="row row-flex">
          <div class="col-md-8 col-sm-12">
            <div class="box-row pt-100 pb-100">
    	<div class="title mb-50">
                <h2>Form Pendaftaran Haji </h2>
              </div>
	 <form action="{{ route('daftar_haji.storeHaji') }}" method="post" enctype="multipart/form-data" >
			  		{{ csrf_field() }}

			  		<div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
			  			<label class="control-label">Foto</label>	
			  			<input type="file" id="foto" name="foto"  class="validate" accept="image/*" required>
			  			@if ($errors->has('foto'))
                            <span class="help-block">
                                <strong>{{ $errors->first('foto') }}</strong>
                            </span>
                        @endif
					</div>

			  		<div class="form-group {{ $errors->has('paket') ? ' has-error' : '' }}">
			  			<label class="control-label">Paket :</label>	
			  			<input type="text" name="paket" placeholder="Paket" class="form-control"  required>
			  			@if ($errors->has('paket'))
                            <span class="help-block">
                                <strong>{{ $errors->first('paket') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('paspor') ? ' has-error' : '' }}">
			  			<label class="control-label">No. Paspor :</label>	
			  			<input type="text" name="paspor" placeholder="No. Paspor" class="form-control"  required>
			  			@if ($errors->has('paspor'))
                            <span class="help-block">
                                <strong>{{ $errors->first('paspor') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Lengkap :</label>	
			  			<input type="text" name="nama" placeholder="Nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tempatlahir') ? ' has-error' : '' }}">
			  			<label class="control-label">Tempat Lahir :</label>	
			  			<input type="text" name="tempatlahir" placeholder="Tempat Lahir" class="form-control"  required>
			  			@if ($errors->has('tempatlahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tempatlahir') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tgllahir') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Lahir :</label>	
			  			<input type="date" name="tgllahir" class="form-control"  required>
			  			@if ($errors->has('tgllahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgllahir') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jk') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis Kelamin :</label>	
			  			<select name="jk" class="form-control" required>
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
			  			<label class="control-label">Alamat :</label>	
			  			<textarea type="text" name="alamat" placeholder="Alamat" class="form-control"  required></textarea>
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('notelp') ? ' has-error' : '' }}">
			  			<label class="control-label">No. Telepon :</label>	
			  			<input type="text" name="notelp" placeholder="No. Telepon" class="form-control"  required>
			  			@if ($errors->has('notelp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('notelp') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
			  			<label class="control-label">Status :</label>	
			  			<select name="status" class="form-control"  required>
						<option selected>- Pilih -</option>
						<option value="Belum Menikah">Belum Menikah</option>
						<option value="Menikah">Menikah</option>
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
			  			<label class="control-label">Pekerjaan :</label>	
			  			<input type="text" name="pekerjaan" placeholder="Pekerjaan" class="form-control"  required>
			  			@if ($errors->has('pekerjaan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pekerjaan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jabatan') ? ' has-error' : '' }}">
			  			<label class="control-label">Jabatan :</label>	
			  			<input type="text" name="jabatan" placeholder="Jabatan" class="form-control"  required>
			  			@if ($errors->has('jabatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jabatan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('almkantor') ? ' has-error' : '' }}">
			  			<label class="control-label">Alamat Kantor :</label>	
			  			<textarea type="text" name="almkantor" placeholder="Alamat Kantor" class="form-control"  required></textarea>
			  			@if ($errors->has('almkantor'))
                            <span class="help-block">
                                <strong>{{ $errors->first('almkantor') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('notelpkantor') ? ' has-error' : '' }}">
			  			<label class="control-label">No. Telepon Kantor</label>	
			  			<input type="text" name="notelpkantor" placeholder="No. Telepon Kantor" class="form-control"  required>
			  			@if ($errors->has('notelpkantor'))
                            <span class="help-block">
                                <strong>{{ $errors->first('notelpkantor') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
			  			<label class="control-label">Email :</label>	
			  			<input type="text" name="email" placeholder="Email" class="form-control"  required>
			  			@if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('keterangan') ? ' has-error' : '' }}">
			  			<label class="control-label">Katerangan :</label>	
			  			<input type="text" name="keterangan" placeholder="Keterangan" class="form-control"  required>
			  			@if ($errors->has('keterangan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('keterangan') }}</strong>
                            </span>
                        @endif
			  		</div>


			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Daftar</button>
			  		</div>
			  	</form>
			  	</div>
			  </div>
			  <div class="col-md-4">
            <div class="box-row grey-bg pt-100 pb-100">
			 			  
            </div>
          </div>
			</div>
		</div>
    </section>


<br>
<br>
@endsection

