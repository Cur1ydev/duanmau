@extends('layouts.front-end')
@section('content')
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area mb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">My Account</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- Start of My Account Wrapper -->
    <div class="my-account-wrapper pb-20">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <main id="primary" class="site-main">
                        <div class="user-dashboard pb-50">
                            <div class="user-info mb-30">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                        <div class="single-info">
                                            <p class="user-name">Hello <span>John Doe</span> <br>not John Doe? <a class="log-out" href="login.html">Log Out</a></p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                        <div class="single-info">
                                            <p>Need Assistance? Customer service at <a href="#">admin@example.com</a></p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                        <div class="single-info">
                                            <p>E-mail them at <a href="#">support@example.com</a></p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-2 col-xl-3">
                                        <div class="single-info justify-content-lg-center">
                                            <a class="btn btn-secondary" href="cart.html">View Cart</a>
                                        </div>
                                    </div>
                                </div> <!-- end of row -->
                            </div> <!-- end of user-info -->

                            <div class="main-dashboard">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-2">
                                        <ul class="nav flex-column dashboard-list" role="tablist">
                                            <li>
                                                <button class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" data-bs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</button>
                                            </li>
                                            <li>
                                                <button class="nav-link" id="orders-tab" data-bs-toggle="tab" data-bs-target="#orders" type="button" role="tab" aria-controls="orders" aria-selected="false">Orders</button>
                                            </li>
                                            <li>
                                                <button class="nav-link" id="downloads-tab" data-bs-toggle="tab" data-bs-target="#downloads" type="button" role="tab" aria-controls="downloads" aria-selected="false">Downloads</button>
                                            </li>
                                            <li>
                                                <button class="nav-link" id="address-tab" data-bs-toggle="tab" data-bs-target="#address" type="button" role="tab" aria-controls="address" aria-selected="false">Addresses</button>
                                            </li>
                                            <li>
                                                <button class="nav-link" id="account-details-tab" data-bs-toggle="tab" data-bs-target="#account-details" type="button" role="tab" aria-controls="account-details" aria-selected="false">Thông tin tài khoản</button>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="login.html">logout</a>
                                            </li>
                                        </ul> <!-- end of dashboard-list -->
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                                        <!-- Tab panes -->
                                        <div class="tab-content dashboard-content">
                                            <div id="dashboard" class="tab-pane fade show active" role="tabpanel" aria-labelledby="dashboard-tab">
                                                <h3>Dashboard </h3>
                                                <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">edit your password and account details.</a></p>
                                            </div> <!-- end of tab-pane -->

                                            <div id="orders" class="tab-pane fade" role="tabpanel" aria-labelledby="orders-tab">
                                                <h3>Orders</h3>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th>Order</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Total</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>September 10, 2019</td>
                                                            <td>Processing</td>
                                                            <td>$25.00 for 1 item </td>
                                                            <td><a class="btn btn-secondary" href="cart.html">view</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>October 4, 2019</td>
                                                            <td>Processing</td>
                                                            <td>$17.00 for 1 item </td>
                                                            <td><a class="btn btn-secondary" href="cart.html">view</a></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div> <!-- end of tab-pane -->

                                            <div id="downloads" class="tab-pane fade" role="tabpanel" aria-labelledby="downloads-tab">
                                                <h3>Downloads</h3>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th>Product</th>
                                                            <th>Downloads</th>
                                                            <th>Expires</th>
                                                            <th>Download</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>Volga - Ecommerce Bootstrap Template</td>
                                                            <td>August 10, 2019</td>
                                                            <td>Never</td>
                                                            <td><a class="btn btn-secondary" href="#">Download File</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gatcomart - Ecommerce HTML Template</td>
                                                            <td>September 11, 2019</td>
                                                            <td>Never</td>
                                                            <td><a class="btn btn-secondary" href="#">Download File</a></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div> <!-- end of tab-pane -->

                                            <div id="address" class="tab-pane" role="tabpanel" aria-labelledby="address-tab">
                                                <p>The following addresses will be used on the checkout page by default.</p>
                                                <h4 class="billing-address">Billing address</h4>
                                                <a class="btn btn-secondary my-4" href="#">edit</a>
                                                <p>HasTech</p>
                                                <p>Bangladesh</p>
                                            </div> <!-- end of tab-pane -->

                                            <div id="account-details" class="tab-pane fade" role="tabpanel" aria-labelledby="account-details-tab">
                                                <h3>Thông tin tài khoản </h3>
                                                <div class="login-form">
                                                    <form action="#">
                                                        <div class="form-group row mb-3">
                                                            <label for="f-name" class="col-12 col-sm-12 col-md-4 col-lg-3 col-form-label">Tên</label>
                                                            <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                                                <input type="text" class="form-control" id="f-name" value="{{$user->username}}" disabled required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-3">
                                                            <label for="email" class="col-12 col-sm-12 col-md-4 col-lg-3 col-form-label">Địa chỉ Email</label>
                                                            <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                                                <input type="text" class="form-control" id="email" value="{{$user->email}}" disabled required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-3">
                                                            <label for="email" class="col-12 col-sm-12 col-md-4 col-lg-3 col-form-label">Quyền</label>
                                                            <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                                                                <input type="text" class="form-control" id="email" value="{{$user->role_id == 0 ? 'Admin': 'Nhân viên'}}" disabled required>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div> <!-- end of tab-pane -->
                                        </div>
                                    </div>
                                </div> <!-- end of row -->
                            </div> <!-- end of main-dashboard -->
                        </div> <!-- end of user-dashboard -->
                    </main> <!-- end of #primary -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <!-- End of My Account Wrapper -->
@endsection