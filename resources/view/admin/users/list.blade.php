@extends('layouts.admin')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="title-header option-title d-sm-flex d-block">
                                <h5>Danh sách người dùng</h5>
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
                                            <th>Tên</th>
                                            <th>Email</th>
                                            <th>Quyền</th>
                                            <th>Option</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->username}}</td>
                                                <td>{{$user->email}}</td>
                                                <td class="{{$user->role_id == 0 ? "status-close" : ""}}">
                                                    <span>{{$user->role_id == 0 ? "Admin" : "Người dùng"}}</span>
                                                </td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="/admin/user/update/{{$user->id}}">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>
                                                        @if($user->id !== $_SESSION['id_admin'])
                                                            <li>
                                                                <a onclick="if(confirm('Bạn có muốn xoá {{$user->username}} ?')) location.href='/admin/user/delete/{{$user->id}}'"
                                                                   href="#">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                </a>
                                                            </li>
                                                        @endif
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