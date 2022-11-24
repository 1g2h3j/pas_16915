@extends('layouts.master')

@section('title', 'Data Table')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Horizontal Form Layout</h4>
                <form action="{{ route('mapel.update', $mapel->id_mapel) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="row mb-4">
                        <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input name="nama_mapel" type="text" class="form-control" id="inputNama" value="{{ $mapel->nama_mapel }}">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="inputNis" class="col-sm-2 col-form-label">NIP</label>
                        <div class="col-sm-10">
                            <input name="nip" type="text" class="form-control" id="inputNis" value="{{ $mapel->kode_mapel }}">
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <div>
                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                <a href="{{ route('mapel.index') }}" class="btn btn-danger btn-sm">Batal</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')