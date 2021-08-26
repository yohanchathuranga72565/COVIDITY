@extends('layouts.structure')
@section('csslink')
    <link href="{{ asset('user/css/contact.css') }}" rel='stylesheet'>
@endsection
@section('content')
    <div class="contact_info">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">
                        <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="contact_info_image"><img src="https://img.icons8.com/office/24/000000/iphone.png" alt=""></div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Phone</div>
                                <div class="contact_info_text">+94 11 1234 567</div>
                            </div>
                        </div> <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="contact_info_image"><img src="https://img.icons8.com/ultraviolet/24/000000/filled-message.png" alt=""></div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Email</div>
                                <div class="contact_info_text">covidity@gmail.com</div>
                            </div>
                        </div> <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="contact_info_image"><img src="https://img.icons8.com/ultraviolet/24/000000/map-marker.png" alt=""></div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Address</div>
                                <div class="contact_info_text">No. 320, T.B. Jayah Mawatha, Colombo 10. Sri Lanka.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Contact Form -->
    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            @if(session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session()->get('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        </div>     
                    </div>
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="contact_form_container">
                                <div class="contact_form_title">Get in Touch</div>
                                <form action="{{ route('contact.store') }}" method="POST" id="contact_form">
                                    @csrf
                                    <div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
                                        <div class="m-1">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Your name" required autocomplete="name">
                
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        
                                        <div class="m-1">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Your email" required autocomplete="email">
                
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="m-1">
                                            <input id="pno" type="text" class="form-control @error('pno') is-invalid @enderror" pattern="^(?:7|0|(?:\+94))[0-9]{9,10}$" name="pno" value="{{ old('pno') }}" placeholder="Your phone number" required autocomplete="pno">
                
                                            @error('pno')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                
                                    </div>
                                    <div class="contact_form_text m-1">
                                        <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="4"></textarea>
                                        @error('message')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="contact_form_button"> <button type="submit" class="btn btn-lg btn-primary">Send Message</button> </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="{{ asset('user/assets/img/sanitizing.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Health Tips</h5>
                                    <p class="card-text"><b>Tips to protect you and your family.</b></p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    @foreach ($healthTips as $healthTip)
                                        <li class="list-group-item">{{ $healthTip->heading }}</li>
                                    @endforeach
                                    
                                </ul>
                                <div class="card-body">
                                    <a href="{{ route('healthTips.index') }}" class="card-link">More</a>
                                    <a href="{{ route('news.index') }}" class="card-link">Top News</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel"></div>
    </div>
 
@endsection