@extends('layouts.structure')

@section('content')
        <!-- Page Content-->
        <div class="container px-2 px-lg-8">
            <!-- Heading Row-->
            <div class="row my-5 gx-4 gx-lg-5 align-items-center ">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('user/assets/img/ht1.jpg') }}" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Stay Safe. Stay Home</h1>
                    <p>The COVID-19 is an infectious disease similar to the cold. It travels in droplets when you cough and sneeze, and in other
                        body fluids. Personal hygiene is the best prevention. </p><br>
                    <p>The Corona virus situation is still rapidly evolving and recommendations are subject
                        to change as additional information becomes available.</p>
    
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-dark my-5 py-4 text-center">
                <div class="card-body">
                    <p class="text-white m-0">Protect your loved ones againt Covid-19 by following good health tips.</p>
                </div>
            </div>
            <!-- Content Row-->
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('user/assets/img/wearMask.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Wear a mask.</h5>
                        <p class="card-text">People who have a condition or are taking medications that weaken their immune system
                            may not be fully protected even if they are fully vaccinated. They should continue to take all precautions recommended for
                            unvaccinated people, including wearing a well-fitted mask, until advised otherwise by their healthcare provider.</p>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('user/assets/img/washHands.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Wash your hands often.</h5>
                        <p class="card-text">Wash your hands often with soap and water for at least 20 seconds especially after you have been in a
                            public place, or after blowing your nose, coughing, or sneezing.
                            If soap and water are not readily available, use a hand sanitizer that contains at least 60% alcohol. Cover all surfaces of
                            your hands and rub them together until they feel dry.
                        </p>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('user/assets/img/distance.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Maintain distance.</h5>
                        <p class="card-text">Inside your home: Avoid close contact with people who are sick.
                            If possible, maintain 6 feet between the person who is sick and other household members.
                            Outside your home: Put 6 feet of distance between yourself and people who don’t live in your household.
                        </p>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
            <br>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('user/assets/img/vaccine.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Get vaccinated.</h5>
                        <p class="card-text">Authorized COVID-19 vaccines can help protect you from COVID-19.
                            You should get a COVID-19 vaccine as soon as you can.
                            Once you are fully vaccinated, you may be able to start doing some things that you had stopped doing because of the pandemic.</p>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('user/assets/img/crowd.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Avoid crowds and poorly ventilated spaces.</h5>
                        <p class="card-text">Being in crowds like in restaurants, bars, fitness centers, or movie theaters puts you at higher risk for COVID-19.
                            Avoid indoor spaces that do not offer fresh air from the outdoors as much as possible.
                            If indoors, bring in fresh air by opening windows and doors, if possible.
                        </p>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('user/assets/img/coughs.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Cover coughs and sneezes.</h5>
                        <p class="card-text">If you are wearing a mask: You can cough or sneeze into your mask. Put on a new, clean mask as soon as
                            possible and wash your hands. If you are not wearing a mask, Always cover your mouth and nose with a tissue when you
                            cough or sneeze, or use the inside of your elbow and do not spit. Throw used tissues in the trash.
                        </p>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
            <br>
        </div>
@endsection