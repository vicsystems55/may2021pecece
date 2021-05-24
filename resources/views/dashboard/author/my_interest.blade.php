@extends('dashboard.layouts.app')

@section('content')
<div class="content-body">
    <div class="container-fluid">

        <h2 class="pb-2">All Categories</h2>

        <div class="row">

            @forelse($categories as $category)

            <div class="col-sm-6 col-md-4">
                <div style="min-width:230px; min-height:230px; background-image:url({{config('app.url')}}categories/{{$category->cover_image}}); background-size: cover;" class="card text-center shadow">
                   <div style="width: 100%; height:100%; position: absolute; background-color: black; opacity: 0.7; z-index: 0; border-radius: 17px;" class="overlay"></div>
                    <div style="z-index: 1;" class="card-body">

                        <h4 class="card-text pt-5 font-weight-bold text-white">{{$category->name}}  <sup class="text-center  badge badge-sm badge-secondary">{{$category->posts->count()}}</sup> </h4>
                        
                  
                        <subscribe-component user_id="{{Auth::user()->id}}" category_id="{{$category->id}}"></subscribe-component>
                    </div>
                   
                </div>
            </div>


            @empty

            <h4 class="mt-3 text-center">No Categories available yet...</h4>
                
            @endforelse





        </div>

    </div>
</div>


@endsection