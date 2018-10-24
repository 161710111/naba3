@extends('layouts.frontend')
@section('content')

	<!--POPUP-->
	<section class="p-0">
	<div class="container-fluid">
		<div class="row row-flex">
          <div class="col-md-8 col-sm-12">
            <div class="box-row pt-100 pb-100">
    	<div class="title mb-50">
                <h2>Form Pendaftaran Tabungan </h2>
              </div>
	 <form action="{{ route('daftar_tabungan.storeTabungan') }}" method="post" >
			  		{{ csrf_field() }}


			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama :</label>	
			  			<input type="text" placeholder="Nama Lengkap" name="nama" class="form-control"  required>
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


			  		<div class="form-group {{ $errors->has('tanda') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanda Pengenal :</label>	
			  			<select name="tanda" class="form-control" required>
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
			  			<label class="control-label">No. Tanda Pengenal (KTP/PASPOR) :</label>	
			  			<input type="text" name="notanda" placeholder="No. ktp/paspor" class="form-control"  required>
			  			@if ($errors->has('notanda'))
                            <span class="help-block">
                                <strong>{{ $errors->first('notanda') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('alamatsesuai') ? ' has-error' : '' }}">
			  			<label class="control-label">Alamat Sesuai (KTP/PASPOR) :</label>	
			  			<textarea class="form-control" name="alamatsesuai" type="text" placeholder="Alamat" required></textarea>
			  			@if ($errors->has('alamatsesuai'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamatsesuai') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		

			  		<div class="form-group {{ $errors->has('alamatsurat') ? ' has-error' : '' }}">
			  			<label class="control-label">Alamat Surat Menyurat :</label>	
			  			<textarea class="form-control" name="alamatsurat" type="text" placeholder="Alamat" required></textarea>
			  			@if ($errors->has('alamatsurat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamatsurat') }}</strong>
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

			  		<div class="form-group {{ $errors->has('rencana') ? ' has-error' : '' }}">
			  			<label class="control-label">Rencana Umroh Bersama :</label>	
			  			
			  			<select name="rencana" class="form-control" required>
						<option selected>- Pilih -</option>
						<option value="Suami/Istri">Suami/Istri</option>
						<option value="Sendiri">Sendiri</option>
						<option value="Orangtua">Orangtua</option>
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
			  			<label class="control-label">Nama Pendamping (Jika ada) : </label>	
			  			<input type="text" name="pendamping" placeholder="Nama Pendamping" class="form-control"  required>
			  			@if ($errors->has('pendamping'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pendamping') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('paket') ? ' has-error' : '' }}">
			  			<label class="control-label">Paket Umroh yang diinginkan :</label>	
			  			<input type="text" name="paket" placeholder="Nama Paket" class="form-control"  required>
			  			@if ($errors->has('paket'))
                            <span class="help-block">
                                <strong>{{ $errors->first('paket') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jumlahwaktu') ? ' has-error' : '' }}">
			  			<label class="control-label">Jangka Waktu Menabung yang Bapak/ibu inginkan:(12 / 24 / 36 / 48 Bulan)</label>	
			  			<input type="text" name="jumlahwaktu" placeholder="Contoh: 36 Bulan" class="form-control"  required>
			  			@if ($errors->has('jumlahwaktu'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlahwaktu') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jumlahsetoran') ? ' has-error' : '' }}">
			  			<label class="control-label">Jumlah Setoran : ( per hari/minggu/bulan)</label>	
			  			<input type="text" name="jumlahsetoran" placeholder="Contoh : 20.000/Hari" class="form-control"  required>
			  			@if ($errors->has('jumlahsetoran'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlahsetoran') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('setoran') ? ' has-error' : '' }}">
			  			<label class="control-label">Setoran/pembayaran dilakukan melalui : </label>	
			  			<select name="setoran" class="form-control" required>
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

@endsection
<br>
<br>

