@extends('layouts.master')

@section('title','Data Siswa')

@section('headscript')

@section('content')
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-4">Horizontal Form Layout</h4>

            <form action="{{ route('blog.store') }}" method="POST">
                @csrf
                <div class="row mb-4">
                    <label for="title" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="body" class="col-sm-2 col-form-label">Konten</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="body" name="body">
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <div>
                            <button type="submit" class="btn btn-primary w-xs">Simpan</button>
                            <a href="{{ route('blog.index') }}" class="btn btn-danger w-xs">Batal</a>
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