@extends('layouts.admin')
@section('content')
<br>
<br>
<br>
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-primary">
              <center><h1><i style="font-size:25px;color:purple"> H A J I </i></h1></center>
              <div class="panel-heading">
                <div class="panel-title pull-right"><a href="{{ route('haji.create') }}"><i class="fa fa-plus"></i>Tambah</a>
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
                      <th>Judul </th>
                      <th>Isi </th>
                      <th>Harga </th>
                      <th>Fasilitas Hotel</th>
                      <th>Pembatalan </th>
                      <th>Biaya Sudah Termasuk </th>
                      <th>Biaya Belum Termasuk </th>
                      <th>Persyaratan </th>
                      <th>Pendaftaran </th>
                      <th>Kategori </th>
                      <th colspan="3">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($hajis as $data)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->judul }}</td>
                        <td>{!! $data->isi!!}</td>
                        <td>{!!$data->harga!!}</td>
                        <td>{!!$data->fasilitas!!}</td>
                        <td>{!!$data->batal!!}</td>
                        <td>{!!$data->biayamasuk!!}</td>
                        <td>{!!$data->biayatidak!!}</td>
                        <td>{!!$data->syarat!!}</td>
                        <td>{!!$data->daftar!!}</td>
                        <td>{{ $data->Kategoria->nama_kategori }}</td>
                            <td><a class="btn btn-warning" href="{{ route('haji.edit',$data->id) }}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('haji.destroy',$data->id) }}">
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