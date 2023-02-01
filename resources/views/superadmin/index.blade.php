@extends('layouts.master')

@section('title','Data Siswa')

@section('headscript')

@section('content')
<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-body">

              <h4 class="card-title mb-3">Data Siswa
                {{-- <span>
                  <a href="{{ route('siswa.create') }}" class="btn btn-primary waves-effect waves-light btn-sm"><i class="fas fa-plus"></i></a>
                </span> --}}
              </h4>
              <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 ">
                  <thead>
                      <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>NIP</th>
                  <th>Role</th>
                  <th>Alamat</th>
                </tr>
                  </thead>
                  
                  <tbody>
                    <?php $i = 1; ?>
                @foreach($sadmin as $s)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$s->name}}</td>
                  <td>{{$s->nip}}</td>
                  <td>{{$s->role}}</td>
                  <td>{{$s->address}}</td>
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