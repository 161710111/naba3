@extends('layouts.admin')
@section('content')
<br>
<br>
<br>
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-primary">
              <center><h1><i style="font-size:25px;color:purple"> T A B U N G A N </i></h1></center>
              <div class="panel-heading">
                <div class="panel-title pull-right"><a href="{{ route('tabungan.create') }}"><i class="fa fa-plus"></i>Tambah</a>
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
                      <th>Keterangan </th>
                      <th>Keunggulan </th>
                      <th>Persyaratan </th>
                      <th>Ilustrasi </th>
                      <th>Note </th>

                      <th colspan="3">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($tabungans as $data)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->judul }}</td>
                        <td>{!!$data->keterangan!!}</td>
                        <td>{!!$data->keunggulan!!}</td>
                        <td>{!!$data->syarat!!}</td>
                        <td><img src="{{ asset('assets/admin/images/icon/'.$data->logo )}}" style="max-height:100px; max-width: 150px; margin-top: 6px;"></td>
                          <td>{!!$data->note!!}</td>

                            <td><a class="btn btn-warning" href="{{ route('tabungan.edit',$data->id) }}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('tabungan.destroy',$data->id) }}">
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