@extends('layouts.structure')

@section('content')
<div class="container mt-5">
    <div class="row py-5">
        <div class="col-lg-8">
            <div class="row">
                @foreach ($news as $item)
                    <div class="col-6 card mb-4">
                        <a href="#!"><img class="card-img-top" src="{{asset('storage/news/'.$item->image)}}" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{ $item->created_at }}</div>
                            <h2 class="card-title h4">{{ $item->heading }}</h2>
                            <p class="card-text">{{ Str::substr($item->description,0,40) }}...</p>
                            <a class="btn btn-primary" href="{{ route('news.show',$item->id) }}">Read more →</a>
                        </div>
                    </div> 
                @endforeach
            </div>
            <div class="row justify-content-center mt-5">
                {{ $news->links() }}
            </div>
        </div>
        
        <!-- Side widgets-->
        <div class="col-lg-4">
            <div class="card-header" ><b>Recent News / Helth tips</b></div>
            <div class="stretch-card grid-margin">
                <div class="card bg-dark text-white">
                  <div class="card-body">
                    <h2>Recent news</h2>
                    @foreach ($latestNews as $item)
                    <a href="{{ route('news.show',$item->id) }}">
                        <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between" >
                        <div class="pr-3">
                            <h5>{{ $item->heading }}</h5>
                            <div class="fs-12">
                                <div class="small text-muted">{{ $item->created_at }}</div>
                            </div>
                        </div>
                        <div class="rotate-img">
                            <img src="{{asset('storage/news/'.$item->image)}}" alt="thumb" class="img-fluid img-lg"/>
                        </div>
                        </div>
                    </a>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
            <!-- Categories widget-->   
        </div>   
    </div>
</div>
@endsection