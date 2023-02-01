@extends('layouts.master')

@section('title','Data Siswa')

@section('headscript')

@section('content')
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-4">Horizontal Form Layout</h4>

            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="row mb-4">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="username" class="col-sm-2 col-form-label">Userame</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="no_hp" class="col-sm-2 col-form-label">No. Telp</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="no_hp" name="no_hp">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="no_sim" class="col-sm-2 col-form-label">No. SIM</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="no_sim" name="no_sim">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                </div>

                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <div>
                            <button type="submit" class="btn btn-primary w-xs">Simpan</button>
                            <a href="{{ route('user.index') }}" class="btn btn-danger w-xs">Batal</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- end card body -->
    </div>
    <!-- end card -->
</div>
@endsection

@section('footscript')