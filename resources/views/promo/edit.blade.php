@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Promo
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('promo.update',$promos->id) }}" method="post" enctype="multipart/form-data" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
        			@if (isset($promos)&& $promos->foto)
        			<img src="{{ asset('assets/admin/images/icon/'.$promos->foto )}}" style="max-height:100px; max-width: 150px; margin-top: 6px;">
        			@endif
        			<div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
			  			<label class="control-label">Foto</label>
			  			<input type="file" name="foto" class="form-control" value="{{ $promos->foto }}"  required>
			  			@if ($errors->has('foto'))
                            <span class="help-block">
                                <strong>{{ $errors->first('foto') }}</strong>
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