@extends('layouts.structure')
@section('content')
    <!-- Icons Grid-->
    <section class="features-icons bg-light text-center">
        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <img src="" alt="">
                </div>
            </div>
            <div class="row py-5">
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi bi-clock m-auto"></i></div>
                        <h3>24h Service</h3>
                        <p class="lead mb-0">Contact us at any emergency</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi bi-newspaper m-auto"></i></div>
                        <h3>Live News Updates</h3>
                        <p class="lead mb-0">Grab every important news</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi bi-people m-auto"></i></div>
                        <h3>Experts' Guidance</h3>
                        <p class="lead mb-0">Take reliable professionals' guidance</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Image Showcases-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 my-auto showcase-text">
                    <h2>Who we are</h2>
                    <p class="lead mb-0">The health authority is the main state organization in Sri Lanka for governance of health,
                        publicity of health information, health education and health promotion.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('user/assets/img/about/doc2.jpg') }}" alt="Card image cap">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 order-lg-first order-last">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('user/assets/img/about/doc1.jpg') }}" alt="Card image cap">
                    </div>
                </div>
                {{-- <div class="col-lg-6 text-white showcase-img" style="background-image: url('{{ asset('user/assets/img/about/doc2.png') }}')"></div> --}}
                <div class="col-lg-6 order-lg-last order-fisrt my-auto showcase-text">
                    <h2>Our Vision and Misson</h2>
                    <p class="lead mb-0">Our vision is to be a supporting force to the nation to achieve their development
                        goals by taking care of their health.
                    </p><br><br>
                    <p class="lead mb-0">Our mission is to advocate and catalyze our country actions to resolve the human
                        resources for health crisis, to support the achievement of the health related millenium development and
                        health for all.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 my-auto showcase-text">
                    <h2>Future Plans</h2>
                    <p class="lead mb-0">Currently, making Sri Lanka a Covid free country is at the top of our targets.
                        Also digitizing process of entite health work flow is achieving it's progress gradually.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('user/assets/img/about/doc3.jpg') }}" alt="Card image cap">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials-->
    <section class="testimonials text-center bg-light">
        <div class="container">
            <h2 class="my-5">Board of Directors</h2>
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="{{ asset('user/assets/img/about/moh1.jpg') }}" alt="..." />
                        <h5>Buddhika Bandara</h5>
                        <h5>Medical Officer of Health</h5>
                        <h5>Kaluthara Division</h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="{{ asset('user/assets/img/about/moh2.jpg') }}" alt="..." />
                        <h5>Eeshan Poornima</h5>
                        <h5>Medical Officer of Health</h5>
                        <h5>Gampaha Division</h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="{{ asset('user/assets/img/about/moh3.jpg') }}" alt="..." />
                        <h5>Yohan Chathuranga</h5>
                        <h5>Medical Officer of Health</h5>
                        <h5>Galle Division</h5>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-3">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="{{ asset('user/assets/img/about/moh4.jpg') }}" alt="..." />
                        <h5>Imesha Sandamini</h5>
                        <h5>Medical Officer of Health</h5>
                        <h5>Rathnapura Division</h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="{{ asset('user/assets/img/about/moh5.jpg') }}" alt="..." />
                        <h5>Hasara Tharudini</h5>
                        <h5>Medical Officer of Health</h5>
                        <h5>Thanamalvila Division</h5>
                    </div>
                </div>
            </div>
    </section>
    <!-- Call to Action-->
    <section class="call-to-action text-white text-center" id="signup">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <h2 class="mb-4">We dedicate to make you healthy.</h2>

                </div>
            </div>
        </div>
    </section>
@endsection