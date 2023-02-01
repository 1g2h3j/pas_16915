@extends('layouts.master')

@section('title','Data Blog')

@section('headscript')

@section('content')
<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-body">

              <h4 class="card-title mb-3">Data Blog
                <span>
                  {{-- <a href="{{ route('blogs.create') }}" class="btn btn-primary waves-effect waves-light btn-sm"><i class="fas fa-plus"></i></a> --}}
                </span>
              </h4>
              <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 ">
                  <thead>
                      <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Body</th>
                  <th>Aksi</th>
                </tr>
                  </thead>
                  
                  <tbody>
                    <?php $i = 1; ?>
                @foreach($blog as $b)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{ $b->title }}</td>
                    <td>{{ Str::limit($b->body, 120) }}</td>
                    <td>
                    <a href="{{ url('/blog/'.$b->id_blogs.'/edit') }}" class="btn btn-warning px-3 mr-2">Edit<i class="fas fa-edit"></i></a>
                    <a href="{{ url('/blog/'.$b->id_blogs.'/delete') }}" class="btn btn-danger">Delete <i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <?php $i++; ?>
                @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>

<style scoped>
  .truncate {
  width: 250px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
</style>
@endsection

@section('footscript')