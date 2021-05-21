@extends('front_page.layouts.app')


@section('content')

<div class="page blog-page with-sidebar right-sidebar">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="breadcrumbs">
                        <a href="#">Blog</a> - <a href="#" class="current">{{$post_data->post_title}}</a>
                    </div>
                    <div class="page_content">

                        <div class="post-content">
                            <main class="main">
                                <div class="post-image ie-img">
                                    <img src="{{config('app.url')}}post_images/{{$post_data->featured_image}}" alt="">
                                </div>
                                <div class="post-head">
                                    <div class="category">
                                        <a href="#">{{$post_data->post_categories->name}}</a> 
                                    </div>

                                    <h2 class="title">
                                        {{$post_data->post_title}}
                                    </h2>

                                    <likeunlike-component user_id="{{Auth::user()->id}}" post_id="{{$post_data->id}}"></likeunlike-component>


                                    <h4>{{$post_comments->count()}} Comments</h4>

                                    <div style="margin-top: 30px;" class="author">
                                        <div class="img ie-img">
                                            <img src="{{config('app.url')}}avatars/{{$post_data->post_authors->avatar}}" alt="">
                                        </div>
                                        <div class="name">By {{$post_data->post_authors->name}} – {{$post_data->updated_at->format('M')}} {{$post_data->updated_at->format('d')}}, {{$post_data->updated_at->format('Y')}}</div>
                                    </div>
                                    <div style="background-color: transparent;" class="share-btn">
                                        

                                    
                                    </div>
                                 
                                    <div style="margin-top: 30px;" class="comments-count">
                                       
                                    </div>
                                </div>
                                <div class="post-body _content">
                                    {!! $post_data->post_body !!}
                                </div>
                                <div class="post-foot">
                                    <div class="tags">
                                        <div class="share-btn">Share</div>
                                        <a href="#">Life</a>
                                        <a href="#">Shopping</a>
                                        <a href="#">Products</a>
                                        <a href="#">Life</a>
                                        <a href="#">Shopping</a>
                                        <a href="#">Products</a>
                                        <a href="#">Life</a>
                                        <a href="#">Shopping</a>
                                        <a href="#">Products</a>
                                        <a href="#">Life</a>
                                        <a href="#">Shopping</a>
                                        <a href="#">Products</a>

                                    </div>
                                    
                                        @include('front_page.inc.post_author')
                                    <div class="post-nav">
                                        <a class="post next">
                                            <div class="img ie-img">
                                                <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                            </div>
                                            <div class="_subtitle">Next post</div>
                                            <h4 class="_title">
                                                Sydney’s newest northern beaches all-star pub
                                            </h4>
                                            <div class="_date">October 26, 2018</div>
                                        </a>
                                        <a class="post prev">
                                            <div class="img ie-img">
                                                <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                            </div>
                                            <div class="_subtitle">Previous post</div>
                                            <h4 class="_title">
                                                Sydney’s newest northern beaches all-star pub
                                            </h4>
                                            <div class="_date">October 26, 2018</div>
                                        </a>
                                    </div>

                                    <example-component></example-component>


                                    <!-- @include('front_page.inc.comment_section') -->


                                  @include('front_page.inc.related_post')


                                </div>
                            </main>
                            @include('front_page.inc.post_sidebar')
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection