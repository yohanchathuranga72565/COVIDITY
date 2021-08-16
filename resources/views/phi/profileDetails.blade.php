@extends('layouts.admin')

@section('content')
    <div class="container mb-5 mt-5">
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
        <div class="row justify-content-center">
            <div class="col-12 col-lg-4 mt-3">
              @if ($phi->profile_image)
                  <img src="{{asset('storage/profileImages/'.$admin->profile_image)}}" class="rounded img-fluid" width='100%' alt="User Image"><br><br> 
              @else
                  <img src="{{asset('storage/profileImages/profile.png')}}" class="rounded img-fluid" width='100%' alt="User Image">
              @endif
                @if (Auth::user()->isA('phi'))
                  <a class="btn btn-primary" href="#" data-toggle="modal" data-target=".edit-profile"><i class="fa fa-user" aria-hidden="true"></i> Edit profile Details</a>
                  <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#edit-profile-image"><i class="fa fa-camera" aria-hidden="true"></i> Edit profile Image</a>   
                @endif
                
            </div>
            <div class="col-12 col-lg-8 mt-3">
                <div class="card">
                    <div class="card-header">
                      Profile Details
                    </div>
                    <div class="card-body">
                      <h5 class="card-title my-2">Name</h5>
                      <p class="card-text"><input type="text" class="form-control" value="{{ $phi->name }}" readonly></p>
                      <h5 class="card-title my-2">Email</h5>
                      <p class="card-text"><input type="text" class="form-control" value="{{ $phi->email }}" readonly></p>
                      <h5 class="card-title my-2">Address</h5>
                      <p class="card-text"><input type="text" class="form-control" value="{{ $phi->address }}" readonly></p>
                      <h5 class="card-title my-2">Birth date</h5>
                      <p class="card-text"><input type="text" class="form-control" value="{{ $phi->dob }}" readonly></p>
                      <h5 class="card-title my-2">Gender</h5>
                      <p class="card-text"><input type="text" class="form-control" value="{{ $phi->gender }}" readonly></p>
                      <h5 class="card-title my-2">Mobile Number</h5>
                      <p class="card-text"><input type="text" class="form-control" value="{{ $phi->phone_number }}" readonly></p>
                    </div>
                  </div>
            </div>

        </div>
    </div>
    
@endsection