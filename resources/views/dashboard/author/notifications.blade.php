@extends('dashboard.layouts.app')

@section('content')

<div class="content-body">
    <div class="container-fluid">

        <div class="col-xl-10 col-xxl-10 col-lg-10">
            <div class="card">
                <div class="card-header  border-0 pb-0">
                    <h4 class="card-title">Notifications</h4>
                </div>
                <div class="card-body"> 
                    <div id="DZ_W_Todo1" class="widget-media dz-scroll height370">
                        <ul class="timeline">

                            @forelse ($notifications as $notification)
                            <li>
                                <div class="timeline-panel">
                                    <div class="media mr-2">
                                        <img alt="image" width="50" src="{{config('app.url')}}acara/images/avatar/1.jpg">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mb-1">{{$notification->title}}</h5>
                                        <p>
                                            {{$notification->message}}
                                        </p>
                                        <small class="d-block">{{$notification->created_at->diffForHumans()}}</small>
                                    </div>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary light sharp" data-toggle="dropdown">
                                            mark as read                                        
                                        </button>
                               
                                    </div>
                                </div>
                            </li>
                            @empty

                            <h4 class="mt-3 text-center">No notifications yet...</h4>
                                
                            @endforelse

                 
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection

@section('page-script')

    	<!-- Chartist -->
        <script src="{{config('app.url')}}acara/vendor/chartist/js/chartist.min.js"></script>
    <script src="{{config('app.url')}}acara/vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
    
	<!-- Flot -->
    <script src="{{config('app.url')}}acara/vendor/flot/jquery.flot.js"></script>
    <script src="{{config('app.url')}}acara/vendor/flot/jquery.flot.pie.js"></script>
    <script src="{{config('app.url')}}acara/vendor/flot/jquery.flot.resize.js"></script>
    <script src="{{config('app.url')}}acara/vendor/flot-spline/jquery.flot.spline.min.js"></script>
	
	<!-- Chart sparkline plugin files -->
    <script src="{{config('app.url')}}acara/vendor/jquery-sparkline/jquery.sparkline.min.js"></script>
	<script src="{{config('app.url')}}acara/js/plugins-init/sparkline-init.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="{{config('app.url')}}acara/vendor/peity/jquery.peity.min.js"></script>
	<script src="{{config('app.url')}}acara/js/plugins-init/piety-init.js"></script>
    <script src="{{config('app.url')}}acara/vendor/chart.js/Chart.bundle.min.js"></script>
	
    <!-- Init file -->
    <script src="{{config('app.url')}}acara/js/plugins-init/widgets-script-init.js"></script>

@endsection