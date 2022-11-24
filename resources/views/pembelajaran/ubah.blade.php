@extends('layouts.master')

@section('title', 'Data Table')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Horizontal Form Layout</h4>
                <form action="{{ route('pembelajaran.update', $pembelajaran->id_pembelajaran) }}" method="POST">
                    @csrf
                    @method('put')
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
                        <label for="formrow-inputState" class="col-sm-2 col-form-label">Nama Guru</label>
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
                        <label for="inputNama" class="col-sm-2 col-form-label">Nama pembelajaran</label>
                        <div class="col-sm-10">
                            <input name="hari" type="text" class="form-control" id="inputNama" value="{{ $pembelajaran->hari }}">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="inputNis" class="col-sm-2 col-form-label">Kode pembelajaran</label>
                        <div class="col-sm-10">
                            <input name="tanggal" type="text" class="form-control" id="inputNis" value="{{ $pembelajaran->tanggal }}">
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