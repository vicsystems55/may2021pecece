<aside class="sidebar">
                                <div class="_block popular">
                                    <h3 class="block_title">Popular posts</h3>
                                    <div class="_items">

                                        @forelse($popular_posts as $post)

                                        <a href="{{route('single_post', $post->post_code)}}" class="item">
                                            <div class="img ie-img">
                                                <img src="{{config('app.url')}}post_images/{{$post->featured_image}}" alt="">
                                            </div>
                                            <div class="category">{{$post->post_categories->name}}</div>
                                            <h4 class="_title">
                                                {{$post->post_title}}
                                            </h4>
                                            <div class="date">{{$post->updated_at->format('M')}} {{$post->updated_at->format('d')}} , {{$post->updated_at->format('Y')}}</div>
                                        </a>


                                        @empty


                                        @endforelse
                                       

                                       




                                    </div>
                                </div>
                                <div class="_block subscribe-block">
                                    <h3 class="block_title">
                                        Newsletter
                                    </h3>
                                    <div class="block_subtitle">
                                        Enter your email address below to subscribe to my newsletter
                                    </div>
                                    <form class="form">
                                        <input type="text" placeholder="Email Address" class="input">
                                        <button class="submit">Subscribe</button>
                                    </form>
                                </div>
                                <div class="_block categories">
                                    <h3 class="block_title">Categories</h3>
                                    <div class="items">
                                    @forelse($categories as $category)

                                        <a href="blog-right-sidebar.html" class="item">
                                            <div class="_icon ie-img">
                                                <img src="{{config('app.url')}}meduza/img/demo-bg.jpg" alt="">
                                            </div>
                                            <div class="_title">{{$category->name}}</div>
                                            <div class="_count">{{$category->posts->count()}}</div>
                                        </a>

                                    @empty

                                    <h6 class="text-center">No Categories...</h6>


                                    @endforelse

                                   
                                    </div>
                                </div>
                                <div class="_block posts-slider">
                                    <div class="slider" id="posts-slider">
                                    @forelse($featured_posts as $post)

                                        <a href="blog-right-sidebar.html" class="slide" style="background-image: url({{config('app.url')}}post_images/{{$post->posts->featured_image}});">
                                            <div class="_info">
                                                <div class="_category">{{$post->posts->post_categories->name}}</div>
                                                <h4 class="_title">
                                                    {{$post->post_title}}
                                                </h4>
                                                <div class="_author">
                                                    <div class="userpic ie-img">
                                                        <img src="{{config('app.url')}}avatars/{{$post->posts->post_authors->avatar}}" alt="">
                                                    </div>
                                                    <p>By {{$post->posts->post_authors->name}} – {{$post->posts->updated_at->format('M')}} {{$post->posts->updated_at->format('d')}} , {{$post->posts->updated_at->format('Y')}}</p>
                                                </div>
                                            </div>
                                        </a>


                                    @empty

                                    @endforelse

                                    
                                    </div>
                                </div>
                                <div class="_block popular popular-news">
                                    <h3 class="block_title">Popular From News</h3>
                                    <div class="_items">
                                        <a href="post-page-right-sidebar.html" class="item">
                                            <div class="category">Fashion</div>
                                            <h4 class="_title">
                                                The point of using Lorem Ipsum is that it has a more-or-less normal
                                            </h4>
                                            <div class="date">October 26, 2018</div>
                                        </a>

                                        <a href="post-page-right-sidebar.html" class="item">
                                            <div class="category">Fashion</div>
                                            <h4 class="_title">
                                                Short title
                                            </h4>
                                            <div class="date">October 26, 2018</div>
                                        </a>

                                        <a href="post-page-right-sidebar.html" class="item">
                                            <div class="category">Fashion</div>
                                            <h4 class="_title">
                                                The point of using Lorem Ipsum is that it has a more-or-less normal
                                            </h4>
                                            <div class="date">October 26, 2018</div>
                                        </a>
                                    </div>
                                </div>
                            </aside>