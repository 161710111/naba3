@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<center><h1><i style="font-size:25px;color:purple">Y O U T U B E </i></h1></center>
				<div class="panel-heading">
					<div class="panel-title pull-right"><a href="{{ route('youtube.create') }}"><i class="fa fa-plus"></i>Tambah</a>
				</div>
			</div>

<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

			<br>
              <br>

	<div class="table-responsive" style="color:black">
		<table class="table" id="myTable">
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