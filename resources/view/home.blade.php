@extends('layouts.home')
@section('content')
    <div class="slider-area">
        <div class="hero-slider-active slick-dot-style slider-arrow-style">
            <div class="single-slider d-flex align-items-center" style="background-image: url('{{BASE_URL . "public"}}/assets/img/slider/slider1-home1.jpg');">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-sm-8">
                            <div class="slider-text">
                                <h1>New Range Of<br>sumsang Camera</h1>
                                <p>sumsang EOS600D/Kiss X5</p>
                                <a class="btn-1 home-btn" href="#">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider d-flex align-items-center" style="background-image: url('{{BASE_URL . "public"}}/assets/img/slider/slider2-home1.jpg');">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-sm-8">
                            <div class="slider-text">
                                <h1>Game, Consoles &amp;<br>much more</h1>
                                <p>Sega Saturn Disc Drive Replacement</p>
                                <a class="btn-1 home-btn" href="#">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home2-main-wrapper mt-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="home2-left-sidebar">
                        <div class="flas-sale-area mb-30">
                            <div class="section-title flash-title">
                                <h3><span>Flash</span> Sale </h3>
                            </div>
                            <div class="flash-sale-active owl-carousel owl-arrow-style">
                                <div class="flash-single-item">
                                    <div class="product-item mb-30">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-1.jpg" class="pri-img" alt="">
                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-2.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_new">
                                                    <span>new</span>
                                                </div>
                                                <div class="label-product label_sale">
                                                    <span>-20%</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view" data-bs-target="#quickk_view" data-bs-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption count-style">
                                            <div class="manufacture-product">
                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="product-details.html">jony XB10 Portable Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price"><span class="special-price">£65.00</span></span>
                                                <span class="old-price"><del>£90.00</del></span>
                                            </div>
                                            <div class="product-countdown" data-countdown="2023/12/01"></div>
                                            <button class="btn-cart" type="button">add to cart</button>
                                        </div>
                                    </div><!-- </div> end single item -->
                                    <div class="product-item mb-30">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-6.jpg" class="pri-img" alt="">
                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-8.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_new">
                                                    <span>new</span>
                                                </div>
                                                <div class="label-product label_sale">
                                                    <span>-20%</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view" data-bs-target="#quickk_view" data-bs-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption count-style">
                                            <div class="manufacture-product">
                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="product-details.html">jony XB10 Portable Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price"><span class="special-price">£65.00</span></span>
                                                <span class="old-price"><del>£90.00</del></span>
                                            </div>
                                            <div class="product-countdown" data-countdown="2023/12/01"></div>
                                            <button class="btn-cart" type="button">add to cart</button>
                                        </div>
                                    </div><!-- </div> end single item -->
                                </div>
                                <div class="flash-single-item">
                                    <div class="product-item mb-30">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-3.jpg" class="pri-img" alt="">
                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-4.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_new">
                                                    <span>new</span>
                                                </div>
                                                <div class="label-product label_sale">
                                                    <span>-20%</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view" data-bs-target="#quickk_view" data-bs-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption count-style">
                                            <div class="manufacture-product">
                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="product-details.html">jony XB10 Portable Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price"><span class="special-price">£65.00</span></span>
                                                <span class="old-price"><del>£90.00</del></span>
                                            </div>
                                            <div class="product-countdown" data-countdown="2023/12/01"></div>
                                            <button class="btn-cart" type="button">add to cart</button>
                                        </div>
                                    </div><!-- </div> end single item -->
                                    <div class="product-item mb-30">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-10.jpg" class="pri-img" alt="">
                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-12.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_new">
                                                    <span>new</span>
                                                </div>
                                                <div class="label-product label_sale">
                                                    <span>-20%</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view" data-bs-target="#quickk_view" data-bs-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption count-style">
                                            <div class="manufacture-product">
                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="product-details.html">jony XB10 Portable Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price"><span class="special-price">£65.00</span></span>
                                                <span class="old-price"><del>£90.00</del></span>
                                            </div>
                                            <div class="product-countdown" data-countdown="2023/12/01"></div>
                                            <button class="btn-cart" type="button">add to cart</button>
                                        </div>
                                    </div><!-- </div> end single item -->
                                </div>
                                <div class="flash-single-item">
                                    <div class="product-item mb-30">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-3.jpg" class="pri-img" alt="">
                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-4.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_new">
                                                    <span>new</span>
                                                </div>
                                                <div class="label-product label_sale">
                                                    <span>-20%</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view" data-bs-target="#quickk_view" data-bs-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption count-style">
                                            <div class="manufacture-product">
                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="product-details.html">jony XB10 Portable Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price"><span class="special-price">£65.00</span></span>
                                                <span class="old-price"><del>£90.00</del></span>
                                            </div>
                                            <div class="product-countdown" data-countdown="2023/12/01"></div>
                                            <button class="btn-cart" type="button">add to cart</button>
                                        </div>
                                    </div><!-- </div> end single item -->
                                    <div class="product-item mb-30">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-10.jpg" class="pri-img" alt="">
                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-12.jpg" class="sec-img" alt="">
                                            </a>
                                            <div class="box-label">
                                                <div class="label-product label_new">
                                                    <span>new</span>
                                                </div>
                                                <div class="label-product label_sale">
                                                    <span>-20%</span>
                                                </div>
                                            </div>
                                            <div class="action-links">
                                                <a href="#" title="Wishlist"><i class="lnr lnr-heart"></i></a>
                                                <a href="#" title="Compare"><i class="lnr lnr-sync"></i></a>
                                                <a href="#" title="Quick view" data-bs-target="#quickk_view" data-bs-toggle="modal"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-caption count-style">
                                            <div class="manufacture-product">
                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h4><a href="product-details.html">jony XB10 Portable Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price"><span class="special-price">£65.00</span></span>
                                                <span class="old-price"><del>£90.00</del></span>
                                            </div>
                                            <div class="product-countdown" data-countdown="2023/12/01"></div>
                                            <button class="btn-cart" type="button">add to cart</button>
                                        </div>
                                    </div><!-- </div> end single item -->
                                </div>
                            </div>
                        </div> <!--  end flash sale -->
                        <div class="sidebar-static-banner mb-40">
                            <div class="sidebar-static-thumb">
                                <a href="#"><img src="{{BASE_URL . "public"}}/assets/img/banner/img-static-sidebar.jpg" alt=""></a>
                            </div>
                        </div> <!--  end static banner -->
                        <div class="latest-product-sidebar mb-40">
                            <div class="section-title flash-title">
                                <h3><span>Latest</span> product</h3>
                            </div>
                            <div class="latest-slide-active owl-carousel">
                                <div class="latest-single-slide">
                                    <div class="latest-single-item">
                                        <div class="latest-thumb">
                                            <a href="product-details.html"><img src="{{BASE_URL . "public"}}/assets/img/product/product-4.jpg" alt=""></a>
                                        </div>
                                        <div class="latest-pro-content">
                                            <h4><a href="product-details.html">Bose SoundLink Bluetooth Speaker</a></h4>
                                            <div class="price-box">
                                                <span class="regular-price"><span class="special-price">£65.00</span></span>
                                                <span class="old-price"><del>£90.00</del></span>
                                            </div>
                                        </div>
                                    </div> <!--  end latest single item -->
                                    <div class="latest-single-item">
                                        <div class="latest-thumb">
                                            <a href="product-details.html"><img src="{{BASE_URL . "public"}}/assets/img/product/product-2.jpg" alt=""></a>
                                        </div>
                                        <div class="latest-pro-content">
                                            <h4><a href="product-details.html">Bose SoundLink Bluetooth Speaker</a></h4>
                                            <div class="price-box">
                                                <span class="regular-price"><span class="special-price">£65.00</span></span>
                                                <span class="old-price"><del>£90.00</del></span>
                                            </div>
                                        </div>
                                    </div> <!--  end latest single item -->
                                    <div class="latest-single-item">
                                        <div class="latest-thumb">
                                            <a href="product-details.html"><img src="{{BASE_URL . "public"}}/assets/img/product/product-3.jpg" alt=""></a>
                                        </div>
                                        <div class="latest-pro-content">
                                            <h4><a href="product-details.html">Bose SoundLink Bluetooth Speaker</a></h4>
                                            <div class="price-box">
                                                <span class="regular-price"><span class="special-price">£65.00</span></span>
                                                <span class="old-price"><del>£90.00</del></span>
                                            </div>
                                        </div>
                                    </div> <!--  end latest single item -->
                                    <div class="latest-single-item">
                                        <div class="latest-thumb">
                                            <a href="product-details.html"><img src="{{BASE_URL . "public"}}/assets/img/product/product-5.jpg" alt=""></a>
                                        </div>
                                        <div class="latest-pro-content">
                                            <h4><a href="product-details.html">Bose SoundLink Bluetooth Speaker</a></h4>
                                            <div class="price-box">
                                                <span class="regular-price"><span class="special-price">£65.00</span></span>
                                                <span class="old-price"><del>£90.00</del></span>
                                            </div>
                                        </div>
                                    </div> <!--  end latest single item -->
                                </div>
                                <div class="latest-single-slide">
                                    <div class="latest-single-item">
                                        <div class="latest-thumb">
                                            <a href="product-details.html"><img src="{{BASE_URL . "public"}}/assets/img/product/product-12.jpg" alt=""></a>
                                        </div>
                                        <div class="latest-pro-content">
                                            <h4><a href="product-details.html">Bose SoundLink Bluetooth Speaker</a></h4>
                                            <div class="price-box">
                                                <span class="regular-price"><span class="special-price">£65.00</span></span>
                                                <span class="old-price"><del>£90.00</del></span>
                                            </div>
                                        </div>
                                    </div> <!--  end latest single item -->
                                    <div class="latest-single-item">
                                        <div class="latest-thumb">
                                            <a href="product-details.html"><img src="{{BASE_URL . "public"}}/assets/img/product/product-5.jpg" alt=""></a>
                                        </div>
                                        <div class="latest-pro-content">
                                            <h4><a href="product-details.html">Bose SoundLink Bluetooth Speaker</a></h4>
                                            <div class="price-box">
                                                <span class="regular-price"><span class="special-price">£65.00</span></span>
                                                <span class="old-price"><del>£90.00</del></span>
                                            </div>
                                        </div>
                                    </div> <!--  end latest single item -->
                                    <div class="latest-single-item">
                                        <div class="latest-thumb">
                                            <a href="product-details.html"><img src="{{BASE_URL . "public"}}/assets/img/product/product-14.jpg" alt=""></a>
                                        </div>
                                        <div class="latest-pro-content">
                                            <h4><a href="product-details.html">Bose SoundLink Bluetooth Speaker</a></h4>
                                            <div class="price-box">
                                                <span class="regular-price"><span class="special-price">£65.00</span></span>
                                                <span class="old-price"><del>£90.00</del></span>
                                            </div>
                                        </div>
                                    </div> <!--  end latest single item -->
                                    <div class="latest-single-item">
                                        <div class="latest-thumb">
                                            <a href="product-details.html"><img src="{{BASE_URL . "public"}}/assets/img/product/product-11.jpg" alt=""></a>
                                        </div>
                                        <div class="latest-pro-content">
                                            <h4><a href="product-details.html">Bose SoundLink Bluetooth Speaker</a></h4>
                                            <div class="price-box">
                                                <span class="regular-price"><span class="special-price">£65.00</span></span>
                                                <span class="old-price"><del>£90.00</del></span>
                                            </div>
                                        </div>
                                    </div> <!--  end latest single item -->
                                </div>
                            </div>
                        </div> <!--  end latest product -->
                        <div class="latest-blogg mb-40">
                            <div class="section-title flash-title">
                                <h3><span>Latest</span> Blog</h3>
                            </div>
                            <div class="latest-blog-active owl-carousel owl-arrow-style">
                                <div class="single-blogg-item">
                                    <div class="blogg-thumb">
                                        <a href="blog-details.html">
                                            <img src="{{BASE_URL . "public"}}/assets/img/blog/blog1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="blogg-content">
                                        <span class="post-date">20 oct 2019</span>
                                        <h5><a href="blog-details.html">London Fashion Week 360° Candy Rock & Royal Fashion Day</a></h5>
                                        <p>Maria Denardo is the Fashion Director at theFashionSpot. Prior to joining tFS, she worked as...</p>
                                    </div>
                                </div>
                                <div class="single-blogg-item">
                                    <div class="blogg-thumb">
                                        <a href="blog-details.html">
                                            <img src="{{BASE_URL . "public"}}/assets/img/blog/blog2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="blogg-content">
                                        <span class="post-date">20 oct 2019</span>
                                        <h5><a href="blog-details.html">London Fashion Week 360° Candy Rock & Royal Fashion Day</a></h5>
                                        <p>Maria Denardo is the Fashion Director at theFashionSpot. Prior to joining tFS, she worked as...</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!--  end latest blog -->
                        <div class="testimonial-one">
                            <div class="section-title flash-title">
                                <h3><span>Testimonials</span></h3>
                            </div>
                            <div class="testimonial-active owl-carousel owl-dot-style">
                                <div class="testimonial-single-item">
                                    <div class="testimonial-avater">
                                        <div class="testimonial-thumb">
                                            <img src="{{BASE_URL . "public"}}/assets/img/testimonial/testimonial1.png" alt="">
                                        </div>
                                        <div class="testimonial-author">
                                            <h6>Amber</h6>
                                            <div class="testimonial-rating">
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-caption">
                                        <div class="testi-quote">
                                            <a href="#"> Code, template and others are very good. The support has served me immediately and solved my problems when I need help. Are to be congratulated. Att Renan Andr..</a>
                                        </div>
                                    </div>
                                </div> <!--  end single item -->
                                <div class="testimonial-single-item">
                                    <div class="testimonial-avater">
                                        <div class="testimonial-thumb">
                                            <img src="{{BASE_URL . "public"}}/assets/img/testimonial/testimonial2.png" alt="">
                                        </div>
                                        <div class="testimonial-author">
                                            <h6>Stefano</h6>
                                            <div class="testimonial-rating">
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-caption">
                                        <div class="testi-quote">
                                            <a href="#"> Code, template and others are very good. The support has served me immediately and solved my problems when I need help. Are to be congratulated. Att Renan Andr..</a>
                                        </div>
                                    </div>
                                </div> <!--  end single item -->
                                <div class="testimonial-single-item">
                                    <div class="testimonial-avater">
                                        <div class="testimonial-thumb">
                                            <img src="{{BASE_URL . "public"}}/assets/img/testimonial/testimonial1.png" alt="">
                                        </div>
                                        <div class="testimonial-author">
                                            <h6>Amber</h6>
                                            <div class="testimonial-rating">
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-caption">
                                        <div class="testi-quote">
                                            <a href="#"> Code, template and others are very good. The support has served me immediately and solved my problems when I need help. Are to be congratulated. Att Renan Andr..</a>
                                        </div>
                                    </div>
                                </div> <!--  end single item -->
                                <div class="testimonial-single-item">
                                    <div class="testimonial-avater">
                                        <div class="testimonial-thumb">
                                            <img src="{{BASE_URL . "public"}}/assets/img/testimonial/testimonial2.png" alt="">
                                        </div>
                                        <div class="testimonial-author">
                                            <h6>Stefano</h6>
                                            <div class="testimonial-rating">
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-caption">
                                        <div class="testi-quote">
                                            <a href="#"> Code, template and others are very good. The support has served me immediately and solved my problems when I need help. Are to be congratulated. Att Renan Andr..</a>
                                        </div>
                                    </div>
                                </div> <!--  end single item -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-first order-lg-last">
                    <div class="home2-content-wrapper">
                        <!-- feature area start -->
                        <div class="feature-style-one">
                            <div class="container-fluid plr-none">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="feature-inner feature-home2 fix">
                                            <div class="col">
                                                <div class="feature-item">
                                                    <div class="feature-icon">
                                                        <img src="{{BASE_URL . "public"}}/assets/img/icon/wrapper1.png" alt="">
                                                    </div>
                                                    <div class="feature-content">
                                                        <h4>free shipping</h4>
                                                        <p>free shipping on all us order</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="feature-item">
                                                    <div class="feature-icon">
                                                        <img src="{{BASE_URL . "public"}}/assets/img/icon/wrapper2.png" alt="">
                                                    </div>
                                                    <div class="feature-content">
                                                        <h4>Support 24/7</h4>
                                                        <p>Contact us 24 hours a day</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="feature-item">
                                                    <div class="feature-icon">
                                                        <img src="{{BASE_URL . "public"}}/assets/img/icon/wrapper3.png" alt="">
                                                    </div>
                                                    <div class="feature-content">
                                                        <h4>100% Money Back</h4>
                                                        <p>You have 30 days to Return</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="feature-item">
                                                    <div class="feature-icon">
                                                        <img src="{{BASE_URL . "public"}}/assets/img/icon/wrapper5.png" alt="">
                                                    </div>
                                                    <div class="feature-content">
                                                        <h4>Payment Secure</h4>
                                                        <p>We ensure secure payment</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- feature area end -->

                        <!-- product wrapper area start -->
                        <div class="product-wrapper fix pb-75">
                            <div class="container-fluid plr-none">
                                <div class="section-title product-spacing home2-tab-spacing">
                                    <h3><span>our</span> product</h3>
                                    <div class="boxx-tab">
                                        <ul class="nav my-tab" role="tablist">
                                            <li role="presentation">
                                                <button class="active" type="button" id="one-tab" data-bs-toggle="tab" data-bs-target="#one" role="tab" aria-controls="one" aria-selected="true">Camera, Photo & Video</button>
                                            </li>
                                            <li role="presentation">
                                                <button data-bs-toggle="tab" type="button" id="two-tab" data-bs-toggle="tab" data-bs-target="#two" role="tab" aria-controls="two" aria-selected="false">Audio & Home Theater</button>
                                            </li>
                                            <li role="presentation">
                                                <button data-bs-toggle="tab" type="button" id="three-tab" data-bs-toggle="tab" data-bs-target="#three" role="tab" aria-controls="three" aria-selected="false">Cellphones & Accessories</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="one" role="tabpanel" aria-labelledby="one-tab">
                                        <div class="product-gallary-wrapper">
                                            <div class="product-gallary-active2 owl-carousel owl-arrow-style product-spacing">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="product-details.html">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-1.jpg" class="pri-img" alt="">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-2.jpg" class="sec-img" alt="">
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
                                                            <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                        </div>
                                                        <div class="product-name">
                                                            <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="regular-price">£30.31</span>
                                                        </div>
                                                        <button class="btn-cart" type="button">add to cart</button>
                                                    </div>
                                                </div><!-- </div> end single item -->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="product-details.html">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-3.jpg" class="pri-img" alt="">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-4.jpg" class="sec-img" alt="">
                                                        </a>
                                                        <div class="box-label">
                                                            <div class="label-product label_new">
                                                                <span>new</span>
                                                            </div>
                                                            <div class="label-product label_sale">
                                                                <span>-10%</span>
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
                                                            <p><a href="shop-grid-left-sidebar.html">jony</a></p>
                                                        </div>
                                                        <div class="product-name">
                                                            <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="regular-price"><span class="special-price">£50.00</span></span>
                                                            <span class="old-price"><del>£60.00</del></span>
                                                        </div>
                                                        <button class="btn-cart" type="button">add to cart</button>
                                                    </div>
                                                </div><!-- </div> end single item -->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="product-details.html">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-5.jpg" class="pri-img" alt="">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-6.jpg" class="sec-img" alt="">
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
                                                            <p><a href="shop-grid-left-sidebar.html">sumsang</a></p>
                                                        </div>
                                                        <div class="product-name">
                                                            <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                                        </div>
                                                        <div class="ratings">
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="regular-price">£46.31</span>
                                                        </div>
                                                        <button class="btn-cart" type="button">add to cart</button>
                                                    </div>
                                                </div><!-- </div> end single item -->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="product-details.html">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-4.jpg" class="pri-img" alt="">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-8.jpg" class="sec-img" alt="">
                                                        </a>
                                                        <div class="box-label">
                                                            <div class="label-product label_sale">
                                                                <span>-10%</span>
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
                                                            <p><a href="shop-grid-left-sidebar.html">toshiba</a></p>
                                                        </div>
                                                        <div class="product-name">
                                                            <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="regular-price">£78.31</span>
                                                        </div>
                                                        <button class="btn-cart" type="button">add to cart</button>
                                                    </div>
                                                </div><!-- </div> end single item -->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="product-details.html">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-9.jpg" class="pri-img" alt="">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-10.jpg" class="sec-img" alt="">
                                                        </a>
                                                        <div class="box-label">
                                                            <div class="label-product label_sale">
                                                                <span>-5%</span>
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
                                                            <p><a href="shop-grid-left-sidebar.html">hitachi</a></p>
                                                        </div>
                                                        <div class="product-name">
                                                            <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                                        </div>
                                                        <div class="ratings">
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="regular-price">£90.31</span>
                                                        </div>
                                                        <button class="btn-cart" type="button">add to cart</button>
                                                    </div>
                                                </div><!-- </div> end single item -->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="product-details.html">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-2.jpg" class="pri-img" alt="">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-3.jpg" class="sec-img" alt="">
                                                        </a>
                                                        <div class="box-label">
                                                            <div class="label-product label_new">
                                                                <span>new</span>
                                                            </div>
                                                            <div class="label-product label_sale">
                                                                <span>-20%</span>
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
                                                            <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                        </div>
                                                        <div class="product-name">
                                                            <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="regular-price"><span class="special-price">£65.00</span></span>
                                                            <span class="old-price"><del>£90.00</del></span>
                                                        </div>
                                                        <button class="btn-cart" type="button">add to cart</button>
                                                    </div>
                                                </div> <!-- </div> end single item -->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="product-details.html">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-4.jpg" class="pri-img" alt="">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-1.jpg" class="sec-img" alt="">
                                                        </a>
                                                        <div class="box-label">
                                                            <div class="label-product label_sale">
                                                                <span>-7%</span>
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
                                                            <p><a href="shop-grid-left-sidebar.html">nokia</a></p>
                                                        </div>
                                                        <div class="product-name">
                                                            <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                                        </div>
                                                        <div class="ratings">
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="regular-price">£78.31</span>
                                                        </div>
                                                        <button class="btn-cart" type="button">add to cart</button>
                                                    </div>
                                                </div><!-- </div> end single item -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="two-tab">
                                        <div class="product-gallary-wrapper">
                                            <div class="product-gallary-active owl-carousel owl-arrow-style product-spacing">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="product-details.html">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-4.jpg" class="pri-img" alt="">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-1.jpg" class="sec-img" alt="">
                                                        </a>
                                                        <div class="box-label">
                                                            <div class="label-product label_sale">
                                                                <span>-7%</span>
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
                                                            <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                        </div>
                                                        <div class="product-name">
                                                            <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                                        </div>
                                                        <div class="ratings">
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="regular-price">£78.31</span>
                                                        </div>
                                                        <button class="btn-cart" type="button">add to cart</button>
                                                    </div>
                                                </div><!-- </div> end single item -->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="product-details.html">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-9.jpg" class="pri-img" alt="">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-10.jpg" class="sec-img" alt="">
                                                        </a>
                                                        <div class="box-label">
                                                            <div class="label-product label_sale">
                                                                <span>-5%</span>
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
                                                            <p><a href="shop-grid-left-sidebar.html">jony</a></p>
                                                        </div>
                                                        <div class="product-name">
                                                            <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                                        </div>
                                                        <div class="ratings">
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="regular-price">£90.31</span>
                                                        </div>
                                                        <button class="btn-cart" type="button">add to cart</button>
                                                    </div>
                                                </div><!-- </div> end single item -->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="product-details.html">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-3.jpg" class="pri-img" alt="">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-4.jpg" class="sec-img" alt="">
                                                        </a>
                                                        <div class="box-label">
                                                            <div class="label-product label_new">
                                                                <span>new</span>
                                                            </div>
                                                            <div class="label-product label_sale">
                                                                <span>-10%</span>
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
                                                            <p><a href="shop-grid-left-sidebar.html">lg</a></p>
                                                        </div>
                                                        <div class="product-name">
                                                            <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="regular-price"><span class="special-price">£50.00</span></span>
                                                            <span class="old-price"><del>£60.00</del></span>
                                                        </div>
                                                        <button class="btn-cart" type="button">add to cart</button>
                                                    </div>
                                                </div><!-- </div> end single item -->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="product-details.html">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-4.jpg" class="pri-img" alt="">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-8.jpg" class="sec-img" alt="">
                                                        </a>
                                                        <div class="box-label">
                                                            <div class="label-product label_sale">
                                                                <span>-10%</span>
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
                                                            <p><a href="shop-grid-left-sidebar.html">sumsang</a></p>
                                                        </div>
                                                        <div class="product-name">
                                                            <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="regular-price">£78.31</span>
                                                        </div>
                                                        <button class="btn-cart" type="button">add to cart</button>
                                                    </div>
                                                </div><!-- </div> end single item -->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="product-details.html">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-5.jpg" class="pri-img" alt="">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-6.jpg" class="sec-img" alt="">
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
                                                            <p><a href="shop-grid-left-sidebar.html">hitachi</a></p>
                                                        </div>
                                                        <div class="product-name">
                                                            <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                                        </div>
                                                        <div class="ratings">
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="regular-price">£46.31</span>
                                                        </div>
                                                        <button class="btn-cart" type="button">add to cart</button>
                                                    </div>
                                                </div><!-- </div> end single item -->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="product-details.html">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-2.jpg" class="pri-img" alt="">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-3.jpg" class="sec-img" alt="">
                                                        </a>
                                                        <div class="box-label">
                                                            <div class="label-product label_new">
                                                                <span>new</span>
                                                            </div>
                                                            <div class="label-product label_sale">
                                                                <span>-20%</span>
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
                                                            <p><a href="shop-grid-left-sidebar.html">walton</a></p>
                                                        </div>
                                                        <div class="product-name">
                                                            <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="regular-price"><span class="special-price">£65.00</span></span>
                                                            <span class="old-price"><del>£90.00</del></span>
                                                        </div>
                                                        <button class="btn-cart" type="button">add to cart</button>
                                                    </div>
                                                </div><!-- </div> end single item -->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="product-details.html">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-1.jpg" class="pri-img" alt="">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-2.jpg" class="sec-img" alt="">
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
                                                            <p><a href="shop-grid-left-sidebar.html">jamuna</a></p>
                                                        </div>
                                                        <div class="product-name">
                                                            <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="regular-price">£30.31</span>
                                                        </div>
                                                        <button class="btn-cart" type="button">add to cart</button>
                                                    </div>
                                                </div><!-- </div> end single item -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="three" role="tabpanel" aria-labelledby="three-tab">
                                        <div class="product-gallary-wrapper">
                                            <div class="product-gallary-active owl-carousel owl-arrow-style product-spacing">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="product-details.html">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-11.jpg" class="pri-img" alt="">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-12.jpg" class="sec-img" alt="">
                                                        </a>
                                                        <div class="box-label">
                                                            <div class="label-product label_sale">
                                                                <span>-7%</span>
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
                                                            <p><a href="shop-grid-left-sidebar.html">sumsang</a></p>
                                                        </div>
                                                        <div class="product-name">
                                                            <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                                        </div>
                                                        <div class="ratings">
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="regular-price">£78.31</span>
                                                        </div>
                                                        <button class="btn-cart" type="button">add to cart</button>
                                                    </div>
                                                </div><!-- </div> end single item -->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="product-details.html">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-13.jpg" class="pri-img" alt="">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-10.jpg" class="sec-img" alt="">
                                                        </a>
                                                        <div class="box-label">
                                                            <div class="label-product label_sale">
                                                                <span>-5%</span>
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
                                                            <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                        </div>
                                                        <div class="product-name">
                                                            <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                                        </div>
                                                        <div class="ratings">
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="regular-price">£90.31</span>
                                                        </div>
                                                        <button class="btn-cart" type="button">add to cart</button>
                                                    </div>
                                                </div><!-- </div> end single item -->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="product-details.html">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-7.jpg" class="pri-img" alt="">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-4.jpg" class="sec-img" alt="">
                                                        </a>
                                                        <div class="box-label">
                                                            <div class="label-product label_new">
                                                                <span>new</span>
                                                            </div>
                                                            <div class="label-product label_sale">
                                                                <span>-10%</span>
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
                                                            <p><a href="shop-grid-left-sidebar.html">jony</a></p>
                                                        </div>
                                                        <div class="product-name">
                                                            <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="regular-price"><span class="special-price">£50.00</span></span>
                                                            <span class="old-price"><del>£60.00</del></span>
                                                        </div>
                                                        <button class="btn-cart" type="button">add to cart</button>
                                                    </div>
                                                </div><!-- </div> end single item -->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="product-details.html">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-7.jpg" class="pri-img" alt="">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-2.jpg" class="sec-img" alt="">
                                                        </a>
                                                        <div class="box-label">
                                                            <div class="label-product label_sale">
                                                                <span>-10%</span>
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
                                                            <p><a href="shop-grid-left-sidebar.html">sumsang</a></p>
                                                        </div>
                                                        <div class="product-name">
                                                            <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="regular-price">£78.31</span>
                                                        </div>
                                                        <button class="btn-cart" type="button">add to cart</button>
                                                    </div>
                                                </div> <!-- </div> end single item -->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="product-details.html">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-4.jpg" class="pri-img" alt="">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-1.jpg" class="sec-img" alt="">
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
                                                            <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                        </div>
                                                        <div class="product-name">
                                                            <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                                        </div>
                                                        <div class="ratings">
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="regular-price">£46.31</span>
                                                        </div>
                                                        <button class="btn-cart" type="button">add to cart</button>
                                                    </div>
                                                </div> <!-- </div> end single item -->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="product-details.html">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-6.jpg" class="pri-img" alt="">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-9.jpg" class="sec-img" alt="">
                                                        </a>
                                                        <div class="box-label">
                                                            <div class="label-product label_new">
                                                                <span>new</span>
                                                            </div>
                                                            <div class="label-product label_sale">
                                                                <span>-20%</span>
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
                                                            <p><a href="shop-grid-left-sidebar.html">hitachi</a></p>
                                                        </div>
                                                        <div class="product-name">
                                                            <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="regular-price"><span class="special-price">£65.00</span></span>
                                                            <span class="old-price"><del>£90.00</del></span>
                                                        </div>
                                                        <button class="btn-cart" type="button">add to cart</button>
                                                    </div>
                                                </div> <!-- </div> end single item -->
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <a href="product-details.html">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-11.jpg" class="pri-img" alt="">
                                                            <img src="{{BASE_URL . "public"}}/assets/img/product/product-13.jpg" class="sec-img" alt="">
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
                                                            <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                        </div>
                                                        <div class="product-name">
                                                            <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span><i class="lnr lnr-star"></i></span>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="regular-price">£30.31</span>
                                                        </div>
                                                        <button class="btn-cart" type="button">add to cart</button>
                                                    </div>
                                                </div> <!-- </div> end single item -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product wrapper area start -->

                        <!-- home banner statics area -->
                        <div class="banner-statics">
                            <div class="container-fluid plr-none">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-banner-statics">
                                            <a href="shop-grid-left-sidebar.html"><img src="{{BASE_URL . "public"}}/assets/img/banner/img1-top-sinrato1.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-banner-statics">
                                            <a href="shop-grid-left-sidebar.html"><img src="{{BASE_URL . "public"}}/assets/img/banner/img2-top-sinrato1.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-banner-statics">
                                            <a href="shop-grid-left-sidebar.html"><img src="{{BASE_URL . "public"}}/assets/img/banner/img3-top-sinrato1.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- home banner statics end -->

                        <!-- home product module four start -->
                        <div class="home-module-four">
                            <div class="container-fluid plr-none">
                                <div class="section-title">
                                    <h3><span>Laptop</span> & computer</h3>
                                </div>
                                <div class="pro-module-four-active2 pro-home2 owl-carousel owl-arrow-style">
                                    <div class="product-module-four-item">
                                        <div class="product-module-caption">
                                            <div class="manufacture-com">
                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                            </div>
                                            <div class="product-module-name">
                                                <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box-module">
                                                <span class="regular-price"><span class="special-price">£30.00</span></span>
                                                <span class="old-price"><del>£450.00</del></span>
                                            </div>
                                        </div>
                                        <div class="product-module-thumb">
                                            <a href="product-details.html">
                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-14.jpg" alt="">
                                            </a>
                                        </div>
                                    </div> <!-- end single item -->
                                    <div class="product-module-four-item">
                                        <div class="product-module-caption">
                                            <div class="manufacture-com">
                                                <p><a href="shop-grid-left-sidebar.html">Walton</a></p>
                                            </div>
                                            <div class="product-module-name">
                                                <h4><a href="product-details.html">Koss Porta Pro On Ear  Headphones </a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box-module">
                                                <span class="regular-price">£30.31</span>
                                            </div>
                                        </div>
                                        <div class="product-module-thumb">
                                            <a href="product-details.html">
                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-3.jpg" alt="">
                                            </a>
                                        </div>
                                    </div> <!-- end single item -->
                                    <div class="product-module-four-item">
                                        <div class="product-module-caption">
                                            <div class="manufacture-com">
                                                <p><a href="shop-grid-left-sidebar.html">Jamuna</a></p>
                                            </div>
                                            <div class="product-module-name">
                                                <h4><a href="product-details.html">JBL Flip 3 Portable Bluetooth</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box-module">
                                                <span class="regular-price"><span class="special-price">£40.00</span></span>
                                                <span class="old-price"><del>£60.00</del></span>
                                            </div>
                                        </div>
                                        <div class="product-module-thumb">
                                            <a href="product-details.html">
                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-10.jpg" alt="">
                                            </a>
                                        </div>
                                    </div> <!-- end single item -->
                                    <div class="product-module-four-item">
                                        <div class="product-module-caption">
                                            <div class="manufacture-com">
                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                            </div>
                                            <div class="product-module-name">
                                                <h4><a href="product-details.html">jony KD55X72 55-Inch  4k Ultra HD</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box-module">
                                                <span class="regular-price">£30.31</span>
                                            </div>
                                        </div>
                                        <div class="product-module-thumb">
                                            <a href="product-details.html">
                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-11.jpg" alt="">
                                            </a>
                                        </div>
                                    </div> <!-- end single item -->
                                </div>
                            </div>
                        </div>
                        <!-- home product module four end -->

                        <!-- home product module five start -->
                        <div class="home-module-five">
                            <div class="container-fluid plr-none">
                                <div class="section-title">
                                    <h3><span>Headphones</span> & Accessories </h3>
                                </div>
                                <div class="pro-module-four-active2 pro-home2 owl-carousel owl-arrow-style">
                                    <div class="product-module-four-item">
                                        <div class="product-module-caption">
                                            <div class="manufacture-com">
                                                <p><a href="shop-grid-left-sidebar.html">jony</a></p>
                                            </div>
                                            <div class="product-module-name">
                                                <h4><a href="product-details.html">Beats EP Wired Headphone-Black</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box-module">
                                                <span class="regular-price"><span class="special-price">£30.00</span></span>
                                                <span class="old-price"><del>£450.00</del></span>
                                            </div>
                                        </div>
                                        <div class="product-module-thumb">
                                            <a href="product-details.html">
                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-8.jpg" alt="">
                                            </a>
                                        </div>
                                    </div> <!-- end single item -->
                                    <div class="product-module-four-item">
                                        <div class="product-module-caption">
                                            <div class="manufacture-com">
                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                            </div>
                                            <div class="product-module-name">
                                                <h4><a href="product-details.html">JBL Flip 3 Portable Bluetooth</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box-module">
                                                <span class="regular-price">£30.31</span>
                                            </div>
                                        </div>
                                        <div class="product-module-thumb">
                                            <a href="product-details.html">
                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-4.jpg" alt="">
                                            </a>
                                        </div>
                                    </div> <!-- end single item -->
                                    <div class="product-module-four-item">
                                        <div class="product-module-caption">
                                            <div class="manufacture-com">
                                                <p><a href="shop-grid-left-sidebar.html">sumsang</a></p>
                                            </div>
                                            <div class="product-module-name">
                                                <h4><a href="product-details.html">Marshall Portable  Bluetooth Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box-module">
                                                <span class="regular-price"><span class="special-price">£40.00</span></span>
                                                <span class="old-price"><del>£60.00</del></span>
                                            </div>
                                        </div>
                                        <div class="product-module-thumb">
                                            <a href="product-details.html">
                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-6.jpg" alt="">
                                            </a>
                                        </div>
                                    </div> <!-- end single item -->
                                    <div class="product-module-four-item">
                                        <div class="product-module-caption">
                                            <div class="manufacture-com">
                                                <p><a href="shop-grid-left-sidebar.html">walton</a></p>
                                            </div>
                                            <div class="product-module-name">
                                                <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box-module">
                                                <span class="regular-price">£30.31</span>
                                            </div>
                                        </div>
                                        <div class="product-module-thumb">
                                            <a href="product-details.html">
                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-2.jpg" alt="">
                                            </a>
                                        </div>
                                    </div> <!-- end single item -->
                                </div>
                            </div>
                        </div>
                        <!-- home product module five end -->

                        <!-- home product module six start -->
                        <div class="home-module-six mb-70">
                            <div class="container-fluid plr-none">
                                <div class="section-title">
                                    <h3><span>Business</span> & office</h3>
                                </div>
                                <div class="pro-module-four-active2 pro-home2 owl-carousel owl-arrow-style">
                                    <div class="product-module-four-item">
                                        <div class="product-module-caption">
                                            <div class="manufacture-com">
                                                <p><a href="shop-grid-left-sidebar.html">jony</a></p>
                                            </div>
                                            <div class="product-module-name">
                                                <h4><a href="product-details.html">JBL Flip 3 Portable Bluetooth</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box-module">
                                                <span class="regular-price"><span class="special-price">£30.00</span></span>
                                                <span class="old-price"><del>£450.00</del></span>
                                            </div>
                                        </div>
                                        <div class="product-module-thumb">
                                            <a href="product-details.html">
                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-2.jpg" alt="">
                                            </a>
                                        </div>
                                    </div> <!-- end single item -->
                                    <div class="product-module-four-item">
                                        <div class="product-module-caption">
                                            <div class="manufacture-com">
                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                            </div>
                                            <div class="product-module-name">
                                                <h4><a href="product-details.html">Marshall Portable  Bluetooth Speaker </a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box-module">
                                                <span class="regular-price">£30.31</span>
                                            </div>
                                        </div>
                                        <div class="product-module-thumb">
                                            <a href="product-details.html">
                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-9.jpg" alt="">
                                            </a>
                                        </div>
                                    </div> <!-- end single item -->
                                    <div class="product-module-four-item">
                                        <div class="product-module-caption">
                                            <div class="manufacture-com">
                                                <p><a href="shop-grid-left-sidebar.html">sumsang</a></p>
                                            </div>
                                            <div class="product-module-name">
                                                <h4><a href="product-details.html">Beats EP Wired Headphone-Black</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box-module">
                                                <span class="regular-price"><span class="special-price">£40.00</span></span>
                                                <span class="old-price"><del>£60.00</del></span>
                                            </div>
                                        </div>
                                        <div class="product-module-thumb">
                                            <a href="product-details.html">
                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-13.jpg" alt="">
                                            </a>
                                        </div>
                                    </div> <!-- end single item -->
                                    <div class="product-module-four-item">
                                        <div class="product-module-caption">
                                            <div class="manufacture-com">
                                                <p><a href="shop-grid-left-sidebar.html">walton</a></p>
                                            </div>
                                            <div class="product-module-name">
                                                <h4><a href="product-details.html">jony XB10 Portable  Wireless Speaker</a></h4>
                                            </div>
                                            <div class="ratings">
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                                <span><i class="lnr lnr-star"></i></span>
                                            </div>
                                            <div class="price-box-module">
                                                <span class="regular-price">£30.31</span>
                                            </div>
                                        </div>
                                        <div class="product-module-thumb">
                                            <a href="product-details.html">
                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-7.jpg" alt="">
                                            </a>
                                        </div>
                                    </div> <!-- end single item -->
                                </div>
                            </div>
                        </div>
                        <!-- home product module five end -->

                        <!-- home banner statics area -->
                        <div class="banner-statics">
                            <div class="container-fluid plr-none">
                                <div class="single-banner-statics">
                                    <a href="shop-grid-left-sidebar.html"><img src="{{BASE_URL . "public"}}/assets/img/banner/img-bottom-sinrato1.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- home banner statics area end -->

                        <!-- home product module three start -->
                        <div class="home-module-three fix">
                            <div class="container-fluid plr-none">
                                <div class="section-title module-three module-three-spacing">
                                    <h3><span>Hot</span> Collection</h3>
                                    <div class="boxx-tab">
                                        <ul class="nav my-tab" role="tablist">
                                            <li role="presentation">
                                                <button class="active" type="button" id="module-one-tab" data-bs-toggle="tab" data-bs-target="#module-one" role="tab" aria-controls="module-one" aria-selected="true">Featured Products</button>
                                            </li>
                                            <li role="presentation">
                                                <button data-bs-toggle="tab" type="button" id="module-two-tab" data-bs-toggle="tab" data-bs-target="#module-two" role="tab" aria-controls="module-two" aria-selected="false">On sale Products</button>
                                            </li>
                                            <li role="presentation">
                                                <button data-bs-toggle="tab" type="button" id="module-three-tab" data-bs-toggle="tab" data-bs-target="#module-three" role="tab" aria-controls="module-three" aria-selected="false">Best sellers Products</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="module-one" role="tabpanel" aria-labelledby="module-one-tab">
                                        <div class="module-four-wrapper">
                                            <div class="pro-module3-active owl-carousel owl-arrow-style module-three-spacing2">
                                                <div class="module3-single-item">
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-2.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-3.jpg" class="sec-img" alt="">
                                                            </a>
                                                            <div class="box-label">
                                                                <div class="label-product label_sale">
                                                                    <span></span>
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
                                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">office uses  Wireless Speaker</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price">£10.00</span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-4.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-5.jpg" class="sec-img" alt="">
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
                                                                <p><a href="shop-grid-left-sidebar.html">jony</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">sumsang Portable headphone</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price">£60.99</span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                </div>
                                                <div class="module3-single-item">
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-6.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-7.jpg" class="sec-img" alt="">
                                                            </a>
                                                            <div class="box-label">
                                                                <div class="label-product label_new">
                                                                    <span>new</span>
                                                                </div>
                                                                <div class="label-product label_sale">
                                                                    <span>-20%</span>
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
                                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">jony XB10  Wireless printer</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price"><span class="special-price">£50.00</span></span>
                                                                <span class="old-price"><del>£60.00</del></span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-8.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-9.jpg" class="sec-img" alt="">
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
                                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">walton smart watch blutooth</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price">£99.99</span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                </div>
                                                <div class="module3-single-item">
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-10.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-11.jpg" class="sec-img" alt="">
                                                            </a>
                                                            <div class="box-label">
                                                                <div class="label-product label_new">
                                                                    <span>new</span>
                                                                </div>
                                                                <div class="label-product label_sale">
                                                                    <span>-8%</span>
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
                                                                <p><a href="shop-grid-left-sidebar.html">Nokia</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">Nokia smart phone with rom</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price"><span class="special-price">£78.99</span></span>
                                                                <span class="old-price"><del>£99.99</del></span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-12.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-13.jpg" class="sec-img" alt="">
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
                                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">walton Portable  Wireless Speaker</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price">£33.33</span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                </div>
                                                <div class="module3-single-item">
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-14.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-1.jpg" class="sec-img" alt="">
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
                                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">jamuna XB10 Portable  Speaker</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price">£30.31</span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-5.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-6.jpg" class="sec-img" alt="">
                                                            </a>
                                                            <div class="box-label">
                                                                <div class="label-product label_new">
                                                                    <span>new</span>
                                                                </div>
                                                                <div class="label-product label_sale">
                                                                    <span>-12%</span>
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
                                                                <p><a href="shop-grid-left-sidebar.html">walton</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">jony XB10  Wireless Speaker</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price"><span class="special-price">£50.00</span></span>
                                                                <span class="old-price"><del>£60.00</del></span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                </div>
                                                <div class="module3-single-item">
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-7.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-8.jpg" class="sec-img" alt="">
                                                            </a>
                                                            <div class="box-label">
                                                                <div class="label-product label_sale">
                                                                    <span>-15%</span>
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
                                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">Apple iPhone SE 16GB memory</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price">£25.50</span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-11.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-6.jpg" class="sec-img" alt="">
                                                            </a>
                                                            <div class="box-label">
                                                                <div class="label-product label_new">
                                                                    <span></span>
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
                                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">jony XB10 Portable  Speaker</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price">£32.18</span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                </div>
                                                <div class="module3-single-item">
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-8.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-2.jpg" class="sec-img" alt="">
                                                            </a>
                                                            <div class="box-label">
                                                                <div class="label-product label_sale">
                                                                    <span>-25%</span>
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
                                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">Apple iPad with Retina Display</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price"><span class="special-price">£30.3</span></span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-9.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-12.jpg" class="sec-img" alt="">
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
                                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">Amazon Cloud Security Camera</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price">£00.00</span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="module-two" role="tabpanel" aria-labelledby="module-two-tab">
                                        <div class="module-four-wrapper">
                                            <div class="pro-module3-active owl-carousel owl-arrow-style module-three-spacing2">
                                                <div class="module3-single-item">
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-8.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-2.jpg" class="sec-img" alt="">
                                                            </a>
                                                            <div class="box-label">
                                                                <div class="label-product label_sale">
                                                                    <span>-25%</span>
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
                                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">Apple iPad with Retina Display</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price"><span class="special-price">£30.3</span></span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-6.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-7.jpg" class="sec-img" alt="">
                                                            </a>
                                                            <div class="box-label">
                                                                <div class="label-product label_new">
                                                                    <span>new</span>
                                                                </div>
                                                                <div class="label-product label_sale">
                                                                    <span>-20%</span>
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
                                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">jony XB10  Wireless printer</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price"><span class="special-price">£50.00</span></span>
                                                                <span class="old-price"><del>£60.00</del></span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                </div>
                                                <div class="module3-single-item">
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-9.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-12.jpg" class="sec-img" alt="">
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
                                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">Amazon Cloud Security Camera</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price">£00.00</span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-8.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-9.jpg" class="sec-img" alt="">
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
                                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">walton smart watch blutooth</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price">£99.99</span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                </div>
                                                <div class="module3-single-item">
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-5.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-6.jpg" class="sec-img" alt="">
                                                            </a>
                                                            <div class="box-label">
                                                                <div class="label-product label_new">
                                                                    <span>new</span>
                                                                </div>
                                                                <div class="label-product label_sale">
                                                                    <span>-12%</span>
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
                                                                <p><a href="shop-grid-left-sidebar.html">walton</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">jony XB10  Wireless Speaker</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price"><span class="special-price">£50.00</span></span>
                                                                <span class="old-price"><del>£60.00</del></span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-12.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-13.jpg" class="sec-img" alt="">
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
                                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">walton Portable  Wireless Speaker</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price">£33.33</span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                </div>
                                                <div class="module3-single-item">
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-2.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-3.jpg" class="sec-img" alt="">
                                                            </a>
                                                            <div class="box-label">
                                                                <div class="label-product label_sale">
                                                                    <span>-10%</span>
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
                                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">office uses  Wireless Speaker</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price">£10.00</span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-4.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-5.jpg" class="sec-img" alt="">
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
                                                                <p><a href="shop-grid-left-sidebar.html">jony</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">sumsang Portable headphone</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price">£60.99</span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                </div>
                                                <div class="module3-single-item">
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-14.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-1.jpg" class="sec-img" alt="">
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
                                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">jamuna XB10 Portable  Speaker</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price">£30.31</span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-10.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-11.jpg" class="sec-img" alt="">
                                                            </a>
                                                            <div class="box-label">
                                                                <div class="label-product label_new">
                                                                    <span>new</span>
                                                                </div>
                                                                <div class="label-product label_sale">
                                                                    <span>-8%</span>
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
                                                                <p><a href="shop-grid-left-sidebar.html">Nokia</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">Nokia smart phone with rom</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price"><span class="special-price">£78.99</span></span>
                                                                <span class="old-price"><del>£99.99</del></span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                </div>
                                                <div class="module3-single-item">
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-7.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-8.jpg" class="sec-img" alt="">
                                                            </a>
                                                            <div class="box-label">
                                                                <div class="label-product label_sale">
                                                                    <span>-15%</span>
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
                                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">Apple iPhone SE 16GB memory</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price">£25.50</span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-11.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-6.jpg" class="sec-img" alt="">
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
                                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">jony XB10 Portable  Speaker</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price">£32.18</span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="module-three" role="tabpanel" aria-labelledby="module-three-tab">
                                        <div class="module-four-wrapper">
                                            <div class="pro-module3-active owl-carousel owl-arrow-style module-three-spacing2">
                                                <div class="module3-single-item">
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-14.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-1.jpg" class="sec-img" alt="">
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
                                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">jamuna XB10 Portable  Speaker</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price">£30.31</span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-6.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-7.jpg" class="sec-img" alt="">
                                                            </a>
                                                            <div class="box-label">
                                                                <div class="label-product label_new">
                                                                    <span>new</span>
                                                                </div>
                                                                <div class="label-product label_sale">
                                                                    <span>-20%</span>
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
                                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">jony XB10  Wireless printer</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price"><span class="special-price">£50.00</span></span>
                                                                <span class="old-price"><del>£60.00</del></span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                </div>
                                                <div class="module3-single-item">
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-10.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-11.jpg" class="sec-img" alt="">
                                                            </a>
                                                            <div class="box-label">
                                                                <div class="label-product label_new">
                                                                    <span>new</span>
                                                                </div>
                                                                <div class="label-product label_sale">
                                                                    <span>-8%</span>
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
                                                                <p><a href="shop-grid-left-sidebar.html">Nokia</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">Nokia smart phone with rom</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price"><span class="special-price">£78.99</span></span>
                                                                <span class="old-price"><del>£99.99</del></span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-12.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-13.jpg" class="sec-img" alt="">
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
                                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">walton Portable  Wireless Speaker</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price">£33.33</span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                </div>
                                                <div class="module3-single-item">
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-4.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-5.jpg" class="sec-img" alt="">
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
                                                                <p><a href="shop-grid-left-sidebar.html">jony</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">sumsang Portable headphone</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price">£60.99</span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-5.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-6.jpg" class="sec-img" alt="">
                                                            </a>
                                                            <div class="box-label">
                                                                <div class="label-product label_new">
                                                                    <span>new</span>
                                                                </div>
                                                                <div class="label-product label_sale">
                                                                    <span>-12%</span>
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
                                                                <p><a href="shop-grid-left-sidebar.html">walton</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">jony XB10  Wireless Speaker</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price"><span class="special-price">£50.00</span></span>
                                                                <span class="old-price"><del>£60.00</del></span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                </div>
                                                <div class="module3-single-item">
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-2.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-3.jpg" class="sec-img" alt="">
                                                            </a>
                                                            <div class="box-label">
                                                                <div class="label-product label_sale">
                                                                    <span></span>
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
                                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">office uses  Wireless Speaker</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price">£10.00</span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-7.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-8.jpg" class="sec-img" alt="">
                                                            </a>
                                                            <div class="box-label">
                                                                <div class="label-product label_sale">
                                                                    <span>-15%</span>
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
                                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">Apple iPhone SE 16GB memory</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price">£25.50</span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                </div>
                                                <div class="module3-single-item">
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-11.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-6.jpg" class="sec-img" alt="">
                                                            </a>
                                                            <div class="box-label">
                                                                <div class="label-product label_new">
                                                                    <span></span>
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
                                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">jony XB10 Portable  Speaker</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price">£32.18</span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-8.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-9.jpg" class="sec-img" alt="">
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
                                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">walton smart watch blutooth</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price">£99.99</span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                </div>
                                                <div class="module3-single-item">
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-8.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-2.jpg" class="sec-img" alt="">
                                                            </a>
                                                            <div class="box-label">
                                                                <div class="label-product label_sale">
                                                                    <span>-25%</span>
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
                                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">Apple iPad with Retina Display</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price"><span class="special-price">£30.3</span></span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-9.jpg" class="pri-img" alt="">
                                                                <img src="{{BASE_URL . "public"}}/assets/img/product/product-12.jpg" class="sec-img" alt="">
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
                                                                <p><a href="shop-grid-left-sidebar.html">apple</a></p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a href="product-details.html">Amazon Cloud Security Camera</a></h4>
                                                            </div>
                                                            <div class="ratings">
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                                <span><i class="lnr lnr-star"></i></span>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="regular-price">£00.00</span>
                                                            </div>
                                                            <button class="btn-cart" type="button">add to cart</button>
                                                        </div>
                                                    </div> <!-- single item end -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- home product module three end -->

                        <!-- featured categories home2 start -->
                        <div class="featured-home2 pb-35">
                            <div class="container-fluid plr-none">
                                <div class="section-title">
                                    <h3><span>Featured</span> Categories</h3>
                                </div>
                                <div class="featured-home2-wrapper">
                                    <div class="featured-home2-active owl-carousel owl-arrow-style">
                                        <div class="featured-home2-single-item">
                                            <div class="featured-home2-thumb">
                                                <a href="shop-grid-left-sidebar.html">
                                                    <img src="{{BASE_URL . "public"}}/assets/img/product/pro-layout-img7.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-home2-conteny">
                                                <h4> <a href="shop-grid-left-sidebar.html">Audio Theater</a> </h4>
                                                <ul class="sub-featured-categories">
                                                    <li><a href="shop-grid-left-sidebar.html">Home Audio</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Curved TVs</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Headphone</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Speakers</a></li>
                                                </ul>
                                                <a href="shop-grid-left-sidebar.html">+ shop now</a>
                                            </div>
                                        </div><!--  end single item -->
                                        <div class="featured-home2-single-item">
                                            <div class="featured-home2-thumb">
                                                <a href="shop-grid-left-sidebar.html">
                                                    <img src="{{BASE_URL . "public"}}/assets/img/product/pro-layout-img8.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-home2-conteny">
                                                <h4> <a href="shop-grid-left-sidebar.html">Network Devices</a> </h4>
                                                <ul class="sub-featured-categories">
                                                    <li><a href="shop-grid-left-sidebar.html">Bridge</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Hub</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Repeater</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Switch</a></li>
                                                </ul>
                                                <a href="shop-grid-left-sidebar.html">+ shop now</a>
                                            </div>
                                        </div><!--  end single item -->
                                        <div class="featured-home2-single-item">
                                            <div class="featured-home2-thumb">
                                                <a href="shop-grid-left-sidebar.html">
                                                    <img src="{{BASE_URL . "public"}}/assets/img/product/pro-layout-img9.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-home2-conteny">
                                                <h4> <a href="shop-grid-left-sidebar.html">Business & Office</a> </h4>
                                                <ul class="sub-featured-categories">
                                                    <li><a href="shop-grid-left-sidebar.html">Caculator</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Ink & Toner</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Printers</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Scanners</a></li>
                                                </ul>
                                                <a href="shop-grid-left-sidebar.html">+ shop now</a>
                                            </div>
                                        </div><!--  end single item -->
                                        <div class="featured-home2-single-item">
                                            <div class="featured-home2-thumb">
                                                <a href="shop-grid-left-sidebar.html">
                                                    <img src="{{BASE_URL . "public"}}/assets/img/product/pro-layout-img10.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-home2-conteny">
                                                <h4> <a href="shop-grid-left-sidebar.html">Camera & Video</a> </h4>
                                                <ul class="sub-featured-categories">
                                                    <li><a href="shop-grid-left-sidebar.html">Mirrorless camera</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Sequirity camera</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Lenses</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Digital camera</a></li>
                                                </ul>
                                                <a href="shop-grid-left-sidebar.html">+ shop now</a>
                                            </div>
                                        </div><!--  end single item -->
                                        <div class="featured-home2-single-item">
                                            <div class="featured-home2-thumb">
                                                <a href="shop-grid-left-sidebar.html">
                                                    <img src="{{BASE_URL . "public"}}/assets/img/product/pro-layout-img4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-home2-conteny">
                                                <h4> <a href="shop-grid-left-sidebar.html">Laptop & Computer</a> </h4>
                                                <ul class="sub-featured-categories">
                                                    <li><a href="shop-grid-left-sidebar.html">Laptop</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Tablets</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Desktop</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Accessories</a></li>
                                                </ul>
                                                <a href="shop-grid-left-sidebar.html">+ shop now</a>
                                            </div>
                                        </div><!--  end single item -->
                                        <div class="featured-home2-single-item">
                                            <div class="featured-home2-thumb">
                                                <a href="shop-grid-left-sidebar.html">
                                                    <img src="{{BASE_URL . "public"}}/assets/img/product/pro-layout-img6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-home2-conteny">
                                                <h4> <a href="shop-grid-left-sidebar.html">Laptop & Computer</a> </h4>
                                                <ul class="sub-featured-categories">
                                                    <li><a href="shop-grid-left-sidebar.html">Components</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Tablets</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Desktop</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Computer</a></li>
                                                </ul>
                                                <a href="shop-grid-left-sidebar.html">+ shop now</a>
                                            </div>
                                        </div><!--  end single item -->
                                        <div class="featured-home2-single-item">
                                            <div class="featured-home2-thumb">
                                                <a href="shop-grid-left-sidebar.html">
                                                    <img src="{{BASE_URL . "public"}}/assets/img/product/pro-layout-img10.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-home2-conteny">
                                                <h4> <a href="shop-grid-left-sidebar.html">Camera & Video</a> </h4>
                                                <ul class="sub-featured-categories">
                                                    <li><a href="shop-grid-left-sidebar.html">Mirrorless camera</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Sequirity camera</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Lenses</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Digital camera</a></li>
                                                </ul>
                                                <a href="shop-grid-left-sidebar.html">+ shop now</a>
                                            </div>
                                        </div><!--  end single item -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- featured categories home2 start -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="brand-area-home2 pt-35 pb-70">
        <div class="container-fluid">
            <div class="brand2-slider-wrapper">
                <div class="brand2-slider-active">
                    <div class="single-brand-logo">
                        <a href="#"><img src="{{BASE_URL . "public"}}/assets/img/brand/brand1.png" alt=""></a>
                    </div>
                    <div class="single-brand-logo">
                        <a href="#"><img src="{{BASE_URL . "public"}}/assets/img/brand/brand2.png" alt=""></a>
                    </div>
                    <div class="single-brand-logo">
                        <a href="#"><img src="{{BASE_URL . "public"}}/assets/img/brand/brand3.png" alt=""></a>
                    </div>
                    <div class="single-brand-logo">
                        <a href="#"><img src="{{BASE_URL . "public"}}/assets/img/brand/brand4.png" alt=""></a>
                    </div>
                    <div class="single-brand-logo">
                        <a href="#"><img src="{{BASE_URL . "public"}}/assets/img/brand/brand5.png" alt=""></a>
                    </div>
                    <div class="single-brand-logo">
                        <a href="#"><img src="{{BASE_URL . "public"}}/assets/img/brand/brand6.png" alt=""></a>
                    </div>
                    <div class="single-brand-logo">
                        <a href="#"><img src="{{BASE_URL . "public"}}/assets/img/brand/brand7.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection