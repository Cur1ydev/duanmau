<!-- Page Sidebar Start-->
<div class="sidebar-wrapper">
    <div id="sidebarEffect"></div>
    <div>
        <div class="logo-wrapper logo-wrapper-center">
            <a href="/admin" data-bs-original-title="" title="">
                <img class="img-fluid for-white" src="{{BASE_URL . "public/admin"}}/assets/images/logo/full-white.png" alt="logo">
            </a>
            <div class="back-btn">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="toggle-sidebar">
                <i class="ri-apps-line status_toggle middle sidebar-toggle"></i>
            </div>
        </div>
        <div class="logo-icon-wrapper">
            <a href="/admin">
                <img class="img-fluid main-logo main-white" src="{{BASE_URL . "public/admin"}}/assets/images/logo/logo.png" alt="logo">
                <img class="img-fluid main-logo main-dark" src="{{BASE_URL . "public/admin"}}/assets/images/logo/logo-white.png"
                     alt="logo">
            </a>
        </div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow">
                <i data-feather="arrow-left"></i>
            </div>

            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"></li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="/admin">
                            <i class="ri-home-line"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                            <i class="ri-store-3-line"></i>
                            <span>Sản phẩm</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="/admin/product">Danh sách sản phẩm</a>
                            </li>

                            <li>
                                <a href="/admin/product/store">Thêm mới sản phẩm</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-list">
                        <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                            <i class="ri-list-check-2"></i>
                            <span>Danh mục</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="/admin/category">Danh sách danh mục</a>
                            </li>

                            <li>
                                <a href="/admin/category/store">Add New Category</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-list">
                        <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                            <i class="ri-list-settings-line"></i>
                            <span>Bình luận</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="/admin/category">Danh sách bình luận</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <i class="ri-user-3-line"></i>
                            <span>Người dùng</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="/admin/user">Danh sách người dùng</a>
                            </li>
                            <li>
                                <a href="/admin/user/store">Thêm mới người dùng</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="right-arrow" id="right-arrow">
                <i data-feather="arrow-right"></i>
            </div>
        </nav>
    </div>
</div>
<!-- Page Sidebar Ends-->