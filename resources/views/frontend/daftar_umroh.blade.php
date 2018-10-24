@extends('layouts.frontend')
@section('content')

	<!--POPUP-->

   <section class="p-0">
	<div class="container-fluid">
    	<div class="row row-flex">
          <div class="col-md-8 col-sm-12">
            <div class="box-row pt-100 pb-100">
    	<div class="title mb-50">
                <h2>Form Pendaftaran Umroh </h2>
              </div>
	 <form action="{{ route('daftar_umroh.store') }}" method="post" enctype="multipart/form-data" >
			  		{{ csrf_field() }}


			  		<div class="form-group {{ $errors->has('paket') ? ' has-error' : '' }}">
			  			<label class="control-label"><b>Paket :</b></label>	
			  			<input type="text" name="paket" class="form-control" placeholder="Nama Paket"  required>
			  			@if ($errors->has('paket'))
                            <span class="help-block">
                                <strong>{{ $errors->first('paket') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('paspor') ? ' has-error' : '' }}">
			  			<label class="control-label"><b> No Paspor :</b></label>	
			  			<input class="form-control" type="text" placeholder="No. Paspor" required name="paspor">
			  			@if ($errors->has('paspor'))
                            <span class="help-block">
                                <strong>{{ $errors->first('paspor') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label"><b> Nama Lengkap :</b></label>	
			  			<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tempatlahir') ? ' has-error' : '' }}">
			  			<label class="control-label"><b> Tempat Lahir :</b></label>	
			  			<input type="text" name="tempatlahir" class="form-control" placeholder="Tempat Lahir"  required>
			  			@if ($errors->has('tempatlahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tempatlahir') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tgllahir') ? ' has-error' : '' }}">
			  			<label class="control-label"><b> Tanggal Lahir :</b></label>	
			  			<input type="date" name="tgllahir" class="form-control"  required>
			  			@if ($errors->has('tgllahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgllahir') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jk') ? ' has-error' : '' }}">
			  			<label class="control-label"><b> Jenis Kelamin :</b></label>
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
			  			<label class="control-label"><b>Alamat :</b></label>	
			  			<textarea class="form-control" name="alamat" type="text" placeholder="Alamat" required></textarea>
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('notelp') ? ' has-error' : '' }}">
			  			<label class="control-label"></label><b> Telepon/Hp :</b></label>	
			  			<input type="text" name="notelp" class="form-control" placeholder="No. Telepon/Hp" required>
			  			@if ($errors->has('notelp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('notelp') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
			  			<label class="control-label"><b>Status Perkawinan :</b></label>	
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
			  			<label class="control-label"><b>Pekerjaan :</b></label>	
			  			<input type="text" name="pekerjaan" placeholder="Pekerjaan" class="form-control"  required>
			  			@if ($errors->has('pekerjaan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pekerjaan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jabatan') ? ' has-error' : '' }}">
			  			<label class="control-label"><b>Jabatan :</b></label>	
			  			<input type="text" name="jabatan" placeholder="Jabatan" class="form-control"  required>
			  			@if ($errors->has('jabatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jabatan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('almkantor') ? ' has-error' : '' }}">
			  			<label class="control-label"><b>Alamat Kantor :</b></label>	
			  			<textarea class="form-control" name="almkantor" type="text" placeholder="Alamat Kantor" required></textarea>
			  			@if ($errors->has('almkantor'))
                            <span class="help-block">
                                <strong>{{ $errors->first('almkantor') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('notelpkantor') ? ' has-error' : '' }}">
			  			<label class="control-label"><b>No Telp Kantor :</b></label>	
			  			<input type="text" name="notelpkantor" placeholder="No. Telepon Kantor" class="form-control"  required>
			  			@if ($errors->has('notelpkantor'))
                            <span class="help-block">
                                <strong>{{ $errors->first('notelpkantor') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
			  			<label class="control-label"><b>Email :</b></label>	
			  			<input type="text" name="email" placeholder="Email" class="form-control"  required>
			  			@if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('keterangan') ? ' has-error' : '' }}">
			  			<label class="control-label"><b> Keterangan :</b> </label>	
			  			<input type="text" name="keterangan" placeholder="Contoh : Berangkat Bulan Januari" class="form-control"  required>
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
			<h5><b>Tambah Foto</b></h5>
             
			<div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
			  			<label class="control-label"><b>foto</b></label>	
			  			<input type="file" id="foto" name="foto" class="validate" accept="image/*" required>
			  			@if ($errors->has('foto'))
                            <span class="help-block">
                                <strong>{{ $errors->first('foto') }}</strong>
                            </span>
                        @endif
					</div>
             			  
            </div>
          </div>
		</div>
		</div>
    </section>

<br>
<br>
@endsection

