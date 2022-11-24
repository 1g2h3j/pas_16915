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
                  <a href="{{ route('siswa.create') }}" class="btn btn-primary waves-effect waves-light btn-sm"><i class="fas fa-plus"></i></a>
                </span>
              </h4>
              <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 ">
                  <thead>
                      <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>NIS</th>
                  <th>Kelas</th>
                  <th>JK</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
                  </thead>
                  
                  <tbody>
                    <?php $i = 1; ?>
                @foreach($siswa as $datas)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$datas->nama_siswa}}</td>
                  <td>{{$datas->nis}}</td>
                  <td>{{$datas->kelas}}</td>
                  <td>{{$datas->jk}}</td>
                  <td>{{$datas->alamat}}</td>
                  <td>
                    <div>
                      <a href="{{ url('/siswa/'.$datas->id_siswa.'/edit') }}" class="btn btn-sm btn-warning text-white">Edit <i class="fas fa-pen"></i></a>
                      <a href="{{ url('/siswa/'.$datas->id_siswa.'/delete') }}" class="btn btn-sm btn-danger">Delete <i class="fas fa-trash"></i></a>
                    </div>
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