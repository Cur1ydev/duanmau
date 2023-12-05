
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
                                <li class="breadcrumb-item active" aria-current="page">Register</li>
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
                                        <h3>Create an Account</h3>
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
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-8 offset-xl-2">
                                    <div class="registration-form login-form">
                                        <form action="/register" method="post">
                                            <div class="login-info mb-20">
                                                <p>Already have an account? <a href="/login">Log in instead!</a></p>
                                            </div>

                                            <div class="form-group mb-3 row">
                                                <label for="f-name" class="col-12 col-sm-12 col-md-4 col-form-label"> Name</label>
                                                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                    <input type="text" class="form-control" id="f-name" name="username" value="{{$username}}">
                                                </div>
                                            </div>
                                            <div class="form-group mb-3 row">
                                                <label for="email" class="col-12 col-sm-12 col-md-4 col-form-label">Email Address</label>
                                                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                    <input type="text" class="form-control" id="email" name="email" value="{{$email}}">
                                                </div>
                                            </div>
                                            <div class="form-group mb-3 row">
                                                <label for="newpassword" class="col-12 col-sm-12 col-md-4 col-form-label">New Password</label>
                                                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                    <input type="password" class="form-control" id="newpassword" name="password">
                                                    <button class="pass-show-btn" type="button">Show</button>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3 row">
                                                <label for="c-password" class="col-12 col-sm-12 col-md-4 col-form-label">Confirm Password</label>
                                                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                    <input type="password" class="form-control" id="c-password" name="re_password" >
                                                    <button class="pass-show-btn" type="button">Show</button>
                                                </div>
                                            </div>
                                            <div class="register-box d-flex justify-content-end mt-20">
                                                <button type="submit" class="btn btn-secondary">Register</button>
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