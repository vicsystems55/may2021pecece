@extends('dashboard.layouts.app')

@section('content')

<div class="content-body">
    <div class="container-fluid">

        <div class="col-xl-6 col-xxl-6 col-lg-6">
            <div class="card">
                <div class="card-header  border-0 pb-0">
                    <h4 class="card-title">Notifications</h4>
                </div>
                <div class="card-body"> 
                    <div id="DZ_W_Todo1" class="widget-media dz-scroll height370">
                        <ul class="timeline">
                            <li>
                                <div class="timeline-panel">
                                    <div class="media mr-2">
                                        <img alt="image" width="50" src="{{config('app.url')}}acara/images/avatar/1.jpg">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mb-1">Dr sultads Send you Photo</h5>
                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                    </div>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary light sharp" data-toggle="dropdown">
                                            <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-panel">
                                    <div class="media mr-2 media-info">
                                        KG
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mb-1">Resport created successfully</h5>
                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                    </div>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-info light sharp" data-toggle="dropdown">
                                            <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-panel">
                                    <div class="media mr-2 media-success">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mb-1">Reminder : Treatment Time!</h5>
                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                    </div>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                            <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                                <li>
                                <div class="timeline-panel">
                                    <div class="media mr-2">
                                        <img alt="image" width="50" src="{{config('app.url')}}acara/images/avatar/1.jpg">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mb-1">Dr sultads Send you Photo</h5>
                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                    </div>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary light sharp" data-toggle="dropdown">
                                            <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-panel">
                                    <div class="media mr-2 media-danger">
                                        KG
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mb-1">Resport created successfully</h5>
                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                    </div>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                            <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-panel">
                                    <div class="media mr-2 media-primary">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mb-1">Reminder : Treatment Time!</h5>
                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                    </div>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary light sharp" data-toggle="dropdown">
                                            <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
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