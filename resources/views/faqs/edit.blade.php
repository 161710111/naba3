@extends('layouts.admin')
@section('content')
<br>
<br>
<br>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Faqs
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('faqs.update',$faqs->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">pertanyaan</label>	
			  			<input type="text" value="{{ $faqs->pertanyaan }}" name="pertanyaan" class="form-control"  required>
			  			@if ($errors->has('pertanyaan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pertanyaan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jawaban') ? ' has-error' : '' }}">
			  			<label class="control-label">jawaban</label>	
			  			<input type="text" value="{{ $faqs->jawaban }}" name="jawaban" class="form-control"  required>
			  			@if ($errors->has('jawaban'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jawaban') }}</strong>
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