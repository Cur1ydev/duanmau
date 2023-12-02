@extends("layouts.front-end")
@section("content")
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area mb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Product details</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- product details wrapper start -->
    <div class="product-details-main-wrapper pb-50">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5">
                    <div class="product-large-slider mb-20">
                        @foreach($images as $image)
                        <div class="pro-large-img">
                            <img src="{{$image->product_image}}" alt="" />
                            <div class="img-view">
                                <a class="img-popup" href="{{$image->product_image}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="pro-nav">
                        @foreach($images as $image)
                        <div class="pro-nav-thumb"><img src="{{$image->product_image}}" alt="" /></div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="product-details-inner">
                        <div class="product-details-contentt">
                            <div class="pro-details-name mb-10">
                                <h3>{{$product->name}}</h3>
                            </div>
                            <div class="pro-details-review mb-20">
                                <ul>
                                    <li>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                    </li>
                                    <li><a href="#">1 Reviews</a></li>
                                </ul>
                            </div>
                            <div class="price-box mb-15">
                                <span class="regular-price"><span class="special-price">{{number_format($product->price)}} VND</span></span>
{{--                                <span class="old-price"><del>£60.00</del></span>--}}
                            </div>
                            <div class="product-detail-sort-des pb-20">
                                <p>{{$product->description}}</p>
                            </div>
                            <div class="pro-details-list pt-20">
                                <ul>
                                    <li><span>Giá :</span>{{number_format($product->price)}} VND</li>
                                    <li><span>Thương hiệu :</span><a href="#">{{$product->category_name}}</a></li>
                                    <li><span>Tổng lượt xem :</span>{{$product->total_view}}</li>
                                    <li><span>Trạng thái :</span> <span style="color: {{$product->status == 0?"#fe4f19":"#83b71c"}}">{{$product->status == 0?"Hết hàng":"Còn hàng"}}</span></li>
                                </ul>
                            </div>
                            <div class="product-availabily-option mt-15 mb-15">
                                <h3>Available Options</h3>
                                <div class="color-optionn">
                                    <h4><sup>*</sup>color</h4>
                                    <ul>
                                        <li>
                                            <a class="c-black" href="#" title="Black"></a>
                                        </li>
                                        <li>
                                            <a class="c-blue" href="#" title="Blue"></a>
                                        </li>
                                        <li>
                                            <a class="c-brown" href="#" title="Brown"></a>
                                        </li>
                                        <li>
                                            <a class="c-gray" href="#" title="Gray"></a>
                                        </li>
                                        <li>
                                            <a class="c-red" href="#" title="Red"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pro-quantity-box mb-30">
                                <div class="qty-boxx">
                                    <label>qty :</label>
                                    <input type="text" placeholder="0">
                                    <button class="btn-cart lg-btn">add to cart</button>
                                </div>
                            </div>
                            <div class="useful-links mb-20">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-heart-o"></i>add to wish list</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-refresh"></i>compare this product</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tag-line mb-20">
                                <label>tag :</label>
                                <a href="#">Movado</a>,
                                <a href="#">Omega</a>
                            </div>
                            <div class="pro-social-sharing">
                                <label>share :</label>
                                <ul>
                                    <li class="list-inline-item">
                                        <a href="#" class="bg-facebook" title="Facebook">
                                            <i class="fa fa-facebook"></i>
                                            <span>like 0</span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="bg-twitter" title="Twitter">
                                            <i class="fa fa-twitter"></i>
                                            <span>tweet</span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="bg-google" title="Google Plus">
                                            <i class="fa fa-google-plus"></i>
                                            <span>google +</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product details wrapper end -->

    <!-- product details reviews start -->
    <div class="product-details-reviews pb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-info mt-half">
                        <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <button type="button" class="nav-link active" id="nav_desctiption" data-bs-toggle="pill" data-bs-target="#tab_description" role="tab" aria-controls="tab_description" aria-selected="true">Description</button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link" id="nav_review" data-bs-toggle="pill" data-bs-target="#tab_review" role="tab" aria-controls="tab_review" aria-selected="false">Reviews ({{count($comments)}})</button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab_description" role="tabpanel" aria-labelledby="nav_desctiption">
                                <p>{{$product->description}}</p>
                            </div>
                            <div class="tab-pane fade" id="tab_review" role="tabpanel" aria-labelledby="nav_review">
                                <div class="product-review">
                                    <div class="customer-review">
                                        <table class="table table-striped table-bordered">
                                            <tbody>
                                            @foreach($comments as $comment)
                                            <tr>
                                                <td><strong>{{$comment->username}}</strong></td>
                                                <td class="text-end">{{$comment->created_at}}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <p>{{$comment->comment}}</p>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div> <!-- end of customer-review -->
                                    @if(getSession())
                                    <form action="/comment" method="post" class="review-form">
                                        <h2>Bình luận</h2>
                                        <div class="form-group row mb-3">
                                            <div class="col">
                                                <label class="col-form-label"><span class="text-danger">*</span>Bình luận của bạn ?</label>
                                                <textarea class="form-control" name="comment" required></textarea>
                                                <input hidden="" name="user_id" value="{{$_SESSION['id']}}">
                                                <input hidden="" name="product_id" value="{{$product->id}}">
                                                <div class="help-block pt-10"><span class="text-danger">Ghi chú:</span> Đoạn mã HTML sẽ không được phiên dịch!</div>
                                            </div>
                                        </div>
                                        <div class="buttons d-flex justify-content-end">
                                            <button class="btn-cart rev-btn" type="submit">Continue</button>
                                        </div>
                                    </form>
                                    @else
                                        <p align="center">Hãy đăng nhập để bình luận</p>
                                    @endif
                                    <!-- end of review-form -->
                                </div> <!-- end of product-review -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Start related-product -->
    <div class="related-product-area mb-40">
        <div class="container-fluid">
            <div class="section-title">
                <h3><span>Related</span> product </h3>
            </div>
            <div class="flash-sale-active4 owl-carousel owl-arrow-style">
                @foreach($semilarItem as $sm)
                <div class="product-item mb-30">
                    <div class="product-thumb">
                        <a href="/product/{{$sm->slug}}">
                            <img src="{{$sm->image}}" class="pri-img" alt="">
                            <img src="{{$sm->image}}" class="sec-img" alt="">
                        </a>
{{--                        <div class="box-label">--}}
{{--                            <div class="label-product label_new">--}}
{{--                                <span>new</span>--}}
{{--                            </div>--}}
{{--                            <div class="label-product label_sale">--}}
{{--                                <span>-20%</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="action-links">
                            <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                            <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                            <a href="#" title="Quick view" data-bs-target="#quickk_view" data-bs-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                    </div>
                    <div class="product-caption">
                        <div class="manufacture-product">
                            <p><a href="/product/{{$sm->slug}}">{{$product->category_name}}</a></p>
                        </div>
                        <div class="product-name">
                            <h4><a href="/product/{{$sm->slug}}">{{$sm->name}}</a></h4>
                        </div>
                        <div class="ratings">
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                            <span><i class="lnr lnr-star"></i></span>
                        </div>
                        <div class="price-box">
                            <span class="regular-price"><span class="special-price">{{number_format($sm->price)}} VND</span></span>
{{--                            <span class="old-price"><del>£90.00</del></span>--}}
                        </div>
                        <button class="btn-cart" type="button">add to cart</button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--  end related-product -->
@endsection