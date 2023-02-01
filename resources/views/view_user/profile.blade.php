@extends('layouts.view-index')

@section('content')
    <section>
        <div class="container my-5" style="padding-top: 4rem">
                <div class="card mb-3 py-4">
                    <div class="row g-0">
                      <div class="col-md-4 text-center">
                        <div class="row d-flex flex-column align-items-center">
                            <div class="col-md-6">
                                <img src="{{ asset('/img/profile.jpg') }}" class="img-fluid rounded-circle shadow mb-4" alt="...">
                            </div>
                            <div class="col-md-6">
                                <h4 class="fw-bold">Your Name</h1>
                                <p class="p-0">@username</p>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="card-body pe-5">
                              <div class="mb-3 row">
                                <label for="name" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="name" name="name">
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="username" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="username" name="username">
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                  <input type="email" class="form-control" id="email" name="email">
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                  <input type="password" class="form-control" id="password" name="password">
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="no_hp" class="col-sm-2 col-form-label">No. Telepon</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="no_hp" name="no_hp">
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="no_sim" class="col-sm-2 col-form-label">No. SIM</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="no_sim" name="no_sim">
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="address" name="address">
                                </div>
                              </div>
                              {{-- <div class="mb-3 row">
                                <label for="formFile" class="col-sm-2 col-form-label">Foto SIM</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                              </div> --}}
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
    </section>

    <style scoped>
        .img-fluid{
            height: 10rem;
            width: 10rem;
            object-fit: contain
        }
    </style>
@endsection