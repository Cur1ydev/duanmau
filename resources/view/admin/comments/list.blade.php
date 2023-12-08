@extends('layouts.admin')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="title-header option-title d-sm-flex d-block">
                                <h5>Danh sách bình luận</h5>
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
                                    <table class="table all-package theme-table table-user" id="table_id">
                                        <thead>
                                        <tr>
                                            <th>Sản phẩm</th>
                                            <th>Bình luận</th>
                                            <th>Người dùng</th>
                                            <th>Ngày bình luận</th>
                                            <th>Option</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($comments as $comment)
                                            <tr>
                                                <td>{{$comment->name}}</td>
                                                <td>{{$comment->comment}}</td>
                                                <td>{{$comment->username}}</td>
                                                <td>{{$comment->created_at}}</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a onclick="if(confirm('Bạn có muốn xoá {{$comment->comment}} ?')) location.href='/admin/comment/delete/{{$comment->id}}'"
                                                               href="#">
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