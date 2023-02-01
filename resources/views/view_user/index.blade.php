@extends('layouts.view-index')

@section('content')

    <section class="jumbotron bg-main">
        <div class="container" style="padding-top: 8rem">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column gap-2">
                    <h1><i class="fa-solid fa-location-dot fs-large"></i> {{ config('app.name') }}</h1>
                    <h4 class="fst-italic pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, excepturi!</h4>
                    <p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni debitis velit vero! Beatae esse quas voluptatem explicabo sed, eveniet adipisci ea dignissimos labore debitis quisquam vero minus expedita magnam corrupti fugit laudantium, autem repudiandae iste nesciunt. Sit voluptate exercitationem ullam numquam, obcaecati, quia ex id ut cupiditate similique.</p>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                    <img src="{{ asset('/img/car.png') }}" class="img-fluid" alt="" width="500">
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FF9F29" fill-opacity="1" d="M0,128L60,144C120,160,240,192,360,176C480,160,600,96,720,96C840,96,960,160,1080,181.3C1200,203,1320,181,1380,170.7L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>

    <section>
        <div class="container">
            <div class="row text-center">
                <h1>Apa sih E-Parkir itu?</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime dicta, architecto, in dolorem nam dolorum sequi dolore vero fugit sed rerum. Doloremque ea illo iste molestiae aut? Nam modi, minus voluptatum ad quisquam quis, sint voluptas ipsa magni cupiditate quos! Repellendus laborum, officia quisquam aliquid eius enim quo recusandae tenetur non repellat in amet laudantium, pariatur atque labore. Voluptatibus unde necessitatibus illo, iure qui corporis enim tempora quis error assumenda ad possimus rem deleniti explicabo, maxime nemo, adipisci voluptates. Similique corrupti omnis quam quidem saepe beatae, nemo sint deleniti porro! Ullam, et aspernatur. Aspernatur tempora ipsam aperiam aut rerum non!</p>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FF9F29" fill-opacity="1" d="M0,192L60,181.3C120,171,240,149,360,160C480,171,600,213,720,240C840,267,960,277,1080,266.7C1200,256,1320,224,1380,208L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>

    <section class="bg-main">
        <div class="container">
            <div class="row d-flex flex-column text-center">
                <div class="col mb-5">
                    <h1>FITUR</h1>
                    <h4>Yang Terdapat Pada E-Parkir</h4>
                </div>
                <div class="col">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                          <div class="card bg-dark rounded-5">
                            <img src="{{ asset('/img/car.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card bg-dark rounded-5">
                            <img src="{{ asset('/img/car.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card bg-dark rounded-5">
                            <img src="{{ asset('/img/car.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card bg-dark rounded-5">
                            <img src="{{ asset('/img/car.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FF9F29" fill-opacity="1" d="M0,192L60,197.3C120,203,240,213,360,197.3C480,181,600,139,720,144C840,149,960,203,1080,218.7C1200,235,1320,213,1380,202.7L1440,192L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>

    <section class="mb-5 pb-5">
        <div class="container">
            <div class="row">
                <h1 class="text-center">Rekomendasi Artikel</h1>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card">
                        <img src="{{ asset('/img/car.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card">
                        <img src="{{ asset('/img/car.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card">
                        <img src="{{ asset('/img/car.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        </div>
                      </div>
                    </div>
            </div>
        </div>
    </section>

    <style>
        .bg-main{
            color: whitesmoke !important;
            background-color: #FF9F29 !important;
        }
        .fs-small{
            font-weight: 400 !important;
            font-size: 0.9rem !important;
        }
        .fs-medium{
            font-weight: 600;
            font-size: 1.2rem !important;
        }
        .fs-large{
            font-size: 4rem;
        }
    </style>
@endsection