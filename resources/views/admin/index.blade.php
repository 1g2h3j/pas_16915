@extends('layouts.master')

@section('title','Data Admin')

@section('headscript')

@section('content')
<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-body">

              <h4 class="card-title mb-3">Data Admin
                <span>
                  <a href="{{ route('admin.create') }}" class="btn btn-primary waves-effect waves-light btn-sm"><i class="fas fa-plus"></i></a>
                </span>
              </h4>
              <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 ">
                  <thead>
                      <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>NIP</th>
                  <th>Password</th>
                  <th>Aksi</th>
                </tr>
                  </thead>
                  
                  <tbody>
                    <?php $i = 1; ?>
                @foreach($admin as $a)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$a->name}}</td>
                  <td>{{$a->email}}</td>
                  <td>{{$a->nip}}</td>
                  <td>{{$a->password}}</td>
                  <td>
                    <a href="{{ url('/admin/'.$a->id_admin.'/edit') }}" class="btn btn-warning px-3 mr-2">Edit<i class="fas fa-edit"></i></a>
                    <a href="{{ url('/admin/'.$a->id_admin.'/delete') }}" class="btn btn-danger">Delete <i class="fas fa-trash"></i></a>
                  </td>
                </tr>
                <?php $i++; ?>
                @endforeach
                  </tbody>
              </table>

          </div>
      </div>
  </div> <!-- end col -->
</div> <!-- end row -->
@endsection

@section('footscript')