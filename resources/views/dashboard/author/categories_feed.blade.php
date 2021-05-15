@extends('dashboard.layouts.app')

@section('content')

<div class="content-body">
    <div class="container">
        <div class="card col-md-10">
            <div class="card-body">
                <h4>Post from categories you are subscribed to</h4>
            </div>
        </div>

        <div class="row">

            <div class="col-xl-4">
                <div class="card mb-3">
                    <img class="card-img-top img-fluid" src="{{config('app.url')}}acara/images/card/2.png" alt="Card image cap">
                    <div class="card-header">
                        <h5 class="card-title">Card title</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">He lay on his armour-like back, and if he lifted his head a little
                        </p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Card footer</p>
                        <a href="javascript:void(0)" class="card-link float-right">Card link</a>
                    </div>
                </div>
            </div>

        </div>
        
    </div>
</div>


@endsection