@extends('layouts.admin')
@section('content')
<br>
<br>
<br>
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">Umroh Reguler
                <div class="panel-title pull-right"><a class="btn btn-warning" href="{{ route('wisata.create') }}">Tambah</a>
                </div>
              </div>

              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                    <tr>
                      <th>No</th>
                      
                      <th>Judul </th>
                      <th>isi </th>
                      <th>foto </th>
                      <th>lokasi </th>
                      <th>harga </th>
                      <th>hotel </th>
                      <th>keterangan </th>
                      <th>kategori </th>
                      <th colspan="3">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($wisatas as $data)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->judul }}</td>
                        <td>{{ $data->isi }}</td>
                        <td><img src="{{ asset('assets/admin/images/icon/'.$data->foto )}}" style="max-height:60px; max-width: 60px; margin-top: 6px;"></td>
                        <td>{{ $data->lokasi }}</td>
                        <td>{{ $data->harga }}</td>
                        <td>{{ $data->hotel }}</td>
                        <td>{{ $data->keterangan }}</td>
                        <td>{{ $data->Kategoriw->nama_kategori }}</td>
                            <td><a class="btn btn-warning" href="{{ route('wisata.edit',$data->id) }}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('wisata.destroy',$data->id) }}">
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