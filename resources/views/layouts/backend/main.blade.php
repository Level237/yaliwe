<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="admin/imgs/theme/favicon.svg" />
        <!-- Template CSS -->
        <link href="admin/css/main.css?v=1.1" rel="stylesheet" type="text/css" />
        <title>@yield('title')</title>
    </head>

    <body>
        <div class="screen-overlay"></div>
        <aside class="navbar-aside" id="offcanvas_aside">
            <div class="aside-top">
                <a href="index.html" class="brand-wrap">
                    <img src="admin/imgs/theme/logo.svg" class="logo" alt="Nest Dashboard" />
                </a>
                <div>
                    <button class="btn btn-icon btn-aside-minimize"><i class="text-muted material-icons md-menu_open"></i></button>
                </div>
            </div>
            <nav>
                <ul class="menu-aside">
                    <li class="menu-item active">
                        <a class="menu-link" href="index.html">
                            <i class="icon material-icons md-home"></i>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>
                    <li class="menu-item has-submenu">
                        <a class="menu-link" href="page-products-list.html">
                            <i class="icon material-icons md-shopping_bag"></i>
                            <span class="text">Products</span>
                        </a>
                        <div class="submenu">
                            <a href="page-products-list.html">Product List</a>
                            <a href="page-products-grid.html">Product grid</a>
                            <a href="page-products-grid-2.html">Product grid 2</a>
                            <a href="page-categories.html">Categories</a>
                        </div>
                    </li>
                    <li class="menu-item has-submenu">
                        <a class="menu-link" href="page-orders-1.html">
                            <i class="icon material-icons md-shopping_cart"></i>
                            <span class="text">Orders</span>
                        </a>
                        <div class="submenu">
                            <a href="page-orders-1.html">Order list 1</a>
                            <a href="page-orders-2.html">Order list 2</a>
                            <a href="page-orders-detail.html">Order detail</a>
                        </div>
                    </li>
                    <li class="menu-item has-submenu">
                        <a class="menu-link" href="page-sellers-cards.html">
                            <i class="icon material-icons md-store"></i>
                            <span class="text">Sellers</span>
                        </a>
                        <div class="submenu">
                            <a href="page-sellers-cards.html">Sellers cards</a>
                            <a href="page-sellers-list.html">Sellers list</a>
                            <a href="page-seller-detail.html">Seller profile</a>
                        </div>
                    </li>
                    <li class="menu-item has-submenu">
                        <a class="menu-link" href="page-form-product-1.html">
                            <i class="icon material-icons md-add_box"></i>
                            <span class="text">Add product</span>
                        </a>
                        <div class="submenu">
                            <a href="page-form-product-1.html">Add product 1</a>
                            <a href="page-form-product-2.html">Add product 2</a>
                            <a href="page-form-product-3.html">Add product 3</a>
                            <a href="page-form-product-4.html">Add product 4</a>
                        </div>
                    </li>
                    <li class="menu-item has-submenu">
                        <a class="menu-link" href="page-transactions-1.html">
                            <i class="icon material-icons md-monetization_on"></i>
                            <span class="text">Transactions</span>
                        </a>
                        <div class="submenu">
                            <a href="page-transactions-1.html">Transaction 1</a>
                            <a href="page-transactions-2.html">Transaction 2</a>
                        </div>
                    </li>
                    <li class="menu-item has-submenu">
                        <a class="menu-link" href="#">
                            <i class="icon material-icons md-person"></i>
                            <span class="text">Account</span>
                        </a>
                        <div class="submenu">
                            <a href="page-account-login.html">User login</a>
                            <a href="page-account-register.html">User registration</a>
                            <a href="page-error-404.html">Error 404</a>
                        </div>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="page-reviews.html">
                            <i class="icon material-icons md-comment"></i>
                            <span class="text">Reviews</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="page-brands.html"> <i class="icon material-icons md-stars"></i> <span class="text">Brands</span> </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" disabled href="#">
                            <i class="icon material-icons md-pie_chart"></i>
                            <span class="text">Statistics</span>
                        </a>
                    </li>
                </ul>
                <hr />
                <ul class="menu-aside">
                    <li class="menu-item has-submenu">
                        <a class="menu-link" href="#">
                            <i class="icon material-icons md-settings"></i>
                            <span class="text">Settings</span>
                        </a>
                        <div class="submenu">
                            <a href="page-settings-1.html">Setting sample 1</a>
                            <a href="page-settings-2.html">Setting sample 2</a>
                        </div>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="page-blank.html">
                            <i class="icon material-icons md-local_offer"></i>
                            <span class="text"> Starter page </span>
                        </a>
                    </li>
                </ul>
                <br />
                <br />
            </nav>
        </aside>
        <main class="main-wrap">
        @include('layouts.backend.header')

        @yield('content')

        @include('layouts.backend.footer')
        </main>
        <script src="admin/js/vendors/jquery-3.6.0.min.js"></script>
        <script src="admin/js/vendors/bootstrap.bundle.min.js"></script>
        <script src="admin/js/vendors/select2.min.js"></script>
        <script src="admin/js/vendors/perfect-scrollbar.js"></script>
        <script src="admin/js/vendors/jquery.fullscreen.min.js"></script>
        <script src="admin/js/vendors/chart.js"></script>
        <!-- Main Script -->
        <script src="admin/js/main.js?v=1.1" type="text/javascript"></script>
        <script src="admin/js/custom-chart.js" type="text/javascript"></script>
    </body>
</html>
