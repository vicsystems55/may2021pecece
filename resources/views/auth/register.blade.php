@extends('dashboard.layouts.auth')

@section('content')
<div class="authincation-conten card ">
        <div class="row no-gutters">
            <div class="col-xl-12">
                <div class="auth-form">
                    <div class="text-center mb-3">
                        <a href="index.html"><img src="{{config('app.url')}}logo.png" alt=""></a>
                    </div>

                    <h1 class="display-4 text-center mb-4 text-primary">Pecece</h1>
                    
                    <h4 class="text-center mb-4 text-primary">Sign up</h4>
                    @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p class="alert alert-warning">{{$error}}</p>
            @endforeach
        @endif

                    <form method="post" action="{{route('register')}}">
                    @csrf

                        <div class="form-group">
                            <label class="mb-1 text-primary"><strong>Fullname</strong></label>
                            <input type="text" name="name" class="form-control" value="" placeholder="Fullname">
                        </div>

                        <div class="form-group">
                            <label class="mb-1 text-primary"><strong>Username</strong></label>
                            <input type="text" name="username" class="form-control" value="Pick a nickname">
                        </div>

                        <div class="form-group">
                            <label class="mb-1 text-primary"><strong>Email</strong></label>
                            <input type="email" name="email" class="form-control" value="hello@example.com">
                        </div>
                        <div class="form-group">
                            <label class="mb-1 text-primary"><strong>Password</strong></label>
                            <input type="password" class="form-control" name="password" placeholder="Set a password">
                        </div>
                        <div class="form-group">
                            <label class="mb-1 text-primary"><strong>Confirm Password</strong></label>
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm your password">
                        </div>


                        <div class="text-center">
                            <button type="submit" class="btn bg-primary text-white btn-block">Create an account</button>
                        </div>
                    </form>

                    <div class="text-center mt-3">
                            <button type="submit" class="btn bg-white border border-primary text-primary btn-block">Google Sign In</button>
                        </div>

                    <div class="new-account mt-3">
                        <p class="text-primary">Already have an account? <a class="text-primary" href="{{route('login')}}">Sign in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
