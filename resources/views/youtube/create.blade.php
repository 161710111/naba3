@extends('layouts.admin')
@section('content')
<br>
<br>
<br>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<center><h1>Y o u t u b e</h1></center>
			  <div class="panel-heading"> 
			  	<div class="panel-title pull-right"><a href="{{ route('youtube.index') }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('youtube.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
			  			<label class="control-label">Title</label>	
			  			<input type="text" name="title" class="form-control"  required>
			  			@if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('url') ? ' has-error' : '' }}">
			  			<label class="control-label">Url</label>	
			  			<input type="text" name="url" class="form-control"  required>
			  			@if ($errors->has('url'))
                            <span class="help-block">
                                <strong>{{ $errors->first('url') }}</strong>
                            </span>
                        @endif
			  		</div>

			  	
			  	
			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Add</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection