@extends('dashboard.layouts.app')

@section('content')

<link href="{{config('app.url')}}acara/vendor/summernote/summernote.css" rel="stylesheet">

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
				
							</div>
						</div>
					</div>
				</div>
                <div class="page-titles">
					<ol class="breadcrumb">
					
						<!-- <li class="breadcrumb-item active"><a href="javascript:void(0)">Summernote</a></li> -->
					</ol>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-md-6">

                    <h1>Create Post</h1>

                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">

                            <div class="row">
                                <div class="col-6">
                                <button onclick="submit_post()" class="btn btn-success btn-block">Publishing.. 
                                <img width="20px;" height="20px;" src="{{config('app.url')}}loader.gif"/>
                                </button>
                                </div>
                                <div class="col-6">
                                <button class="btn btn-secondary btn-block">Draft
                                     <img width="20px;" height="20px;" src="{{config('app.url')}}loader.gif"/>
                                </button>
                                </div>
                            </div>
                            
                              
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <h4>Post Title</h4>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <h4>Post Description</h4>
                                <textarea class="form-control" name="" id="" rows="5"></textarea>
                                
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <h4>Category</h4>
                                    <select name="" id="" class="form-control">
                                        <option value="">Sports</option>
                                        <option value="">Technology</option>
                                        <option value="">Politics</option>
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">

                    <div class="card">
                        <div class="card-body">
                            <label for="">Featured Image</label>
                            <input type="file" class="form-control">
                        </div>
                    </div>
                 
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-12 col-xxl-12">

           
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Post Body</h4>
                            </div>
                            <div class="card-body">
                                <div class="summernote" ></div>
                            </div>
                        </div>
                    </div>
                </div>

             
                

                <div class="row">
                    <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <h4>Add Tags</h4>
                                <input type="text" class="form-control">
                                
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

            </div>
        </div>
        


@endsection

@section('page-script')

<script src="{{config('app.url')}}acara/vendor/summernote/js/summernote.min.js"></script>
    <!-- Summernote init -->
<script src="{{config('app.url')}}acara/js/plugins-init/summernote-init.js"></script>


<script>

    function submit_post(params) {

        toastr.info('Are you the 6 fingered man?');

        var post_title = $( "#post_title" ).val();
        
        var post_description = $( "#post_excerpts" ).val();

        var post_body = $('.summernote').summernote('code');

        console.log(post_body);
        
    }

</script>



@endsection




