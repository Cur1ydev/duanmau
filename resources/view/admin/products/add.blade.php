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
                                            <label class="form-label-title col-sm-3 mb-0">Tên sản phẩm</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" name="name" value="{{$name}}"
                                                       placeholder="Product Name">
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Danh mục</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-single w-100" name="category_id">
                                                    @foreach($category as $ct)
                                                        <option value="{{$ct->id}}" {{$ct->id == $categoryId ? 'selected':''}}>{{$ct->category_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Giá</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="price" type="number"
                                                       value="{{$price}}"
                                                       placeholder="Giá">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Giảm giá</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="discount" type="number"
                                                       value="{{empty($discount) ? 0 : $discount}}"
                                                       placeholder="Giảm giá">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Đường dẫn ảnh</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="image" type="text" value="{{$img}}"
                                                       placeholder="Đường dẫn ảnh(Link)">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Sản phẩm nổi
                                                bật</label>
                                            <div class="col-sm-9">
                                                <select name="feature" class="js-example-basic-single w-100">
                                                    <option value="1" {{$feature == 1 ?'selected':''}}>Có</option>
                                                    <option value="0" {{$feature == 0 ?'selected':''}}>Không</option>
                                                </select>
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
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Ngày hết hạn giảm giá (Áp dụng
                                                cho sản phẩm nổi bật)</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="expried_at" type="date" value="{{$expried}}">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Mô tả</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="description" type="text" value="{{$description}}"
                                                       placeholder="">
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