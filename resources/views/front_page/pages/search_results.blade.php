@extends('front_page.layouts.app')


@section('content')

<div class="page blog fullwidth search-results">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="breadcrumbs">
                        <a href="#">Home</a> - <a href="#">Grid</a> - <a href="#" class="current">Fullwidth</a>
                    </div>
                    <div class="title-block">
                        <h1 class="title"><span>Result of search <span class="count">23</span></span></h1>
                        <div class="search-text">
                            On request "<b>{{$searchTerm}}</b>" found {{$all_posts->count()}} posts
                        </div>
                    </div>

                    <div class="page_content posts">

                        @forelse($all_posts as $post)

                        <a href="{{route('single_post', $post->post_code)}}" class="post">
                            <div class="_image ie-img">
                                <img src="{{config('app.url')}}post_images/{{$post->featured_image}}" alt="">
                            </div>
                            <div class="_content">
                                <div class="_category">{{$post->post_categories->name}}</div>
                                <h3 class="_title">
                                    {{$post->post_title}}
                                </h3>
                                <div class="_author">
                                    <div class="userpic ie-img">
                                        <img src="{{config('app.url')}}avatars/{{$post->post_authors->avatar}}" alt="">
                                    </div>
                                    <div class="name">By {{$post->post_authors->name}} – {{$post->updated_at->format('M')}} {{$post->updated_at->format('d')}} , {{$post->updated_at->format('Y')}}</div>
                                </div>
                                <p class="_text">
                                    {{$post->post_description}}
                                </p>
                            </div>
                        </a>


                    @empty

                        <h1 class="mt-5 text-center">No results found...</h1>


                    @endforelse



                        
                    </div>
                    <div class="btn_wrap">
                        <button class="show_more">
                            <span>Back to blog</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>


@endsection