@extends('layouts.master')

@section('title','Data Siswa')

@section('headscript')

@section('content')
<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-body">

              <h4 class="card-title mb-3">Data Siswa
                <span>
                  <a href="{{ route('user.create') }}" class="btn btn-primary waves-effect waves-light btn-sm"><i class="fas fa-plus"></i></a>
                </span>
              </h4>
              <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 ">
                  <thead>
                      <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Telp</th>
                  <th>No. SIM</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
                  </thead>
                  
                  <tbody>
                    <?php $i = 1; ?>
                @foreach($user as $u)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$u->name}}</td>
                  <td>{{$u->username}}</td>
                  <td>{{$u->email}}</td>
                  <td>{{$u->no_hp}}</td>
                  <td>{{$u->no_sim}}</td>
                  <td>{{$u->address}}</td>
                  <td>
                    <a href="{{ url('/user/'.$u->id_user.'/edit') }}" class="btn btn-warning px-3 mr-2">Edit<i class="fas fa-edit"></i></a>
                    <a href="{{ url('/user/'.$u->id_user.'/delete') }}" class="btn btn-danger">Delete <i class="fas fa-trash"></i></a>
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