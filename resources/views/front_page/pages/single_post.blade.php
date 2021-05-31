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

                               @auth()
                               <likeunlike-component user_id="{{Auth::user()->id??120010}}" post_id="{{$post_data->id}}"></likeunlike-component>


                               @endauth
                                    <h4>{{$post_comments->count()}} Comments</h4>

                                    <div style="margin-top: 30px;" class="author">
                                    <a target="_blank" href="{{route('public_profile',$post_data->post_authors->id )}}">
                                        <div class="img ie-img">
                                            <img src="{{config('app.url')}}avatars/{{$post_data->post_authors->avatar}}" alt="">
                                        </div>
                                        <div class="name">By {{$post_data->post_authors->name}} – {{$post_data->updated_at->format('M')}} {{$post_data->updated_at->format('d')}}, {{$post_data->updated_at->format('Y')}}</div>
                                    
                                    </a>
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

                                    <example-component post_id="{{$post_data->id}}"></example-component>


                                   


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

<div class="modal share-block" id="share-block">
    <div class="close"></div>
    <div class="wrap">
        <div class="wrap_float">
            <div class="close mobile-close"></div>
            <div class="links">
                <a href="https://www.facebook.com/sharer/sharer.php?u={{config('app.url')}}single_post/{{$post_data->post_code}}" class="link facebook"></a>
                <a href="#" class="link pinterest"></a>
                <a href="#" class="link twitter"></a>
                <a href="#" class="link linked"></a>
                <a href="#" class="link email"></a>
            </div>
        </div>
    </div>
</div>