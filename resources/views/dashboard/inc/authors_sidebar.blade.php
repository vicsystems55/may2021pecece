<div class="deznav">
            <div class="deznav-scroll">
				<a href="{{route('author.create_post')}}" class="add-menu-sidebar" data-toggle="modal" data-target="#addOrderModalside" >Create New Post</a>
				<ul class="metismenu" id="menu">

                    <li><a href="{{route('author.home')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
					</li>

                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-television"></i>
							<span class="nav-text">Post</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('author.create_post')}}">Create New</a></li>
                            <li><a href="{{route('author.all_posts')}}">All Post</a></li>
                            <li><a href="{{route('author.draft_posts')}}">Draft</a></li>
                            <li><a href="{{route('author.trashed_posts')}}">Trashed</a></li>
             
                        </ul>
                    </li>

                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-television"></i>
							<span class="nav-text">Activities</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('author.authors_feed')}}">Authors Feed</a></li>
                            <li><a href="{{route('author.categories_feed')}}">Categories Feed</a></li>
                           
             
                        </ul>
                    </li>

                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-television"></i>
							<span class="nav-text">Interest</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('author.my_interest')}}">My Interest</a></li>
                            <li><a href="{{route('author.saved_posts')}}">Saved Post</a></li>
                           
             
                        </ul>
                    </li>


                    <li><a href="{{route('author.notifications')}}" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-settings-2"></i>
							<span class="nav-text">Notifications</span>
						</a>
					</li>

                    <li><a href="{{route('author.my_profile')}}" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-settings-2"></i>
							<span class="nav-text">My Profile</span>
						</a>
					</li>

                    {{-- <li><a href="{{route('author.settings')}}" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-settings-2"></i>
							<span class="nav-text">Settings</span>
						</a>
					</li> --}}

     
                </ul>
				<div class="copyright">
					<p><strong>Pecece</strong> © 2021 All Rights Reserved</p>
					<p>Made with <span class="heart"></span> by vicSystems</p>
				</div>
			</div>
        </div>