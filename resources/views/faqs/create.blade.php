@extends('layouts.admin')
@section('content')
<br>
<br>
<br>

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Faqs
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('faqs.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('pertanyaan') ? ' has-error' : '' }}">
			  			<label class="control-label">pertanyaan</label>	
			  			<input type="text" name="pertanyaan" class="form-control"  required>
			  			@if ($errors->has('pertanyaan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pertanyaan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jawaban') ? ' has-error' : '' }}">
			  			<label class="control-label">jawaban</label>	
			  			<textarea type="text" name="jawaban" class="form-control"  required>
			  			@if ($errors->has('jawaban'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jawaban') }}</strong>
                            </span>
                        @endif
                    </textarea>
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