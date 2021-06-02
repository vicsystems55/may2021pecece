@extends('dashboard.layouts.app')

@section('content')

<div class="content-body">
            <div class="container-fluid">
				<!-- Add Order -->
				<div class="modal fade" id="addOrderModalside">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Event</h5>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label class="text-black font-w500">Event Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Event Date</label>
										<input type="date" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Description</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<button type="button" class="btn btn-primary">Create</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">
                                <div class="photo-content">
                                   <style>
                                     .cover-phot {
                                        background: url(../images/profile/cove.jpg);
                                        background-size: cover;
                                        background-position: center;
                                        min-height: 250px;
                                        width: 100%;
}
                                   </style>
                                    <div style="min-height:  250px;
                                     width: 100%;
                                      background-size: cover;
                                      background-image:url({{config('app.url')}}banner_cover/{{Auth::user()->banner_cover}});
                                      " class="cover-pho b-dark"></div>
                                </div>
                                <div class="profile-info">
									<div class="profile-photo">
										<img src="{{config('app.url')}}avatars/{{Auth::user()->avatar}}" class="img-fluid rounded-circle" alt="">
									</div>
									<div class="profile-details">
										
										<div class="dropdown ml-auto">
											<a href="#" class="btn btn-primary light sharp" data-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i> Change Profile Picture</li>
												<li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i> Change Cover Image</li>
											
											</ul>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-statistics mb-5">
                                    <div class="text-center">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="m-b-0">{{$user_data->followers->count()}}</h3><span>Followers</span>
                                            </div>
                                            <div class="col">
                                                <h3 class="m-b-0">{{$user_data->posts->where('status', 'live')->count()}}</h3><span>Posts</span>
                                            </div>
                              
                                        </div>
                                   
                                    </div>
									<!-- Modal -->
								
                                </div>

                                @if(Session::has('message'))
                                <p class="alert alert-info">{{ Session::get('message') }}</p>
                                @endif

                          
                                <div class="profile-interest mb-5">
                                    <h5 class="text-primary d-inline">Interest</h5>
                                    <div class="row mt-4 sp4" id="lightgallery">

                                        @forelse ($user_data->user_category_subscriptions as $subscriptions)

                                        <a href="images/profile/2.jpg" data-exthumbimage="images/profile/2.jpg" data-src="{{config('app.url')}}acara/images/profile/2.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
											<img src="{{config('app.url')}}categories/{{$subscriptions->categories->cover_image}}" alt="" class="img-fluid">
										</a>
                                            
                                        @empty

                                        <h5>No subscriptions yet..</h5>

                                        <h4>
                                            <a href="">Subscribe to a Category</a>
                                        </h4>
                                            
                                        @endforelse
										
									
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                           
                                            <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link">About Me</a>
                                            </li>
                                            <li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link">Setting</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                          
                                            <div id="about-me" class="tab-pane fade active show">
                                                <div class="profile-about-me">
                                                    <div class="pt-4 border-bottom-1 pb-3">
                                                        <h4 class="text-primary">About Me</h4>
                                                        <p class="mb-2">

                                                            {{Auth::user()->bio??'No Bio yet'}}
                                                        </p>
                                                    </div>
                                                </div>
                                       
                                                <div class="profile-lang  mb-5">
                                                    <h4 class="text-primary mb-2">Language</h4>
													<a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-us"></i> English</a> 
													<a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-fr"></i> French</a>
                                                    <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-bd"></i> Bangla</a>
                                                </div>
                                                <div class="profile-personal-info">
                                                    <h4 class="text-primary mb-4">Personal Information</h4>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Name <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>{{$user_data->name}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Email <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>{{$user_data->email}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Availability <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>Full Time (Free Lancer)</span>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Location <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>   </span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Year Experience <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>07 Year Experiences</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="profile-settings" class="tab-pane fade">
                                                <div class="pt-3">
                                                    <div class="settings-form">
                                                        <h4 class="text-primary">Account Setting</h4>
                                                        <form>
                                                            <div class="form-group">
                                                                <label>Bio</label>
                                                                <textarea class="form-control" placeholder="Tell us about yourself" name="" id="" cols="30" rows="10"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Address</label>
                                                                <input type="text" placeholder="1234 Main St" class="form-control">
                                                            </div>
                                                            
                                                            
                                                            <div class="form-group">
                                                                <div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="gridCheck">
																	<label class="custom-control-label" for="gridCheck"> Make Profile Public?</label>
																</div>
                                                            </div>
                                                            <button class="btn btn-primary" type="submit">Update Profile</button>
                                                        </form>
                                                    </div>

                                                    <div class="settings-form pt-5">
                                                        <h4 class="text-primary">Change Password</h4>
                                                        <form>
                                                            <div class="form">
                                                                <div class="form-group col-md-6">
                                                                    <label>Old Password</label>
                                                                    <input type="email" placeholder="Email" class="form-control">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label>New Password</label>
                                                                    <input type="password" placeholder="Password" class="form-control">
                                                                </div>

                                                                <div class="form-group col-md-6">
                                                                    <label>Confirm New Password</label>
                                                                    <input type="password" placeholder="Password" class="form-control">
                                                                </div>
                                                            </div>
                                                
                                                            <button class="btn btn-primary" type="submit">Change Password</button>
                                                        </form>
                                                    </div>

                                                    <div class="settings-form pt-5">
                                                        <h4 class="text-primary">Change Username</h4>
                                                        <form>
                                                            <div class="form">
                                                                <div class="form-group col-md-6">
                                                                    <label>Old Username</label>
                                                                    <input type="text" placeholder="Email" class="form-control">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label>New Username</label>
                                                                    <input type="text" placeholder="Password" class="form-control">
                                                                </div>

                                                                <div class="form-group col-md-6">
                                                                    <label>Confirm New Username</label>
                                                                    <input type="text" placeholder="Password" class="form-control">
                                                                </div>
                                                            </div>
                                                
                                                            <button class="btn btn-primary" type="submit">Change Username</button>
                                                        </form>
                                                    </div>
                                                    <div class="settings-form pt-5">
                                                        <h4 class="text-primary">Change Email</h4>
                                                        <form>
                                                            <div class="form">
                                                                <div class="form-group col-md-6">
                                                                    <label>Old Username</label>
                                                                    <input type="email" placeholder="Email" class="form-control">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label>New Username</label>
                                                                    <input type="email" placeholder="Password" class="form-control">
                                                                </div>

                                                                <div class="form-group col-md-6">
                                                                    <label>Confirm New Username</label>
                                                                    <input type="email" placeholder="Password" class="form-control">
                                                                </div>
                                                            </div>
                                                
                                                            <button class="btn btn-primary" type="submit">Change Email</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<!-- Modal -->
									<div class="modal fade" id="replyModal">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Post Reply</h5>
													<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
												</div>
												<div class="modal-body">
													<form>
														<textarea class="form-control" rows="4">Message</textarea>
													</form>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Reply</button>
												</div>
											</div>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection