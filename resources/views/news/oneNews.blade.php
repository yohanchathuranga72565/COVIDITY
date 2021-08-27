@extends('layouts.structure')

@section('content')
<div class="container mt-5">
    <div class="row pt-5">
        <div class="col-lg-8">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h3 class="fw-bolder mb-1">
                        {{ $news->heading }}
                    </h3>
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2">Posted on {{ $news->created_at }} by {{ $news->user->name }}</div>
                    <!-- Post categories-->
                    <!-- <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a> -->
                </header>
                <!-- Preview image figure-->
                <figure class="mb-4"><img class="img-fluid rounded" src="{{asset('storage/news/'.$news->image)}}" alt="..." /></figure>
                <!-- Post content-->
                <section class="mb-5">
                    <p class="fs-5 mb-4 text-justify">{{ $news->description }}</p>
                   
                </section>
            </article>
            
            

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