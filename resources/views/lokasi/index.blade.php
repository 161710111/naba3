@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-primary">
              <center><h1><i style="font-size:25px;color:purple"> L O K A S I  W I S A T A </i></h1></center>
              <div class="panel-heading">
                <div class="panel-title pull-right"><a href="{{ route('lokasi.create') }}"><i class="fa fa-plus"></i>Tambah</a>
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

              <div class="panel-body" style="color:black">
                <div class="table-responsive" >
                  <table class="table" id="myTable">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>foto </th>
                      <th>nama </th>
                      <th>harga </th>
                      <th>hotel </th>
                      <th>keterangan </th>
                      <th>kategori </th>
                      <th colspan="3">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($lokasis as $data)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td><img src="{{ asset('assets/admin/images/icon/'.$data->foto )}}" style="max-height:100px; max-width: 150px; margin-top: 6px;"></td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->harga }}</td>
                        <td>{{ $data->hotel }}</td>
                        <td>{!!$data->keterangan!!}</td>
                        <td>{{ $data->Kategoriw->nama_kategori }}</td>
                            <td><a class="btn btn-warning" href="{{ route('lokasi.edit',$data->id) }}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('lokasi.destroy',$data->id) }}">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">

                                <button type="submit" class="btn btn-danger">Delete</button>
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