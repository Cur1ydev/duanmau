@extends('layouts.admin')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="title-header option-title d-sm-flex d-block">
                                <h5>Danh sách sản phẩm</h5>
                                <div class="right-options">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">import</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Export</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <div class="table-responsive">
                                    <table class="table all-package theme-table table-product" id="table_id">
                                        <thead>
                                        <tr>
                                            <th>Tên sản phẩm</th>
                                            <th>Danh mục sản phẩm</th>
                                            <th>Giá</th>
                                            <th>Giảm giá</th>
                                            <th>Ảnh</th>
                                            <th>Tổng lượt xem</th>
                                            <th>Sản phẩm nổi bật</th>
                                            <th>Trạng thái</th>
                                            <th>Ngày hết hạn giảm giá</th>
                                            <th>Option</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($products as $product)
                                            <tr>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->category_name}}</td>


                                                <td class="td-price">{{number_format($product->price)}} VNĐ</td>

                                                <td class="td-price">{{number_format($product->discount)}} VNĐ</td>
                                                <td>
                                                    <div class="table-image">
                                                        <img src="{{$product->image}}" class="img-fluid"
                                                             alt="">
                                                    </div>
                                                </td>

                                                <td>{{$product->total_view}}</td>

                                                <td class=" {{$product->feature_product == 0 ? "status-danger" : "status-close"}}">
                                                    <span>{{$product->feature_product == 0 ? "Không" : "Có"}}</span>
                                                </td>
                                                <td class="{{$product->feature_product == 0 ? "status-danger" : "status-close"}}">
                                                    <span>{{$product->feature_product == 0 ? "Hết hàng" : "Còn hàng"}}</span>
                                                </td>
                                                <td>{{$product->expired_at ?? null}}</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="/admin/product/update/{{$product->id}}">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a onclick="if(confirm('Bạn có muốn xoá {{$product->name}} ?')) location.href='/admin/product/delete/{{$product->id}}'" href="#" >
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <div class="container-fluid">
            <!-- footer start-->
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection