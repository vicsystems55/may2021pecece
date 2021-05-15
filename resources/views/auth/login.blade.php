@extends('dashboard.layouts.auth')

@section('content')

    <div class="authincation-conten card ">
        <div class="row no-gutters">
            <div class="col-xl-12">
                <div class="auth-form">
                    <div class="text-center mb-3">
                        <a href="index.html"><img src="{{config('app.url')}}logo.png" alt=""></a>
                    </div>

                    <h1 class="display-4 text-center mb-4 text-primary">Pecece</h11>
                    
                    <h4 class="text-center mb-4 text-primary">Sign in your account</h4>
                    <form method="post" action="{{route('login')}}">
                    @csrf
                        <div class="form-group">
                            <label class="mb-1 text-primary"><strong>Email</strong></label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label class="mb-1 text-primary"><strong>Password</strong></label>
                            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                        </div>
                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox ml-1 text-primary">
                                    <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                                    <label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <a class="text-primary" href="page-forgot-password.html">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-primary text-white btn-block">Sign Me In</button>
                        </div>
                    </form>

                    <div class="text-center mt-3">
                            <a  class="btn bg-white border border-primary text-primary btn-block">Google Sign In</a>
                        </div>

                    <div class="new-account mt-3">
                        <p class="text-primary">Don't have an account? <a class="text-primary" href="{{route('register')}}">Sign up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
