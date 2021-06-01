@extends('front_page.layouts.app')

@section('content')



<div class="main_slider">
                <div class="slider" id="main-slider">

                    @forelse($featured_posts as $post)

                    <div class="slide" style="background-color: #F5FCFE">
                        <div class="wrap">
                            <div class="wrap_float">
                                <div class="slide_left">
                                    <div class="slide_content">
                                        <div class="category"><a href="blog-fullwidth.html">{{$post->posts->post_categories->name}} </a> </div>
                                        <h2 class="title">
                                            {{$post->posts->post_title}}
                                        </h2>
                                        <a href="{{route('single_post',$post->posts->post_code)}}" class="link">
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="slide_right" data-slide="{{config('app.url')}}post_images/{{$post->posts->featured_image}}">
                                    <div class="slide-img" style="background-image: url({{config('app.url')}}post_images/{{$post->posts->featured_image}})"></div>
                                    <div class="read_more">
                                        <a href="post-page-fullwidth.html">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    @empty

                    <div class="slide" style="background-color: #F5FCFE">
                        <div class="wrap">
                            <div class="wrap_float">
                                <div class="slide_left">
                                    <div class="slide_content">
                                        <div class="category"><a href="blog-fullwidth.html">Fashion </a> | <a href="blog-fullwidth.html">Accessories</a></div>
                                        <h2 class="title">
                                            Collection beautiful wooden ring made by hand
                                        </h2>
                                        <a href="post-page-fullwidth.html" class="link">
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="slide_right" data-slide="{{config('app.url')}}meduza/img/demo-bg-3.jpg">
                                    <div class="slide-img" style="background-image: url({{config('app.url')}}meduza/img/demo-bg-3.jpg)"></div>
                                    <div class="read_more">
                                        <a href="post-page-fullwidth.html">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slide" style="background-color: #F5FCAA">
                        <div class="wrap">
                            <div class="wrap_float">
                                <div class="slide_left">
                                    <div class="slide_content">
                                        <div class="category"><a href="blog-fullwidth.html">Fashion </a> | <a href="blog-fullwidth.html">Accessories</a></div>
                                        <h2 class="title">
                                            New beautiful wooden ring made by hand
                                        </h2>
                                        <a href="post-page-fullwidth.html" class="link">
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="slide_right" data-slide="{{config('app.url')}}meduza/img/slide-1.jpg">
                                    <div class="slide-img" style="background-image: url('{{config('app.url')}}meduza/img/demo-bg.jpg')"></div>
                                    <div class="read_more">
                                        <a href="post-page-fullwidth.html">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    @endforelse



                </div>
                <div class="controls">
                    <div class="arrows">
                        <div class="arrow prev"></div>
                        <div class="arrow next"></div>
                    </div>
                    <div class="count">
                        <span class="current">01</span> <span class="all">03</span>
                    </div>
                </div>
                <div class="next-slides" id="next-slides"></div>
            </div>
            {{-- <section class="articles">
                <div class="wrap">
                    <div class="wrap_float">
                        <h2 class="title">
                           Todays Highlights
                        </h2>
                        <div class="section_content">
                            <a href="post-page-fullwidth.html" class="post">
                                <div class="_image ie-img">
                                    <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                </div>
                                <div class="_content">
                                    <div class="_category">Lifestyle</div>
                                    <h3 class="_title">
                                        On the other hand, we denounce with righteous indignation
                                    </h3>
                                    <div class="_author">
                                        <div class="userpic ie-img">
                                            <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                        </div>
                                        <p class="name">By Maya Delia – July 26, 2019</p>
                                    </div>
                                </div>
                            </a>
                            <div class="articles_slider_block" id="articles_slider_block">
                                <div class="arrows">
                                    <div class="arrow prev"></div>
                                    <div class="arrow next"></div>
                                </div>
                                <div class="articles_slider" id="articles_slider">
                                    <a href="post-page-fullwidth.html" class="post slide_item">
                                        <div class="_image ie-img">
                                            <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                        </div>
                                        <div class="_content">
                                            <div class="_category">Travel</div>
                                            <h3 class="_title">
                                                On the other hand, we denounce with righteous indignation
                                            </h3>
                                            <div class="_author">
                                                <div class="userpic ie-img">
                                                    <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                                </div>
                                                <p class="name">By Maya Delia – July 26, 2019</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="post-page-fullwidth.html" class="post slide_item">
                                        <div class="_image ie-img">
                                            <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                        </div>
                                        <div class="_content">
                                            <div class="_category">Lifestyle</div>
                                            <h3 class="_title">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui veritatis, dolor sapiente iste?
                                            </h3>
                                            <div class="_author">
                                                <div class="userpic ie-img">
                                                    <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                                </div>
                                                <p class="name">By Maya Delia – July 26, 2019</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <section class="products">
                <div class="wrap">
                    <div class="wrap_float">
                    <h2 class="title">
                           Welcome to Pecece
                        </h2>
                        {{-- <a href="{{route('register')}}" class="cover ie-img">
                            <h3 class="_titl">Become an author</h3>

                         
                            <img src="{{config('app.url')}}meduza/img/become_author.jpg" alt="">

                            
                        </a> --}}

                        <div style="max-widht: 120px; max-height: 450px; background-image: url({{config('app.url')}}/meduza/img/become_author.jpg); background-size: cover; padding: 10px;" class="cover">
                            
                            <h1 style="color: white; margin-top: 45px; text-align: center; font-size: 30pt;">Become an Author</h1>
                            
                            <button style="margin-left: 40px; margin-top: 100px; postion: absolute; width:400px; height: 45px; background-color: black; color: white; font-size: 20pt; padding: 5px;" class="button">Sign Up</button>

                          
                        </div>
                        <div class="products_block" id="products_block">
                            <div class="controls">
                                <div class="count">
                                    <span class="current">02</span> <span class="all">04</span>
                                </div>
                                <div class="arrows">
                                    <div class="arrow prev"></div>
                                    <div class="arrow next"></div>
                                </div>
                            </div>

                            <div class="products_slider" id="products_slider">
                                @forelse($top_categories as $category)

                                <a href="{{route('blog')}}" class="product_item">
                                    <div class="_image ie-img">
                                        <img src="{{config('app.url')}}categories/{{$category->cover_image}}" alt="">
                                        <div class="to-cart">View Posts</div>
                                    </div>
                                    <h3 class="_title">{{$category->name}}</h3>
                                    <!-- <p class="_cost">$135.00</p> -->
                                </a>

                                @empty

                                @endforelse


                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="posts">
                <div class="wrap">
                    <div class="wrap_float">
                        <h2 class="title">
                            Latest
                        </h2>
                        <div class="section_content">

                        @forelse($latest_posts as $post)

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

                        <h4 class="mt-5 text-center">No posts yet...</h4>


                        @endforelse




                        </div>
                    </div>
                </div>
            </section>

            <section class="posts padding">
                <div class="wrap">
                  
                </div>
            </section>



@endsection