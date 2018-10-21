@extends('layouts.admin')
@section('content')
<br>
<br>
<br>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<center><h1><i style="font-size:25px;color:purple">Y O U T U B E </i></h1></center>
				<div class="panel-heading">
					<div class="panel-title pull-right"><a href="{{ route('youtube.create') }}"><i class="fa fa-plus"></i>Tambah</a>
				</div>
			</div>

			<br>
              <br>

	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Title</th>
					<th>Url</th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($youtube as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td> {{ $data->title }} </td>
		<td> {{ $data->url }} </td>
		
		
	<td>
		<a class="btn btn-primary" href=" {{ route('youtube.edit',$data->id)}} "><i class="fa fa-edit"></i>Edit </a>
	</td>
	
	<td>
							<form method="post" action="{{ route('youtube.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i>Hapus </button>
								
							</form>
						</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection