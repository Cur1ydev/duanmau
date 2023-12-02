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
                                <li class="breadcrumb-item active" aria-current="page">Search</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- shop page main wrapper start -->
    <div class="main-wrapper pt-35">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-shop-main-wrapper mb-50">
                        <div class="shop-baner-img mb-70">
                            <a href="#"><img src="{{BASE_URL . 'public/'}}assets/img/banner/category-image.jpg" alt=""></a>
                        </div>
                        <div align="center">Kết quả tìm kiếm cho danh mục <span style="color: red">{{$category->category_name}}</span> và sản phẩm <span style="color: red">{{$keyword}}</span></div>
                        <div class="shop-top-bar mb-30">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="top-bar-left">
                                        <div class="product-view-mode">
                                            <a href="#" data-target="column_3"><span>3-col</span></a>
                                            <a href="#" data-target="grid"><span>4-col</span></a>
                                            <a class="active" href="#" data-target="list"><span>list</span></a>
                                        </div>
                                        <div class="product-page">
                                            <p>Showing 1 to 9 of 9 (1 Pages)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="top-bar-right">
                                        <div class="per-page">
                                            <p>Show : </p>
                                            <select class="nice-select" name="sortby">
                                                <option value="trending">10</option>
                                                <option value="sales">20</option>
                                                <option value="sales">30</option>
                                                <option value="rating">40</option>
                                                <option value="date">50</option>
                                                <option value="price-asc">60</option>
                                                <option value="price-asc">70</option>
                                                <option value="price-asc">100</option>
                                            </select>
                                        </div>
                                        <div class="product-short">
                                            <p>Sort By : </p>
                                            <select class="nice-select" name="sortby">
                                                <option value="trending">Relevance</option>
                                                <option value="sales">Name (A - Z)</option>
                                                <option value="sales">Name (Z - A)</option>
                                                <option value="rating">Price (Low &gt; High)</option>
                                                <option value="date">Rating (Lowest)</option>
                                                <option value="price-asc">Model (A - Z)</option>
                                                <option value="price-asc">Model (Z - A)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="shop-product-wrap list row">
                            @if(count($products) > 0 )
                            @foreach($products as $product)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="product-item mb-30">
                                    <div class="product-thumb">
                                        <a href="/product/{{$product->slug}}">
                                            <img src="{{$product->image}}" class="pri-img" alt="">
                                            <img src="{{$product->image}}" class="sec-img" alt="">
                                        </a>
                                        <div class="box-label">
                                            <div class="label-product label_new">
                                                <span>new</span>
                                            </div>
                                        </div>
                                        <div class="action-links">
                                            <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                            <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                            <a href="#" title="Quick view" data-bs-target="#quickk_view" data-bs-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="manufacture-product">
                                            <p><a href="/product/{{$product->slug}}">{{$product->category_name}}</a></p>
                                        </div>
                                        <div class="product-name">
                                            <h4><a href="/product/{{$product->slug}}">{{$product->name}}</a></h4>
                                        </div>
                                        <div class="ratings">
                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                            <span><i class="lnr lnr-star"></i></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">{{number_format($product->price)}} VND</span>
                                        </div>
                                        <button class="btn-cart" type="button">add to cart</button>
                                    </div>
                                </div> <!-- end single grid item -->
                                <div class="sinrato-list-item mb-30">
                                    <div class="sinrato-thumb">
                                        <a href="/product/{{$product->slug}}">
                                            <img src="{{$product->image}}" class="pri-img" alt="">
                                            <img src="{{$product->image}}" class="sec-img" alt="">
                                        </a>
{{--                                        <div class="box-label">--}}
{{--                                            <div class="label-product label_sale">--}}
{{--                                                <span>-10%</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                    <div class="sinrato-list-item-content">
                                        <div class="manufacture-product">
                                            <span><a href="#">{{$product->category_name}}</a></span>
                                        </div>
                                        <div class="sinrato-product-name">
                                            <h4><a href="/product/{{$product->slug}}">{{$product->description}}</a></h4>
                                        </div>
                                        <div class="sinrato-ratings mb-15">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="sinrato-product-des">
                                            <p>{{$product->description}}</p>
                                        </div>
                                    </div>
                                    <div class="sinrato-box-action">
                                        <div class="price-box">
                                            <span class="regular-price"><span class="special-price">{{number_format($product->price)}} VND</span></span>
{{--                                            <span class="old-price"><del>£60.00</del></span>--}}
                                        </div>
                                        <button class="btn-cart" type="button">add to cart</button>
                                        <div class="action-links sinrat-list-icon">
                                            <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                            <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                            <a href="#" title="Quick view" data-bs-target="#quickk_view" data-bs-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                    </div>
                                </div> <!-- end single list item -->
                            </div>
                            @endforeach
                            @else
                            <div class="col-lg-3 col-md-4 col-sm-6 text-center">Không có dữ liệu nào phù hợp với nhu cầu tìm kiếm của bạn</div>
                            @endif

                        </div>
                        <div class="paginatoin-area style-2 pt-35 pb-20">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="pagination-area">
                                        <p>Showing 1 to 9 of 9 (1 Pages)</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="pagination-box pagination-style-2">
                                        <li><a class="Previous" href="#">Previous</a>
                                        </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li>
                                            <a class="Next" href="#"> Next </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop page main wrapper end -->
@endsection