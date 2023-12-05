@extends('layouts.admin')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="title-header option-title d-sm-flex d-block">
                                <h5>Danh sách danh mục</h5>
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
                                    <table class="table all-package theme-table table-category" id="table_id">
                                        <thead>
                                        <tr>
                                            <th>Tên</th>
                                            <th>Mô tả</th>
                                            <th>Trạng thái</th>
                                            <th>Option</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($category as $ct)
                                            <tr>
                                                <td>{{$ct->category_name}}</td>
                                                <td>{{$ct->category_description}}</td>
                                                <td class="{{$ct->category_status == 0 ? "status-danger" : "status-close"}}">
                                                    <span>{{$ct->category_status == 0 ? "Hết hàng" : "Còn hàng"}}</span>
                                                </td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="/admin/category/update/{{$ct->id}}">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a onclick="if(confirm('Bạn có muốn xoá {{$ct->category_name}} ?')) location.href='/admin/category/delete/{{$ct->id}}'" href="#" >
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