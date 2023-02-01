@extends('layouts.view-index')

@section('content')
<section>
    <div class="container my-5 d-flex flex-row justify-content-center" style="padding-top: 4rem">
        <div class="row">
            <div class="card shadow border-0 rounded-4" style="width: 30rem">
                <div class="card-body">
                    <div class="">
                        <ul class="nav nav-pills d-flex flex-row justify-content-around mb-3" id="pills-tab"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-login-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-login" type="button" role="tab" aria-controls="pills-login"
                                    aria-selected="true">Login</button>
                            </li>
                            <div class="d-flex" style="height: 40px;">
                                <div class="vr"></div>
                            </div>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-register-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-register" type="button" role="tab"
                                    aria-controls="pills-register" aria-selected="false">Registrasi</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-login" role="tabpanel"
                            aria-labelledby="pills-login-tab" tabindex="0">
                            <label for="emailInput" class="form-label">Email</label>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="emailInput">
                            </div>
                            <label for="passwordInput" class="form-label">Password</label>
                            <div class="input-group mb-5">
                                <input type="text" class="form-control" id="passwordInput" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-eye"></i></span>
                            </div>
                            <div class="mb-3">
                                <button class="btn w-100 p-2 rounded-4 bg-main">Login</button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="pills-register-tab" tabindex="0">
                            <label for="emailInput" class="form-label">Email</label>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="emailInput">
                            </div>
                            <label for="passwordInput" class="form-label">Password</label>
                            <div class="input-group mb-5">
                                <input type="text" class="form-control" id="passwordInput" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-eye"></i></span>
                            </div>
                            <div class="mb-3">
                                <button class="btn w-100 p-2 rounded-4 bg-main">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<style scoped>
    .nav-pills .nav-link {
        font-weight: 600;
        font-size: 1.3rem;
        color: #FF9F29 !important;
        background: none !important;
    }

</style>
@endsection
