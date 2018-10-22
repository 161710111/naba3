@extends('layouts.admin')
@section('content')
<br>
<br>
<br>
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-primary">
              <center><h1><i style="font-size:25px;color:purple"> K A T E G O R I  U M R A H </i></h1></center>
              <div class="panel-heading">
                <div class="panel-title pull-right"><a href="{{ route('kategorie.create') }}"><i class="fa fa-plus"></i>Tambah</a>
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
                      <th>Nama </th>
                      <th>Keterangan </th>
                      
                      <th colspan="3">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($kategories as $data)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->nama_kategori }}</td>
                        <td>{!!$data->keterangan!!}</td>

                        
                            <td><a class="btn btn-warning" href="{{ route('kategorie.edit',$data->id) }}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('kategorie.destroy',$data->id) }}">
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