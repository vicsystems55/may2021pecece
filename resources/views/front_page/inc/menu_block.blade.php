<?php

$categories = \App\Category::with('posts')->latest()->get();



?>
   <div class="menu_block">
            <div class="close"></div>
            <h2 class="category_p">Categories</h2>
            <div class="menu_wrap">
                <div class="scroll">
                    <div class="wrap">
                        <div class="wrap_float">
                            <div class="items">

                            @forelse($categories as $category)

                            <a href="shop-catalog-3-items.html" class="item">
                                    <div class="_image">
                                        <img src="{{config('app.url')}}categories/{{$category->cover_image}}" alt="">
                                    </div>
                                    <div class="_title">
                                        {{$category->name}} <span>{{$category->posts->count()}}</span>
                                    </div>
                                </a>


                            @empty

                                <h4 class="text-center">No categories</h4>

                            @endforelse


        
                            </div>
                            <div class="btn_wrap">
                                <a href="#" class="show_more">
                                    <span>see all articles</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>