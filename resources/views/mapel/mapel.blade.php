@extends('layouts.master')

@section('title','Data mapel')

@section('headscript')

@section('content')
<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-body">

              <h4 class="card-title mb-3">Data mapel
                <span>
                  <a href="{{ route('mapel.create') }}" class="btn btn-primary waves-effect waves-light btn-sm"><i class="fas fa-plus"></i></a>
                </span>
              </h4>
              <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 ">
                  <thead>
                      <tr>
                  <th>No</th>
                  <th>Nama Mapel</th>
                  <th>Kode Mapel</th>
                  <th>Aksi</th>
                </tr>
                  </thead>
                  
                  <tbody>
                    <?php $i = 1; ?>
                @foreach($mapel as $datas)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$datas->nama_mapel}}</td>
                  <td>{{$datas->kode_mapel}}</td>
                  <td>
                    <div>
                      <a href="{{ url('/mapel/'.$datas->id_mapel.'/edit') }}" class="btn btn-sm btn-warning text-white">Edit <i class="fas fa-pen"></i></a>
                      <a href="{{ url('/mapel/'.$datas->id_mapel.'/delete') }}" class="btn btn-sm btn-danger">Delete <i class="fas fa-trash"></i></a>
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