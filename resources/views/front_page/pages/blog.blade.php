@extends('front_page.layouts.app')


@section('content')

<div class="page blog fullwidth">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="breadcrumbs">
                        <a href="#">Home</a> - <a href="#" class="current">Blog Fullwidth</a>
                    </div>
                    <div class="title-block">
                        <h1 class="title">Blog Fullwidth</h1>
                        <div class="select_wrap">
                            <div class="label">All categories</div>
                            <select>
                                <option value="All categories">All categories</option>
                                <option value="Coding">Coding</option>
                                <option value="Design">Design</option>
                            </select>
                        </div>
                    </div>
                    <div class="page_content posts">
                        <a href="post-page-fullwidth.html" class="post">
                            <div class="_image ie-img">
                                <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                            </div>
                            <div class="_content">
                                <div class="_category">News</div>
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
                                <div class="_category">News | Health and beauty</div>
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
                                <div class="_category">Photography</div>
                                <h3 class="_title">
                                    On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized
                                </h3>
                                <div class="_author">
                                    <div class="userpic ie-img">
                                        <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                    </div>
                                    <div class="name">By Victor Shibut – July 26, 2019</div>
                                </div>
                                <p class="_text">
                                    Lorem Ipsum is that it has a more-or-less normal distribution of letters
                                </p>
                            </div>
                        </a>
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
                        <button class="show_more">
                            <span>more</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>


@endsection