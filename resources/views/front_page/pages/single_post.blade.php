@extends('front_page.layouts.app')


@section('content')

<div class="page blog-page with-sidebar right-sidebar">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="breadcrumbs">
                        <a href="#">Home</a> - <a href="#" class="current">Post Page Right Sidebar</a>
                    </div>
                    <div class="page_content">

                        <div class="post-content">
                            <main class="main">
                                <div class="post-image ie-img">
                                    <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                </div>
                                <div class="post-head">
                                    <div class="category">
                                        <a href="#">News</a> | <a href="#">Films</a>
                                    </div>

                                    <h2 class="title">
                                        On the other hand, we denounce with righteous indignation
                                    </h2>
                                    <div class="author">
                                        <div class="img ie-img">
                                            <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                        </div>
                                        <div class="name">By Maya Delia – July 26, 2019</div>
                                    </div>
                                    <div class="share-btn">Share</div>
                                    <div class="comments-count">
                                        0 Comments
                                    </div>
                                </div>
                                <div class="post-body _content">
                                    <p class="description">
                                        Certainly, they are not an answer to everything. The key feature of a website generator lies in universality. In principle, they should meet the requirements and expectations of the majority. When it comes to situations when you require something special or unique, this isn’t the option for you. What’s more, often the builders fail to provide all the essential stuff free.
                                    </p>
                                    <p>
                                        When designers create products, they tell stories to users. <a href="#">Designers have a lot of tools</a> to make a story more interesting. Motion design is one of the most powerful tools designers have. The true power of motion can be seen in mobile experiences. A mobile app without motion is just a sequence of independent screens. But when designers introduce motion, something magical happens – a design comes alive – an app becomes an interactive story that can engage users.
                                    </p>
                                    <p>
                                        Today we explore the concept of motion design in the interfaces of the future with Artificial Intelligence (AI) assistants. It is a sort of a decider: whether your readers will be back or ditch you and your company.
                                    </p>
                                    <div class="slider-block">
                                        <div class="slider js_slider">
                                            <div class="slide ie-img">
                                                <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                            </div>
                                            <div class="slide ie-img">
                                                <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="arrows"></div>
                                    </div>
                                    <p class="signature">Signature under photo</p>
                                    <h2>Header H2</h2>
                                    <p>
                                        When designers create products, they tell stories to users. Designers have a lot of tools to make a story more interesting. Motion design is one of the most powerful tools designers have. The true power of motion can be seen in mobile experiences. A mobile app without motion is just a sequence of independent screens. But when designers introduce motion, something magical happens – a design comes alive – an app becomes an interactive story that can engage users.
                                    </p>
                                    <h3>Header H3</h3>
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                    </ul>
                                    <h4>Header H4</h4>
                                    <p>
                                        When designers create products, they tell stories to users. Designers have a lot of tools to make a story more interesting. Motion design is one of the most powerful tools designers have. The true power of motion can be seen in mobile experiences.
                                    </p>
                                    <ol>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                    </ol>
                                    <h5>Header H5</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium natus suscipit ullam eaque tenetur placeat consectetur soluta minus quod. Labore.
                                    </p>
                                    <img src="{{config('app.url')}}meduza/img/demo-bg-2.jpg" alt="">
                                    <h6>Header H6</h6>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates sit commodi, eligendi excepturi quo dolorum, accusamus porro illum ipsa, quod, repellendus delectus! Excepturi corporis labore, ad rerum. Aperiam, sunt obcaecati.
                                    </p>
                   
                                    <p>
                                        When designers create products, they tell stories to users. Designers have a lot of tools to make a story more interesting. Motion design is one of the most powerful tools designers have. The true power of motion can be seen in mobile experiences. A mobile app without motion is just a sequence of independent screens. But when designers introduce motion, something magical happens – a design comes alive – an app becomes an interactive story that can engage users.
                                    </p>
                             
               
                        
                                    <p class="signature">Signature under video</p>
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


                                    @include('front_page.inc.comment_section')


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