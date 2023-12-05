@extends('layouts.admin')
@section('content')
    <div class="page-body">

        <!-- New Product Add Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Thêm mới</h5>
                                    </div>
                                    <ul>
                                        @foreach($errors as $error)
                                            <li style="color: red" align="center">{{$error}}</li>
                                        @endforeach
                                    </ul>

                                    <form class="theme-form theme-form-2 mega-form" action="" method="post">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Tên danh mục</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" name="name" value="{{$name}}"
                                                       placeholder="Category Name">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Mô tả</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" name="description" value="{{$description}}"
                                                       placeholder="Category Name">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Trạng thái</label>
                                            <div class="col-sm-9">
                                                <select name="status" class="js-example-basic-single w-100">
                                                    <option value="1" {{$status == 1 ?'selected':''}}>Còn hàng</option>
                                                    <option value="0" {{$status == 0 ?'selected':''}}>Hết hàng</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button class="btn ms-auto theme-bg-color text-white">Lưu</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New Product Add End -->

        <!-- footer Start -->
        <div class="container-fluid">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- footer En -->
    </div>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="modal-title" id="staticBackdropLabel">Logging Out</h5>
                    <p>Are you sure you want to log out?</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="button-box">
                        <button type="button" class="btn btn--no" data-bs-dismiss="modal">No</button>
                        <button type="button" class="btn  btn--yes btn-primary">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection