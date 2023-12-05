@extends('layouts.front-end')
@section('content')
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Login</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- Start of Login Wrapper -->
    <div class="login-wrapper pb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <main id="primary" class="site-main">
                        <div class="user-login">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12">
                                    <div class="section-title text-center">
                                        <h3>Log in to your account</h3>
                                    </div>
                                </div>
                            </div> <!-- end of row -->
                            @if(count($errors) > 0 )
                                <ul >
                                    @foreach($errors as $error)
                                        <li style="color: red" align="center">{{$error}}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-6 offset-lg-2 offset-xl-3">
                                    <div class="login-form">
                                        <form action="/login" method="post">
                                            <div class="form-group row align-items-center mb-4">
                                                <label for="email" class="col-12 col-sm-12 col-md-4 col-form-label">Email address</label>
                                                <div class="col-12 col-sm-12 col-md-8">
                                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="{{$email}}">
                                                </div>
                                            </div>
                                            <div class="form-group row align-items-center mb-4">
                                                <label for="c-password" class="col-12 col-sm-12 col-md-4 col-form-label">Password</label>
                                                <div class="col-12 col-sm-12 col-md-8">
                                                    <input type="password" class="form-control" name="password" id="c-password" placeholder="Password" >
                                                    <button class="pass-show-btn" type="button">Show</button>
                                                </div>
                                            </div>
                                            @if(isset($msg))
                                            <p align="center" style="color: red">{{$msg}}</div>
                                            @endif
                                            <div class="login-box mt-5 text-center">
                                                <p><a href="#">Forgot your password?</a></p>
                                                <button type="submit" class="btn btn-secondary mb-4 mt-4">Sign In</button>
                                            </div>
                                            <div class="text-center pt-20 top-bordered">
                                                <p>No account? <a href="register.html">Create one here</a>.</p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end of user-login -->
                    </main> <!-- end of #primary -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <!-- End of Login Wrapper -->
@endsection