@extends('layouts.master')

@section('title', 'Data Table')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Horizontol Form Layout</h4>
                <form action="{{ route('pembelajaran.store') }}" method="POST">
                    @csrf
                    <div class="row mb-4">
                        <label for="formrow-inputState" class="col-sm-2 col-form-label">Nama Guru</label>
                    <div class="col-sm-10">
                        <select id="formrow-inputState" class="form-select" name="id_guru" required>
                            <option value="0" selected></option>
                            @foreach ($guru as $pmb)
                                <option value="{{ $pmb->id_guru }}">{{ $pmb->nama_guru }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                    <div class="row mb-4">
                        <label for="formrow-inputState" class="col-sm-2 col-form-label">Mata Pelajaran</label>
                    <div class="col-sm-10">
                        <select id="formrow-inputState" class="form-select" name="id_mapel" required>
                            <option value="0" selected></option>
                            @foreach ($mapel as $pmb)
                                <option value="{{ $pmb->id_mapel }}">{{ $pmb->nama_mapel }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                    <div class="row mb-4">
                        <label for="inputNama" class="col-sm-2 col-form-label">Hari</label>
                        <div class="col-sm-10">
                            <input name="hari" type="text" class="form-control" id="inputNama">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="inputNip" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input name="tanggal" type="date" class="form-control" id="inputNip">
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <div>
                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                <a href="{{ route('pembelajaran.index') }}" class="btn btn-danger btn-sm">Batal</a>
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
