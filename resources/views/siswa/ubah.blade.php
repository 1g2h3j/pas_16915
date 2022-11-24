@extends('layouts.master')

@section('title', 'Data Table')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Horizontal Form Layout</h4>
                <form action="{{ route('siswa.update', $siswa->id_siswa) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="row mb-4">
                        <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input name="nama_siswa" type="text" class="form-control" id="inputNama" value="{{ $siswa->nama_siswa }}">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="inputNis" class="col-sm-2 col-form-label">NIP</label>
                        <div class="col-sm-10">
                            <input name="nip" type="number" class="form-control" id="inputNis" value="{{ $siswa->nis }}">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="inputNis" class="col-sm-2 col-form-label">Kelas</label>
                        <div class="col-sm-10">
                            <input name="kelas" type="text" class="form-control" id="inputNis" value="{{ $siswa->kelas }}">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label for="inputJK" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="jk" required>
                            <option selected>-- Pilih --</option>
                            <option value="L" {{ ($siswa->jk == 'L' ? 'selected' : '') }}>Laki-laki</option>
                            <option value="P" {{ ($siswa->jk == 'P' ? 'selected' : '') }}>Perempuan</option>
                          </select>
                      </div>
                    </div>
                    <div class="row mb-4">
                        <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input name="alamat" type="text" class="form-control" id="inputAlamat" value="{{ $siswa->alamat }}">
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <div>
                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                <a href="{{ route('siswa.index') }}" class="btn btn-danger btn-sm">Batal</a>
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