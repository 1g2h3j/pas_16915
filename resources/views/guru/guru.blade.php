@extends('layouts.master')

@section('title','Data Siswa')

@section('headscript')

@section('content')
<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-body">

              <h4 class="card-title mb-3">Data Guru
                <span>
                  <a href="{{ route('guru.create') }}" class="btn btn-primary waves-effect waves-light btn-sm"><i class="fas fa-plus"></i></a>
                </span>
              </h4>
              <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 ">
                  <thead>
                      <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>NIP</th>
                  <th>JK</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
                  </thead>
                  
                  <tbody>
                    <?php $i = 1; ?>
                @foreach($guru as $datas)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$datas->nama_guru}}</td>
                  <td>{{$datas->nip}}</td>
                  <td>{{$datas->jk}}</td>
                  <td>{{$datas->alamat}}</td>
                  <td>
                    <div>
                      <a href="{{ url('/guru/'.$datas->id_guru.'/edit') }}" class="btn btn-sm btn-warning text-white">Edit <i class="fas fa-pen"></i></a>
                      <a href="{{ url('/guru/'.$datas->id_guru.'/delete') }}" class="btn btn-sm btn-danger">Delete <i class="fas fa-trash"></i></a>
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