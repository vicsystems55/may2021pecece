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

                    <h1>Edit Post</h1>

                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">

                            <div class="row">
                                <div class="col-6">
                                    <button onclick="submit_post()" class="btn btn-secondary btn-block">Move to draft.. 
                                    <img width="20px;" height="20px;" src="{{config('app.url')}}loader.gif"/>
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-danger btn-block">Trashed
                                        <img width="20px;" height="20px;" src="{{config('app.url')}}loader.gif"/>
                                    </button>
                                </div>

                                <div class="col-6 mt-2">
                                    <button class="btn btn-outline-success btn-block bt-sm">View Post
                                       
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
                                <input id="post_title" type="text" class="form-control">
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
                                <textarea class="form-control" name="post_description" id="post_description" rows="5"></textarea>
                                
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group ">
                                    <h4>Category</h4>
                                    <select name="" id="post_category" class="form-control">
                                        <option value="Sports">Sports</option>
                                        <option value="Technology">Technology</option>
                                        <option value="Politics">Politics</option>
                                        <option value="Sports">Sports</option>
                                        <option value="Technology">Technology</option>
                                        <option value="Politics">Politics</option>
                                    </select>
                                    
                                </div>

                                <div class="form-groupz ">
                                <h4>Tags</h4>
                                <input id="tags" class="form-control" type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">

                    <div class="card">
                        <div class="card-body text-center">
                        <label for="">Featured Image</label><br>

                        <!-- <div style="width:230px; height:230px;" class="featured_img"></div> -->

                        <img id="featured_image" style="object-fit: cover;" class="mx-auto shadow" width="230px;" height="230px;" src="{{config('app.url')}}post_images/default.png" alt="">
                         
                            <form action="{{route('upload_post_image')}}" method="post">
                                @csrf

                                <input type="hidden" name="post_code" value="{{$post_code}}">

                                <input type="file" class="form-control">

                            </form>
                            
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

             
            

            </div>
        </div>
        


@endsection

@section('page-script')



<script src="{{config('app.url')}}acara/vendor/summernote/js/summernote.min.js"></script>
    <!-- Summernote init -->
<script src="{{config('app.url')}}acara/js/plugins-init/summernote-init.js"></script>

<script src="{{config('app.url')}}acara/vendor/toastr/js/toastr.min.js"></script>

<!-- All init script -->
<script src="{{config('app.url')}}acara/js/plugins-init/toastr-init.js"></script>


<script>

    function submit_post(params) {

        var post_title = $( "#post_title" ).val();

        var post_description = $( "#post_description" ).val();

        var post_category = $( "#post_category" ).val();

        var post_tags = $("#tags").tagsinput('items');

        var featured_image = $('#featured_image').attr('src');

        var post_body = $('.summernote').summernote('code');

        alert(post_tags);

        if (post_title.length < 4) {

            toastr.error('Post title required');

        }else{

            $error1 = 0;
        }

        if (post_description.length < 4) {

            toastr.error('Post description required');

        }else{

            $error2 = 0;
        }

        if (post_category.length < 4) {

            toastr.error('Post category required');

        }else{

            $error3 = 0;
        }

        if ($('#featured_image').attr('src') == "{{config('app.url')}}post_images/defaul.png") {

            toastr.error('Post image is required');

            }else{

                $error4 = 0;
            }

        if (post_body.length < 10) {

            toastr.error('Post body not valid');

        }else{

            $error5 = 0;
        }

        alert($error1);

        if ($error1  == 0 && $error2  == 0 && $error3  == 0 && $error4  == 0 && $error5 == 0) {

            alert('yes');

                $.ajax({
                    type:'GET',
                    url: "{{ route('create_post')}}",
                        data:
                    {
                        post_title: post_title,
                        post_description: post_description,
                        post_category: post_category,
                        post_tags: post_tags,
                        featured_image: featured_image,
                        post_body: post_body
                    },
         

                    success: (data) => {

                        console.log(data);
                    
                    alert('File has been uploaded successfully');
               
                    },

                 error: function(data){

                 console.log(data);
                
                 }

                 });
            
        }





        

        // toastr.error('Post description required');

        // toastr.error('Post Body required');

        // toastr.error('Invalid Category Selection');

        // toastr.error('Featured image required');



       

        console.log(post_body);
        
    }

</script>



@endsection




