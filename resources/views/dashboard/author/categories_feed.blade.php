@extends('dashboard.layouts.app')

@section('content')

<div class="content-body">
    <div class="container">
        <div class="card col-md-10">
            <div class="card-body">
                <h4>Post from categories you are subscribed to</h4>
            </div>
        </div>

        <div class="row">

            @forelse ($feeds as $post)

            <div class="col-xl-4">
                <div class="card mb-3">
                    <img class="card-img-top img-fluid" src="{{config('app.url')}}post_images/{{$post->featured_image}}" alt="Card image cap">
                    <div class="card-header">
                        <h5 class="card-title">{{$post->post_title}}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{$post->post_description}}
                        </p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">{{$post->post_authors->name}}</p>
                        <a href="{{route('single_post', $post->post_code)}}" class="card-link float-right">View Post</a>
                    </div>
                </div>
            </div>

                
            @empty

            <h4 class="mt-3 text-center">No feeds yet..</h4>
                
            @endforelse



        </div>
    
    </div>
</div>


@endsection