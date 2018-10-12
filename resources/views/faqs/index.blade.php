@extends('layouts.admin')
@section('content')
<br>
<br>
<br>
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">Faqs
                <div class="panel-title pull-right"><a class="btn btn-warning" href="{{ route('faqs.create') }}">Tambah</a>
                </div>
              </div>

              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Pertanyaan </th>
                      <th>Jawaban </th>
                      <th colspan="3">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($faqs as $data)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->pertanyaan }}</td>
                        <td>{{ $data->jawaban }}</td>
                            <td><a class="btn btn-warning" href="{{ route('faqs.edit',$data->id) }}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('faqs.destroy',$data->id) }}">
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