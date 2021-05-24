@extends('front_page.layouts.app')


@section('content')

<div class="page blog-page with-sidebar right-sidebar">
    <div class="wrap">
        <div class="wrap_float">
      
            <div class="page_content">

                <div class="post-content">
                    <main class="main">
                     
               
                        <div class="post-body _content">
      
            
                          
                        </div>
                        <div class="post-foot">
                 
                            <div class="post-author">
                                <div class="img ie-img">
                                    <img src="{{config('app.url')}}avatars/default.png" alt="">
                                </div>
                                <div class="_subtitle">About author</div>
                                <div class="_name">{{$authors_data->name}}</div>
                                <div class="_text">
                                    When designers create products, they tell stories to users. Designers have a lot of tools to make a story more interesting. Motion design is one of the most powerful tools designers have.
                                </div>
                                <div class="socials">
                                    <a href="#" class="instagram"></a>
                                    <a href="#" class="twitter"></a>
                                    <a href="#" class="pinterest"></a>
                                </div>

                                @auth()
                                <follow-component author_id="{{$authors_data->id}}" follower_id="{{Auth::user()->id}}"></follow-component>
                                @endauth
                         
                           
                        </div>
          
                
                            <div class="other-posts">
                                <h2 class="title">Post by Author</h2>
                                <div class="posts">

                                    @forelse($posts_by_author as $post)

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

                                    <h6 class="">No Posts by this author..</h6>

                                    @endforelse




                                </div>
                            </div>
                        </div>
                    </main>
                    @include('front_page.inc.post_sidebar')
                </div>
            </div>
        </div>
    </div>
</div>

@endsection