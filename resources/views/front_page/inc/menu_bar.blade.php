
<div class="top_panel">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="mobile-btn" id="mobile-btn"></div>
                    <div class="top_left">
                        <a  href="/" class="logo">
                            <img src="{{config('app.url')}}logo.png" alt="">
                        </a>
                        <div class="menu" id="menu">
                           <div class="close"></div>
                           <ul>
                               <li><a href="{{route('home')}}">Home</a></li>
                               <li>
                                   <a href="{{route('blog')}}">Blog</a>
                                
                               </li>
                               <li>
                                   <a href="{{route('about')}}">About</a>
                               
                               </li>
                               <li>
                                   <a href="{{route('contact')}}">Contact</a>
                                
                               </li>
                          
                           </ul>
                       </div>
                    </div>
                    <div class="top_right">
                        <div class="search" id="search-link">
                            <div class="search-open"></div>
                      
                           
                        </div>

                        @auth()

                        <a style="background-color: rgb(16, 1, 1);"  href="{{route('author.home')}}" class="cart">
                            <span style="width: 220px; height: 220px;" >Dashboard</span>
                        </a>

                        @else 

                        <a style="background-color: rgb(16, 1, 1);"  href="{{route('login')}}" class="cart">
                            <span style="width: 220px; height: 220px;" >Login</span>
                        </a>

                        @endauth
                     
         
                    </div>
                </div>
            </div>
        </div>