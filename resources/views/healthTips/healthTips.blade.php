@extends('layouts.structure')

@section('content')
        <!-- Page Content-->
        <div class="container my-5 px-2 px-lg-8">
            <!-- Heading Row-->
            <div class="row py-5 gx-4 gx-lg-5 align-items-center ">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('user/assets/img/ht1.jpg') }}" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Stay Safe. Stay Home</h1>
                    <p>The COVID-19 is an infectious disease similar to the cold. It travels in droplets when you cough and sneeze, and in other
                        body fluids. Personal hygiene is the best prevention. </p><br>
                    <p>The Corona virus situation is still rapidly evolving and recommendations are subject
                        to change as additional information becomes available.</p>
    
                </div>
            </div>
            <div class="row justify-content-center py-3">
                <div class="col-12 col-md-5">
                    @livewire('questions')
                </div>
                <div class="col-12 col-md-5">
                    @livewire('comments')
                </div>  
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-dark my-5 py-4 text-center">
                <div class="card-body">
                    <p class="text-white m-0">Protect your loved ones againt Covid-19 by following good health tips.</p>
                </div>
            </div>
            <!-- Content Row-->
            <div class="row justify-content-center">
                @foreach ($healthTips as $healthTip)
                    <div class="card col-md-4 col-12">
                        <img class="card-img-top" src="{{asset('storage/healthTips/'.$healthTip->image)}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $healthTip->heading }}</h5>
                            <p class="card-text text-justify">{{ $healthTip->description }}</p>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                @endforeach
            </div>
            <br>
            <div class="row justify-content-center mt-5">
                    {{ $healthTips->links() }}
            </div>
        </div>
        <div class="container my-5 px-2 px-lg-8">
            
        </div>
        
        
@endsection