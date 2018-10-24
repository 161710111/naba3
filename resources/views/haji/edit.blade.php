@extends('layouts.admin')
@section('content')

<script src="{{ asset('assets/tinymce/js/tinymce/tinymce.js') }}"></script>
<script type="text/javascript">
    tinymce.init({
  selector: 'textarea',
  height: 300,
  theme: 'modern',
  plugins: 'print preview fullpage  searchreplace autolink directionality  visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount   imagetools  contextmenu colorpicker textpattern help',
  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });

</script>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Haji
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('haji.update',$hajis->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
			  			<label class="control-label">Judul</label>	
			  			<input type="text" value="{{ $hajis->judul }}" name="nama" class="form-control"  required>
			  			@if ($errors->has('judul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('isi') ? ' has-error' : '' }}">
			  			<label class="control-label">isi</label>	
			  			<textarea  name="isi"  class="form-control" required>{{ $hajis->isi }}</textarea>
			  			@if ($errors->has('isi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('isi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">harga</label>	
			  			<textarea  name="harga"  class="form-control" required>{{ $hajis->harga }}</textarea>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('fasilitas') ? ' has-error' : '' }}">
			  			<label class="control-label">fasilitas</label>	
			  			<textarea  name="fasilitas" class="form-control" required>{{ $hajis->fasilitas }}</textarea>
			  			@if ($errors->has('fasilitas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('fasilitas') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('batal') ? ' has-error' : '' }}">
			  			<label class="control-label">batal</label>	
			  			<textarea  name="batal"  class="form-control" required>{{ $hajis->batal }}</textarea>
			  			@if ($errors->has('batal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('batal') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('biayamasuk') ? ' has-error' : '' }}">
			  			<label class="control-label">biayamasuk</label>	
			  			<textarea  name="biayamasuk"  class="form-control" required>{{ $hajis->biayamasuk }}</textarea>
			  			@if ($errors->has('biayamasuk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('biayamasuk') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('biayatidak') ? ' has-error' : '' }}">
			  			<label class="control-label">biayatidak</label>	
			  			<textarea  name="biayatidak"  class="form-control" required>{{ $hajis->biayatidak }}</textarea>
			  			@if ($errors->has('biayatidak'))
                            <span class="help-block">
                                <strong>{{ $errors->first('biayatidak') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('syarat') ? ' has-error' : '' }}">
			  			<label class="control-label">syarat</label>	
			  			<textarea  name="syarat"  class="form-control" required>{{ $hajis->syarat }}</textarea>
			  			@if ($errors->has('syarat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('syarat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('daftar') ? ' has-error' : '' }}">
			  			<label class="control-label">daftar</label>	
			  			<textarea  name="daftar"  class="form-control" required> {{ $hajis->daftar }}</textarea>
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
			  				<option value="{{ $data->id }}" {{ $selectedkategoria = $data->id ? 'selected="selected"' : '' }} >{{ $data->nama_kategori }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('kategoria_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kategoria_id') }}</strong>
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