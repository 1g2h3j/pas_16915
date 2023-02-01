<!doctype html>
<html lang="en">
{{-- <html lang="en" data-bs-theme="dark"> --}}

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link rel="icon" href="{{ asset('/img/parking.png') }}" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;1,100;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm bg-main">
        <div class="container-fluid mx-lg-2">
            <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark" href="#">Login <i class="fa-solid fa-right-to-bracket"></i></a>
                    </li>
                    {{-- <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-user pe-2"></i>Profile</a>
                </li> --}}
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container py-5">
            <div class="row d-flex flex-row align-items-center justify-content-center">
                <div class="col-12">
                    <h1 class="text-center">{{ config('app.name') }}</h1>
                </div>
                <div class="col-12 py-3">
                    <ul class="navbar-nav d-flex flex-row justify-content-center gap-4">
                        <li class="nav-item">
                            <a class="nav-link fs-medium" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-medium" href="#">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-medium" href="#">Kontak</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12">
                    <ul class="navbar-nav d-flex flex-row justify-content-center gap-4">
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="tooltip" data-bs-title="Instagram"><i
                                    class="bi bi-instagram fs-3"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="tooltip" data-bs-title="Linkedin"><i
                                    class="bi bi-linkedin fs-3"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="tooltip" data-bs-title="Github"><i
                                    class="bi bi-github fs-3"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center bg-main py-2 fs-small">
            Copyright &copy;<script>
                document.write(new Date().getFullYear());

            </script> All rights reserved |
            <a class="text-white text-decoration-none" href="#">{{ config('app.name') }}</a>
        </div>
        <!-- Copyright -->
    </footer>

    <style>
        body {
            scroll-behavior: smooth;
            font-family: 'Poppins' !important;
        }

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
        }

        ::-webkit-scrollbar {
            width: 3px;
            background-color: #dbdbdb;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #828282;
        }

        .bg-main {
            color: whitesmoke !important;
            background-color: #FF9F29 !important;
        }

        footer .nav-link:hover {
            color: #FF9F29;
        }


        .btn,
        .btns:focus {
            outline: none !important;
            box-shadow: none !important;
        }

        .form-check-input,
        .form-select,
        .form-control,
        .accordion-button {
            box-shadow: none !important;
        }

    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

    </script>
</body>

</html>
