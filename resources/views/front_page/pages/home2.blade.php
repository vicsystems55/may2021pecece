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
                                    <div class="slide-img" style="background-image: url({{config('app.url')}}meduza/img/slide-1.jpg)"></div>
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
            <section class="articles">
                <div class="wrap">
                    <div class="wrap_float">
                        <h2 class="title">
                            Blog & Shop <br> Home page
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
            </section>
            <section class="products">
                <div class="wrap">
                    <div class="wrap_float">
                        <a href="shop-instastore.html" class="cover ie-img">
                            <h3 class="_title">Instastore</h3>
                            <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                        </a>
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
                                <a href="catalog-item.html" class="product_item">
                                    <div class="_image ie-img">
                                        <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                        <div class="to-cart">+ Add to cart</div>
                                    </div>
                                    <h3 class="_title">Flamingo bag</h3>
                                    <p class="_cost">$135.00</p>
                                </a>
                                <a href="catalog-item.html" class="product_item">
                                    <div class="_image ie-img">
                                        <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                        <div class="to-cart">+ Add to cart</div>
                                    </div>
                                    <h3 class="_title">Shoes turquoise</h3>
                                    <p class="_cost">$255.00</p>
                                </a>
                                <a href="catalog-item.html" class="product_item">
                                    <div class="_image ie-img">
                                        <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                        <div class="to-cart">+ Add to cart</div>
                                    </div>
                                    <h3 class="_title">Flamingo bag</h3>
                                    <p class="_cost">$135.00</p>
                                </a>
                                <a href="catalog-item.html" class="product_item">
                                    <div class="_image ie-img">
                                        <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                        <div class="to-cart">+ Add to cart</div>
                                    </div>
                                    <h3 class="_title">Shoes turquoise</h3>
                                    <p class="_cost">$255.00</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="posts circle-posts">
                <div class="wrap">
                    <div class="wrap_float">
                        <a href="blog-fullwidth.html" class="post">
                            <div class="_image ie-img">
                                <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                            </div>
                            <div class="_content">
                                <div class="_category">Shopping</div>
                                <h3 class="_title">
                                    The point of using Lorem Ipsum is that it has a more-or-less normal
                                </h3>
                                <div class="_date">July 26, 2019</div>
                            </div>
                        </a>

                        <a href="blog-fullwidth.html" class="post">
                            <div class="_image ie-img">
                                <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                            </div>
                            <div class="_content">
                                <div class="_category">Music</div>
                                <h3 class="_title">
                                    Lorem Ipsum is that it has a more-or-less normal distribution of letters
                                </h3>
                                <div class="_date">July 26, 2019</div>
                            </div>
                        </a>

                        <a href="blog-fullwidth.html" class="post">
                            <div class="_image ie-img">
                                <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                            </div>
                            <div class="_content">
                                <div class="_category">Events</div>
                                <h3 class="_title">
                                    On the other hand, we denounce with righteous indignation
                                </h3>
                                <div class="_date">July 26, 2019</div>
                            </div>
                        </a>

                        <a href="blog-fullwidth.html" class="post">
                            <div class="_image ie-img">
                                <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                            </div>
                            <div class="_content">
                                <div class="_category">Inspiration</div>
                                <h3 class="_title">
                                    Indignation and dislike men who are so beguiled and demoralized
                                </h3>
                                <div class="_date">July 26, 2019</div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            <section class="posts">
                <div class="wrap">
                    <div class="wrap_float">
                        <h2 class="title">
                            Today Highlights <br> Reviews
                        </h2>
                        <div class="section_content">
                            <a href="post-page-fullwidth.html" class="post">
                                <div class="_image ie-img">
                                    <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                </div>
                                <div class="_content">
                                    <div class="_category">Lifestyle</div>
                                    <h3 class="_title">
                                        The point of using Lorem Ipsum is that it has a more-or-less normal
                                    </h3>
                                    <div class="_author">
                                        <div class="userpic ie-img">
                                            <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                        </div>
                                        <div class="name">By Maya Delia – July 26, 2019</div>
                                    </div>
                                    <p class="_text">
                                        The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. On the other hand, we denounce with righteous indignation
                                    </p>
                                </div>
                            </a>

                            <a href="post-page-fullwidth.html" class="post">
                                <div class="_image ie-img">
                                    <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                </div>
                                <div class="_content">
                                    <div class="_category">Lifestyle</div>
                                    <h3 class="_title">
                                        Lorem Ipsum is that it has a more-or-less normal distribution of letters
                                    </h3>
                                    <div class="_author">
                                        <div class="userpic ie-img">
                                            <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                        </div>
                                        <div class="name">By Maya Delia – July 26, 2019</div>
                                    </div>
                                    <p class="_text">
                                        On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment
                                    </p>
                                </div>
                            </a>

                            <a href="post-page-fullwidth.html" class="post">
                                <div class="_image ie-img">
                                    <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                </div>
                                <div class="_content">
                                    <div class="_category">Lifestyle</div>
                                    <h3 class="_title">
                                        On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized
                                    </h3>
                                    <div class="_author">
                                        <div class="userpic ie-img">
                                            <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                        </div>
                                        <div class="name">By Maya Delia – July 26, 2019</div>
                                    </div>
                                    <p class="_text">
                                        Lorem Ipsum is that it has a more-or-less normal distribution of letters
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="articles articles-left">
                <div class="wrap">
                    <div class="wrap_float">
                        <h2 class="title">
                            Health and beauty
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
                                        <div class="name">By Maya Delia – July 26, 2019</div>
                                    </div>
                                </div>
                            </a>
                            <div class="articles_slider_block" id="articles_slider_block-2">
                                <div class="arrows">
                                    <div class="arrow prev"></div>
                                    <div class="arrow next"></div>
                                </div>
                                <div class="articles_slider" id="articles_slider-2">
                                    <a href="post-page-fullwidth.html" class="post slide_item">
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
                                                <div class="name">By Maya Delia – July 26, 2019</div>
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
                                                <div class="name">By Maya Delia – July 26, 2019</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="products products-left">
                <div class="wrap">
                    <div class="wrap_float">
                        <a href="shop-instastore.html" class="cover ie-img">
                            <h2 class="_title">Instastore</h2>
                            <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                        </a>
                        <div class="products_block" id="products_block-2">
                            <div class="controls">
                                <div class="arrows">
                                    <div class="arrow prev"></div>
                                    <div class="arrow next"></div>
                                </div>
                                <div class="count">
                                    <span class="current">02</span> <span class="all">04</span>
                                </div>
                            </div>
                            <div class="products_slider" id="products_slider-2">
                                <a href="catalog-item.html" class="product_item">
                                    <div class="_image ie-img">
                                        <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                        <div class="to-cart">+ Add to cart</div>
                                    </div>
                                    <h3 class="_title">Flamingo bag</h3>
                                    <div class="_cost">$135.00</div>
                                </a>
                                <a href="catalog-item.html" class="product_item">
                                    <div class="_image ie-img">
                                        <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                        <div class="to-cart">+ Add to cart</div>
                                    </div>
                                    <h3 class="_title">Shoes turquoise</h3>
                                    <div class="_cost">$255.00</div>
                                </a>
                                <a href="catalog-item.html" class="product_item">
                                    <div class="_image ie-img">
                                        <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                        <div class="to-cart">+ Add to cart</div>
                                    </div>
                                    <h3 class="_title">Flamingo bag</h3>
                                    <div class="_cost">$135.00</div>
                                </a>
                                <a href="catalog-item.html" class="product_item">
                                    <div class="_image ie-img">
                                        <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                        <div class="to-cart">+ Add to cart</div>
                                    </div>
                                    <h3 class="_title">Shoes turquoise</h3>
                                    <div class="_cost">$255.00</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="posts circle-posts">
                <div class="wrap">
                    <div class="wrap_float">
                        <a href="post-page-fullwidth.html" class="post">
                            <div class="_image ie-img">
                                <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                            </div>
                            <div class="_content">
                                <div class="_category">Shopping</div>
                                <h3 class="_title">
                                    Indignation and dislike men who are so beguiled and demoralized
                                </h3>
                                <div class="_date">July 26, 2019</div>
                            </div>
                        </a>

                        <a href="post-page-fullwidth.html" class="post">
                            <div class="_image ie-img">
                                <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                            </div>
                            <div class="_content">
                                <div class="_category">Fashion</div>
                                <h3 class="_title">
                                    On the other hand, we denounce with righteous indignation
                                </h3>
                                <div class="_date">July 26, 2019</div>
                            </div>
                        </a>

                        <a href="post-page-fullwidth.html" class="post">
                            <div class="_image ie-img">
                                <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                            </div>
                            <div class="_content">
                                <div class="_category">Health and beauty</div>
                                <h3 class="_title">
                                    Lorem Ipsum is that it has a more-or-less normal distribution of letters
                                </h3>
                                <div class="_date">July 26, 2019</div>
                            </div>
                        </a>

                        <a href="post-page-fullwidth.html" class="post">
                            <div class="_image ie-img">
                                <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                            </div>
                            <div class="_content">
                                <div class="_category">Health and beauty</div>
                                <h3 class="_title">
                                    The point of using Lorem Ipsum is that it has a more-or-less normal
                                </h3>
                                <div class="_date">July 26, 2019</div>
                            </div>
                        </a>
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
                                    <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                </div>
                                <div class="_content">
                                    <div class="_category">Electronics</div>
                                    <h3 class="_title">
                                        Lorem Ipsum is that it has a more-or-less normal distribution of letters
                                    </h3>
                                    <div class="_author">
                                        <div class="userpic ie-img">
                                            <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
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
                                    <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                </div>
                                <div class="_content">
                                    <div class="_category">News | Electronics</div>
                                    <h3 class="_title">
                                        The point of using Lorem Ipsum is that it has a more-or-less normal
                                    </h3>
                                    <div class="_author">
                                        <div class="userpic ie-img">
                                            <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
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
                                    <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                </div>
                                <div class="_content">
                                    <div class="_category">News | Electronics</div>
                                    <h3 class="_title">
                                        On the other hand, we denounce with righteous indignation and dislike
                                    </h3>
                                    <div class="_author">
                                        <div class="userpic ie-img">
                                            <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
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



@endsection