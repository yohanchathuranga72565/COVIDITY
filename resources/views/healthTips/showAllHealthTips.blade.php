@extends('layouts.admin')

@section('content')
    <div class="container my-2">
        <div class="row justify-content-center my-2">
          <h2>All Health Tips</h2>
        </div>
        <div class="row justify-content-center my-2">
          <div class="col-2">
            <a href="{{route('healthTips.create')}}" class="btn btn-sm btn-primary"><i class="fa fa-sm fa-user-plus" aria-hidden="true"></i> Add new health tip</a>
          </div>
          <div class="col-10">
              {{-- can write something --}}
          </div>
        </div>
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
            <table class="table table-hover table-sm table-responsive-lg">
                <thead class="thead-dark">
                  <tr class="text-center">
                    <th scope="col">Id</th>
                    <th scope="col">Heading</th>
                    <th scope="col"></th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ($healthTips as $healthTip)
                            <tr>
                                <th scope="row">{{ $healthTip->id }}</th>
                                <td>{{ $healthTip->heading }}</td>
                                <td class="text-right">
                                <form method="POST" action="{{route('healthTips.destroy',$healthTip->id) }}"  >
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-sm btn-info" href="#" data-toggle="modal" data-target="{{ '#tips'.$healthTip->id }}" ><i class="fa fa-eye" aria-hidden="true"></i> View</a>
                                    <a class="btn btn-sm btn-warning" href="{{ route('healthTips.edit',$healthTip->id) }}" ><i class="far fa-edit"></i> Update</a>
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')" ><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>

                                </td>
                                </form>
                            </tr>

                            {{-- view modal relate to the row --}}
                            <div class="modal fade" id="{{ 'tips'.$healthTip->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Health Tip</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    
                                        <div class="row justify-content-center">
                                            <div class="col-12 mt-3">
                                                @if ($healthTip->image)
                                                    <img src="{{asset('storage/healthTips/'.$healthTip->image)}}" class="rounded img-fluid" width='100%' alt="User Image"><br><br> 
                                                @else
                                                    <img src="{{asset('storage/profileImages/profile.png')}}" class="rounded img-fluid" width='100%' alt="User Image">
                                                @endif    
                                            </div>
                                            <div class="col-12 mt-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                    <h5 class="card-title my-2">Heading</h5>
                                                    <p class="card-text"><input type="text" class="form-control" value="{{ $healthTip->heading }}" readonly></p>
                                                    <h5 class="card-title my-2">Descripsion</h5>
                                                    <p class="card-text"><textarea class="form-control" rows="8" readonly>{{ $healthTip->description }}</textarea></p>
                        
                                                    </div>
                                                </div>
                                            </div>
                                
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                </div>
                            </div>
               
                    @endforeach
                </tbody>
              </table>
              
        </div>
        <div class="row justify-content-center mt-5">
                {{ $healthTips->links() }}
        </div>
    </div>  
@endsection