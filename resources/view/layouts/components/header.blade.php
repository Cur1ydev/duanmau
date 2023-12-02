<header class="header-pos">
    <div class="header-top black-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="header-top-left">
                        <ul>
                            <li><span>Email: </span>support@sinrato.com</li>
                            <li>Free Shipping for all Order of $99</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="box box-right">
                        <ul>
                            <li class="settings">
                                <button type="button" class="ha-toggle">My Account<span class="lnr lnr-chevron-down"></span></button>
                                <ul class="box-dropdown ha-dropdown">
                                    @if(!getSession())
                                        <li><a href="/login">Login</a></li>
                                    @else
                                        <li><a href="/my-account">My Account</a></li>
                                        <li><a href="/logout">Logout</a></li>
                                    @endif
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-4 col-sm-4 col-12">
                    <div class="logo">
                        <a href="/"><img src="{{BASE_URL . "public"}}/assets/img/logo/logo-sinrato.png"
                                         alt="brand-logo"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 order-sm-last">
                    <div class="header-middle-inner">
                        <form action="/search" method="get">
                            <div class="top-cat hm1">
                                <div class="search-form">
                                    <select name="category">
                                        <optgroup label="Electronics">
                                            @foreach(getCategory() as $category)
                                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <input type="text" name="keyword" class="top-cat-field"
                                   placeholder="Search entire store here">
                            <input type="submit" class="top-search-btn" value="Search">
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-12 col-sm-8 order-lg-last">
                    <div class="mini-cart-option">
                        <ul>
                            <li class="compare">
                                <a class="ha-toggle" href="compare.html"><span class="lnr lnr-sync"></span>Product compare</a>
                            </li>
                            <li class="wishlist">
                                <a class="ha-toggle" href="wishlist.html"><span class="lnr lnr-heart"></span><span class="count">1</span>wishlist</a>
                            </li>
                            <li class="my-cart">
                                <button type="button" class="ha-toggle"><span class="lnr lnr-cart"></span><span class="count">2</span>my cart</button>
                                <ul class="mini-cart-drop-down ha-dropdown">
                                    <li class="mb-30">
                                        <div class="cart-img">
                                            <a href="product-details.html"><img alt="" src="{{BASE_URL . "public"}}/assets/img/cart/cart-1.jpg"></a>
                                        </div>
                                        <div class="cart-info">
                                            <h4><a href="product-details.html">Koss Porta Pro On Ear  Headphones </a></h4>
                                            <span> <span>1 x </span>£165.00</span>
                                        </div>
                                        <div class="del-icon">
                                            <i class="fa fa-times-circle"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="subtotal-text">Sub-total: </div>
                                        <div class="subtotal-price">£48.94</div>
                                    </li>
                                    <li>
                                        <div class="subtotal-text">Eco Tax (-2.00): </div>
                                        <div class="subtotal-price">£1.51</div>
                                    </li>
                                    <li>
                                        <div class="subtotal-text">Vat (20%): </div>
                                        <div class="subtotal-price">£9.79</div>
                                    </li>
                                    <li>
                                        <div class="subtotal-text">Total: </div>
                                        <div class="subtotal-price"><span>£60.24</span></div>
                                    </li>
                                    <li class="mt-30">
                                        <a class="cart-button" href="cart.html">view cart</a>
                                    </li>
                                    <li>
                                        <a class="cart-button" href="checkout.html">checkout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-top-menu theme-bg sticker">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-main-menu">
                        <div class="categories-menu-bar">
                            <div class="categories-menu-btn ha-toggle">
                                <div class="left">
                                    <i class="lnr lnr-text-align-left"></i>
                                    <span>Browse categories</span>
                                </div>
                                <div class="right">
                                    <i class="lnr lnr-chevron-down"></i>
                                </div>
                            </div>
                            <nav class="categorie-menus ha-dropdown">
                                <ul id="menu2">
                                    @foreach(getCategory() as $category)
                                    <li><a href="{{"/category/$category->category_slug"}}">{{$category->category_name}}</a></li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                </ul>
                            </nav>
                        </div> <!-- </div> end main menu -->
                        <div class="header-call-action">
                            <p><span class="lnr lnr-phone"></span>Hotline : <strong>0123456789</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-block d-lg-none">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</header>