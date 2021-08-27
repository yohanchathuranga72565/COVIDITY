{{-- @extends('layouts.structure')

@section('content')
        <!-- Header-->
        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-0">One Page Wonder</h1>
                    <h2 class="masthead-subheading mb-0">Will Rock Your Socks Off</h2>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">Learn More</a>
                </div>
            </div>
            <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div>
        </header>
        <!-- Content section 1-->
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="{{ asset('user/assets/img/01.jpg') }}" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">For those about to rock...</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 2-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="{{ asset('user/assets/img/02.jpg') }}" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">We salute you!</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 3-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="{{ asset('user/assets/img/03.jpg') }}" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Let there be rock!</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection --}}
      
@extends('layouts.structure')
@section('csslink')
    <link rel="stylesheet" href="{{ asset('user/home/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('user/home/css/owl.carousel.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('user/home/css/ticker-style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('user/home/css/flaticon.css') }}"/>
    <link rel="stylesheet" href="{{ asset('user/home/css/slicknav.css') }}"/>
    <link rel="stylesheet" href="{{ asset('user/home/css/animate.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('user/home/css/magnific-popup.css') }}"/>
    <link rel="stylesheet" href="{{ asset('user/home/css/fontawesome-all.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('user/home/css/themify-icons.css') }}"/>
    <link rel="stylesheet" href="{{ asset('user/home/css/slick.css') }}"/>
    <link rel="stylesheet" href="{{ asset('user/home/css/nice-select.css') }}"/>
    <link rel="stylesheet" href="{{ asset('user/home/css/style.css') }}"/>
@endsection
@section('content')
<main class="my-5">
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                       <br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                <img src="{{asset('storage/news/'.$latestOne->image)}}" alt="">
                                <div class="trend-top-cap">
                                    
                                    <h2><a href="details.html">{{ $latestOne->heading }}.</a></h2>
                                </div>
                                
                            </div>
                            <p class="text-justify">
                                {{ $latestOne->description }}
                            </p>
                        </div>
                        <!-- Trending Bottom -->
                        
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4">
                        <div class="row mb-3">
                            <span class="color1">Recently Added</span>
                        </div>
                        @foreach ($latestNews as $item)
                            <div class=" row trand-right-single d-flex">
                                <div class="col-4 trand-right-img">
                                    <div class="card" style="width: 6rem;">
                                        <img src="{{asset('storage/news/'.$item->image)}}" alt="">
                                    </div>
                                </div>
                                <div class="col-8 trand-right-cap">
                                    <span class="color1">{{ $item->created_at }}</span>
                                    <h4><a href="{{ route('news.show',$item->id) }}">{{ $item->heading }}</a></h4>
                                </div>
                            </div>
                        @endforeach     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <div class="weekly2-news-area  weekly2-pading gray-bg">
            <div class="container">
                <div class="weekly2-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>HEALTH TIPS</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="weekly2-news-active dot-style d-flex dot-style">
                                @foreach ($healthTips as $item)
                                    <div class="weekly2-single">
                                        <div class="weekly2-img">                      
                                                <img src="{{ asset('storage/healthTips/'.$item->image) }}" alt=""/>
                                        </div>
                                        <div class="weekly2-caption">
                                            <span class="color1">{{ $item->created_at }}</span>
                                            <h4><a href="{{ route('healthTips.index') }}">{{ $item->heading }}</a></h4>
                                        </div>
                                    </div> 
                                @endforeach                         
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
         
    <!-- End Weekly-News -->
    <!-- Start Youtube -->

    <!--  Recent Articles start -->

    <div class="recent-articles">
        <div class="container">
           <div class="recent-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>OLD NEWS</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="recent-active dot-style d-flex dot-style">
                            @foreach ($news as $item)
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                            <img src="{{ asset('storage/news/'.$item->image) }}" alt="">
                                    
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">{{ $item->created_at }}</span>
                                        <h4><a href="{{ route('news.show',$item->id) }}">{{ $item->heading }}</a></h4>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>    
          
    <!--Recent Articles End -->
    <!--Start pagination -->
    {{-- <div class="pagination-area pb-45 text-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-wrap d-flex justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                              <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow roted"></span></a></li>
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                              <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow right-arrow"></span></a></li>
                            </ul>
                          </nav>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End pagination  -->
    </main>
@endsection
@section('jslink')
    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{ asset('user/home/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('user/home/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('user/home/js/popper.min.js') }}"></script>
    <script src="{{ asset('user/home/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('user/home/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('user/home/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user/home/js/slick.min.js') }}"></script>
    <!-- Date Picker -->
    <script src="{{ asset('user/home/js/gijgo.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('user/home/js/wow.min.js') }}"></script>
    <script src="{{ asset('user/home/js/animated.headline.js') }}"></script>
    <script src="{{ asset('user/home/js/jquery.magnific-popup.js') }}"></script>

    <!-- Breaking New Pluging -->
    <script src="{{ asset('user/home/js/jquery.ticker.js') }}"></script>
    <script src="{{ asset('user/home/js/site.js') }}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ asset('user/home/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('user/home/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('user/home/js/jquery.sticky.js') }}"></script>
    
    <!-- contact js -->
    <script src="{{ asset('user/home/js/contact.js') }}"></script>
    <script src="{{ asset('user/home/js/jquery.form.js') }}"></script>
    <script src="{{ asset('user/home/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('user/home/js/mail-script.js') }}"></script>
    <script src="{{ asset('user/home/js/jquery.ajaxchimp.min.js') }}"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="{{ asset('user/home/js/plugins.js') }}"></script>
    <script src="{{ asset('user/home/js/main.js') }}"></script>
@endsection

