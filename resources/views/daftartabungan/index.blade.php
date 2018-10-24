@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-primary">
              <center><h1><i style="font-size:25px;color:purple"> P E N D A F T A R A N  T A B U N G A N</i></h1></center>
              

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
                <div class="table-responsive">
                  <table class="table" id="myTable">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama </th>
                      <th>Tempat Lahir </th>
                      <th>Tanggal Lahir </th>
                      <th>Jenis Kelamin </th>
                      <th>Tanda Pengenal </th>
                      <th>No.Tanda Pengenal </th>
                      <th>Alamat sesuai </th>
                      <th>Alamat surat-menyurat </th>
                      <th>Email</th>
                      <th>Rencana Umroh Bersama </th>
                      <th>Nama Pendamping </th>
                      <th>Paket </th>
                      <th>Jumlah waktu menabung </th>
                      <th>Jumlah Setoran </th>
                      <th>setoran melalui </th>
                      

                      <th colspan="3">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($daftartabungans as $data)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->tempatlahir }}</td>
                        <td>{{ $data->tgllahir }}</td>
                        <td>{{ $data->jk }}</td>
                        <td>{{ $data->tanda }}</td>
                        <td>{{ $data->notanda }}</td>
                        <td>{{ $data->alamatsesuai }}</td>
                        <td>{{ $data->alamatsurat }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->rencana }}</td>
                        <td>{{ $data->pendamping }}</td>
                        <td>{{ $data->paket }}</td>
                        <td>{{ $data->jumlahwaktu }}</td>
                        <td>{{ $data->jumlahsetoran }}</td>
                        <td>{{ $data->setoran }}</td>
                        
                            <td><a class="btn btn-warning" href="{{ route('daftartabungan.edit',$data->id) }}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('daftartabungan.destroy',$data->id) }}">
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