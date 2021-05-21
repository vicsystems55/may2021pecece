@extends('front_page.layouts.app')


@section('content')

<div class="mainpage">
    <div class="main_slider">
        <div class="slider" id="main-slider">
            <div class="slide" style="background-image: url({{config('app.url')}}categories/{{$category->cover_image??'uncategorized.png'}}); background-size: cover;">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="slide_left">
                            <div class="slide_content">
                                <!-- <div class="category"><a href="blog-fullwidth.html">Fashion </a> | <a href="blog-fullwidth.html">Accessories</a></div> -->
                                <h1 style="font-size: 70pt; color: white;" class="title">
                                    {{$category_name}}
                                </h1>
                                <!-- <a href="post-page-fullwidth.html" class="link">
                                    <span>Read More</span>
                                </a> -->
                            </div>
                        </div>
                        <div class="slide_right" data-slide="img/demo-bg.jpg">
                            <div class="slide-img" style="background-image: url(img/demo-bg.jpg)"></div>
                            <div class="read_more">
                                <a href="post-page-fullwidth.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>


    <section class="posts">
        <div class="wrap">
            <div class="wrap_float">
                <h2 class="title">
                    Latest
                </h2>
                <div class="section_content">


                    @forelse($category_posts as $post)

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

                        <h1 class="mt-5 text-center">No post yet..</h1>


                    @endforelse



                </div>
            </div>
        </div>
    </section>


    <section class="posts padding">
        <div class="wrap">
            <div class="wrap_float">
                <h2 class="title">Electronics</h2>
                <div class="section_content">
                    <a href="post-page-fullwidth.html" class="post">
                        <div class="_image ie-img">
                            <img src="img/demo-bg.jpg" alt="">
                        </div>
                        <div class="_content">
                            <div class="_category">Electronics</div>
                            <h3 class="_title">
                                Lorem Ipsum is that it has a more-or-less normal distribution of letters
                            </h3>
                            <div class="_author">
                                <div class="userpic ie-img">
                                    <img src="img/demo-bg.jpg" alt="">
                                </div>
                                <div class="name">By Maya Delia – July 26, 2019</div>
                            </div>
                            <p class="_text">
                                Now that we have mentioned it, you probably perfectly understand why it is important for the payment process to go as smoothly as possible. After all, if a customer has
                            </p>
                        </div>
                    </a>

                    <a href="post-page-fullwidth.html" class="post">
                        <div class="_image ie-img">
                            <img src="img/demo-bg.jpg" alt="">
                        </div>
                        <div class="_content">
                            <div class="_category">News | Electronics</div>
                            <h3 class="_title">
                                The point of using Lorem Ipsum is that it has a more-or-less normal
                            </h3>
                            <div class="_author">
                                <div class="userpic ie-img">
                                    <img src="img/demo-bg.jpg" alt="">
                                </div>
                                <div class="name">By Maya Delia – July 26, 2019</div>
                            </div>
                            <p class="_text">
                                Now that we have mentioned it, you probably perfectly understand why it is important for the payment process to go as smoothly as possible. After all, if a customer has
                            </p>
                        </div>
                    </a>

                    <a href="post-page-fullwidth.html" class="post">
                        <div class="_image ie-img">
                            <img src="img/demo-bg.jpg" alt="">
                        </div>
                        <div class="_content">
                            <div class="_category">News | Electronics</div>
                            <h3 class="_title">
                                On the other hand, we denounce with righteous indignation and dislike
                            </h3>
                            <div class="_author">
                                <div class="userpic ie-img">
                                    <img src="img/demo-bg.jpg" alt="">
                                </div>
                                <div class="name">By Victor Shibut – July 26, 2019</div>
                            </div>
                            <p class="_text">
                                Now that we have mentioned it, you probably perfectly understand why it is important for the payment process to go as smoothly as possible. After all, if a customer has
                            </p>
                        </div>
                    </a>
                </div>
                <div class="btn_wrap">
                    <a href="blog-fullwidth.html" class="show_more">
                        <span>see all articles</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>



@endsection