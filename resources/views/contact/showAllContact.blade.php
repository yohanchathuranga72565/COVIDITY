@extends('layouts.admin')

@section('content')
    <div class="container my-2">
        <div class="row justify-content-center my-2">
          <h2>Contact Messages</h2>
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
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone_Number</th>
                    <th scope="col"></th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                            <tr>
                                <th scope="row">{{ $contact->id }}</th>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->phone_number }}</td>
                                <td class="text-right">
                                
                                <form method="POST" action="{{route('contact.destroy',$contact->id) }}"  >
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-sm btn-info" href="#" data-toggle="modal" data-target="{{ '#contact'.$contact->id }}" ><i class="fa fa-eye" aria-hidden="true"></i> View</a>
                                    @if (Auth::user()->isA('admin'))
                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are you sure?')" ><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                    @endif
                                    
                                </form>
                                </td>
                            </tr>

                            {{-- view modal relate to the row --}}
                            <div class="modal fade" id="{{ 'contact'.$contact->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Contact Messages</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    
                                        <div class="row justify-content-center">
                                            <div class="col-12 mt-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                    <h5 class="card-title my-2">Name</h5>
                                                    <p class="card-text"><input type="text" class="form-control" value="{{ $contact->name }}" readonly></p>
                                                    <h5 class="card-title my-2">Email</h5>
                                                    <p class="card-text"><input type="text" class="form-control" value="{{ $contact->email }}" readonly></p>
                                                    <h5 class="card-title my-2">Phone_Number</h5>
                                                    <p class="card-text"><input type="text" class="form-control" value="{{ $contact->phone_number }}" readonly></p>
                                                    <h5 class="card-title my-2">Message</h5>
                                                    <p class="card-text"><textarea class="form-control" rows="8" readonly>{{ $contact->message }}</textarea></p>
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
                {{ $contacts->links() }}
        </div>
    </div>  
@endsection