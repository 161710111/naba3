@extends('layouts.admin')
@section('content')
<br>
<br>
<br>
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-primary">
              <center><h1><i style="font-size:25px;color:purple"> P E N D A F T A R A N  H A J I</i></h1></center>
              <div class="panel-heading">
                <div class="panel-title pull-right"><a href="{{ route('daftarhaji.create') }}"><i class="fa fa-plus"></i>Tambah</a>
        </div>
              </div>

              <br>
              <br>

              <div class="panel-body" style="color:black">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                    <tr>
                      <th>No</th>
                      
                      <th>Foto </th>
                      <th>Paket </th>
                      <th>Paspor </th>
                      <th>Nama </th>
                      <th>Tempat Lahir </th>
                      <th>Tanggal Lahir </th>
                      <th>Jenis Kelamin </th>
                      <th>Alamat </th>
                      <th>No.Telepon </th>
                      <th>Status</th>
                      <th>Pekerjaan </th>
                      <th>Jabatan </th>
                      <th>Alamat Kantor </th>
                      <th>No.telepon Kantor </th>
                      <th>Email </th>
                      <th>Keterangan </th>
                      

                      <th colspan="3">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($daftarhajis as $data)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td><img src="{{ asset('assets/admin/images/icon/'.$data->foto )}}" style="max-height:100px; max-width: 150px; margin-top: 6px;"></td>
                        <td>{{ $data->paket }}</td>
                        <td>{{ $data->paspor }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->tempatlahir }}</td>
                        <td>{{ $data->tgllahir }}</td>
                        <td>{{ $data->jk }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->notelp }}</td>
                        <td>{{ $data->status }}</td>
                        <td>{{ $data->pekerjaan }}</td>
                        <td>{{ $data->jabatan }}</td>
                        <td>{{ $data->almkantor }}</td>
                        <td>{{ $data->notelpkantor }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->keterangan }}</td>
                        
                            <td><a class="btn btn-warning" href="{{ route('daftarhaji.edit',$data->id) }}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('daftarhaji.destroy',$data->id) }}">
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