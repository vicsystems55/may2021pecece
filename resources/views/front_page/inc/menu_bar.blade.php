
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
                     
                        <a style="background-color: red;"  href="{{route('author.home')}}" class="cart ">
                            <span style="width: 220px; height: 220px;" >S</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>