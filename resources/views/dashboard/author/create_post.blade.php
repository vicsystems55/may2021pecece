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
                                <div class="col-md-6">
                                    <button onclick="submit_post()" class="btn btn-success btn-block">Publish
                                    <!-- <img width="20px;" height="20px;" src="{{config('app.url')}}loader.gif"/> -->
                                    </button>
                                </div>
                                <div class="col-md-6">
                                    <button onclick="draft_post()" class="btn btn-secondary btn-block">Draft
                                        <!-- <img width="20px;" height="20px;" src="{{config('app.url')}}loader.gif"/> -->
                                    </button>
                                </div>

                                <div class="col-md-6 mt-2">
                                    <a href="{{route('single_post', $post_code)}}" class="btn btn-outline-success btn-block bt-sm">Preview
                                       
                                    </a>
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
                                    <select name="category_id" id="post_category" class="form-control">
                                    <option value="0">--Select Category--</option>
                                    @forelse($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @empty
                                    <option value="0">Uncategorized</option>
                                    @endforelse


                                    </select>
                                    
                                </div>

                                <div class="form-groupz ">
                                <h4>Tags</h4>
                                <input id="tags" class="form-control" type="text" value="" data-role="tagsinput" >
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
                         
                        <form method="POST" enctype="multipart/form-data" id="laravel-ajax-file-upload" action="javascript:void(0)" >
                            <div class="">
                                <div class="">
                                    <div class="form-group">
                                        <input onchange="loadFile(event)" class="form-control"  type="file" name="image" placeholder="Choose File" id="file">
                                        <input type="hidden" name="post_code" id="post_code" value="{{$post_code}}">
                                        
                                    </div>
                                    <button class="btn btn-primary" type="submit">submit</button>
                                    </div>
                                        
                            </div>     
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

        var post_code = $( "#post_code" ).val();

        var post_tags = $("#tags").val();

        var featured_image = $('#featured_image').attr('src');

        var post_body = $('.summernote').summernote('code');

    

      

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

        if (post_category == 0) {

            toastr.error('Post category required');

        }else{

            $error3 = 0;
        }

        if ($('#featured_image').attr('src') == "{{config('app.url')}}post_images/default.png") {

            toastr.error('Post image is required');

            }else{

                $error4 = 0;
            }

        if (post_body.length < 15) {

            toastr.error('Post body not valid');

        }else{

            $error5 = 0;
        }

        if (post_tags.length == 0) {

        toastr.info('No post tags, this helps optimization of your post');

        }else{

        $error6 = 0;
        }

       

        if ($error1  == 0 && $error2  == 0 && $error3  == 0 && $error4  == 0 && $error5 == 0) {

           
                $.ajax({
                    type:'GET',
                    url: "{{ route('create_post')}}",
                        data:
                            {
                                post_title: post_title,
                                post_description: post_description,
                                category_id: post_category,
                                post_tags: post_tags,
                                post_code: post_code,
                                post_body: post_body,
                                status: 'live'
                            },
         

                    success: (data) => {

                        console.log(data);
                    
                        toastr.success('Post created successfully!!');
               
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


    function draft_post(params) {

        var post_title = $( "#post_title" ).val();

        var post_description = $( "#post_description" ).val();

        var post_category = $( "#post_category" ).val();

        var post_code = $( "#post_code" ).val();

        var post_tags = $("#tags").val();

        var featured_image = $('#featured_image').attr('src');

        var post_body = $('.summernote').summernote('code');





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

        if (post_category == 0) {

            toastr.error('Post category required');

        }else{

            $error3 = 0;
        }

        if ($('#featured_image').attr('src') == "{{config('app.url')}}post_images/default.png") {

            toastr.error('Post image is required');

            }else{

                $error4 = 0;
            }

        if (post_body.length < 15) {

            toastr.error('Post body not valid');

        }else{

            $error5 = 0;
        }

        if (post_tags.length == 0) {

        toastr.info('No post tags, this helps optimization of your post');

        }else{

        $error6 = 0;
        }



        if ($error1  == 0 && $error2  == 0 && $error3  == 0 && $error4  == 0 && $error5 == 0) {

        
                $.ajax({
                    type:'GET',
                    url: "{{ route('create_post')}}",
                        data:
                            {
                                post_title: post_title,
                                post_description: post_description,
                                category_id: post_category,
                                post_tags: post_tags,
                                post_code: post_code,
                                post_body: post_body,
                                status: 'draft'
                            },
        

                    success: (data) => {

                        console.log(data);
                    
                        toastr.success('Post saved to draft');
            
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

<script type="text/javascript">
    
          

                $('#laravel-ajax-file-upload').submit(function(e) {

                    $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var post_code = $( "#post_code" ).val();

                alert($('meta[name="csrf-token"]').attr('content'));

                

                    // e.preventDefault();
                    
                    var formData = new FormData(this);

                    formData.append('post_code', post_code);
                     
                    // console.log(formData)
                
                        $.ajax({
                            url:"{{ route('upload_post_image') }}",
                            method:"POST",
                            data: formData,
                            
                            contentType: false,
                            cache: false,
                            processData: false,
                            success: (data) => {
                            
                                toastr.success('Featured image uploaded successfully!!');

                            console.log(data);
                
                            },
                            error: function(data){
                                
                                toastr.error('Error occured uploading image');

                            console.log(data);
            
                            }

                        });

                });

       
</script>

<script>
    var loadFile = function(event) {
        var output = document.getElementById('featured_image');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
        }
    };
    </script>

<script>

    function upload_image() {

        $image_element = document;

        console.log($image_element);

        var formData = new FormData();

        alert('form data')

        console.log(formData)
            
            $.ajax({
                type:'POST',
                url: "{{ route('upload_post_image')}}",
                enctype: 'multipart/form-data',
                data: formData,
                cache:false,
                contentType: false,
                processData: false,

                success: (data) => {
                
                alert('File has been uploaded successfully');

                console.log(data);
                
                },
                error: function(data){
                console.log(data);
        
                }

            });
    }

</script>



@endsection




