<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/elehaus/elehaus/shop-wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 08:39:27 GMT -->

<?php include_once(__DIR__ . '/../partical/header.php'); ?>

<body>
    <!--== Wrapper Start ==-->
    <div class="wrapper">
        <!--== Start Header Wrapper ==-->
        <header class="header-wrapper">
            <div class="header-top d-none d-md-block">
                <div class="container">
                    <div class="header-top-area">
                        <div class="header-top-info">
                            <a href="shop.html">World Wide Completely Free Returns and Free Shipping</a>
                        </div>
                        <div class="header-top-action-area">
                            <div class="header-info-dropdown">
                                <button type="button" class="btn-info dropdown-toggle" id="dropdownLang"
                                    data-bs-toggle="dropdown" aria-expanded="false">English</button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownLang">
                                    <li class="dropdown-item active">English</li>
                                    <li class="dropdown-item">Français</li>
                                </ul>
                            </div>
                            <div class="header-info-dropdown">
                                <button type="button" class="btn-info dropdown-toggle" id="dropdownCurrency"
                                    data-bs-toggle="dropdown" aria-expanded="false">USD</button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownCurrency">
                                    <li class="dropdown-item active">USD</li>
                                    <li class="dropdown-item">EUR</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle">
                <div class="container">
                    <div class="row align-items-center justify-content-between align-items-center">
                        <div class="col-auto">
                            <div class="header-logo-area">
                                <a href="index.html">
                                    <img class="logo-main" src="<?= BASE_URL ?>/public/images/logo.png" width="182" height="31"
                                        alt="Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="header-action d-flex justify-content-end align-items-center">
                                <form class="header-search-box d-none d-lg-block">
                                    <input class="form-control" type="text" id="search" placeholder="Search Products">
                                    <button type="submit" class="btn-src">
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </form>
                                <button class="btn-search-menu d-lg-none" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch">
                                    <i class="search-icon icon-magnifier"></i>
                                </button>
                                <a href="login-register.html" class="header-action-account d-none d-lg-block">Login /
                                    SignUp</a>
                                <a href="login-register.html" class="header-action-user d-lg-none">
                                    <i class="icon icon-user"></i>
                                </a>
                                <a class="header-action-wishlist" href="shop-wishlist.html">
                                    <i class="icon-heart"></i>
                                </a>
                                <button class="header-action-cart" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasWithCartSidebar" aria-controls="offcanvasWithCartSidebar">
                                    <i class="cart-icon icon-handbag"></i>
                                    <span class="cart-count">01</span>
                                </button>
                                <button class="btn-menu d-lg-none" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-area d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="vertical-menu">
                                <button class="vmenu-btn"><i class="icon fa fa-list-ul"></i> All Departments <i
                                        class="icon fa fa-angle-down"></i></button>
                                <ul class="vmenu-content vmenu-content-none">
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="<?= BASE_URL ?>/public/images/icons/vm1.png"
                                                    alt="Icon"></span> Headphone</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="<?= BASE_URL ?>/public/images/icons/vm2.png"
                                                    alt="Icon"></span> Video Game</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="<?= BASE_URL ?>/public/images/icons/vm3.png"
                                                    alt="Icon"></span> Protable Speakers
                                        </a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="<?= BASE_URL ?>/public/images/icons/vm4.png"
                                                    alt="Icon"></span> Digital Camera
                                        </a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="<?= BASE_URL ?>/public/images/icons/vm5.png"
                                                    alt="Icon"></span> Gadgets</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="<?= BASE_URL ?>/public/images/icons/vm6.png"
                                                    alt="Icon"></span> Home Appliances
                                        </a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="<?= BASE_URL ?>/public/images/icons/vm7.png"
                                                    alt="Icon"></span> Audio Record
                                        </a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="<?= BASE_URL ?>/public/images/icons/vm8.png"
                                                    alt="Icon"></span> Computer/Laptop
                                        </a>
                                    </li>
                                </ul>
                                <!-- menu content -->
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block ms-auto me-n3 pe-0">
                            <div class="header-navigation ps-6">
                                <?php include_once(__DIR__ . '/../partical/menu.php'); ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="header-action">
                                <button class="btn-search-menu d-md-none" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch">
                                    <span class="search-icon">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.5 11H11.71L11.43 10.73C12.41 9.59 13 8.11 13 6.5C13 2.91 10.09 0 6.5 0C2.91 0 0 2.91 0 6.5C0 10.09 2.91 13 6.5 13C8.11 13 9.59 12.41 10.73 11.43L11 11.71V12.5L16 17.49L17.49 16L12.5 11ZM6.5 11C4.01 11 2 8.99 2 6.5C2 4.01 4.01 2 6.5 2C8.99 2 11 4.01 11 6.5C11 8.99 8.99 11 6.5 11Z" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--== End Header Wrapper ==-->










        <main class="main-content">

            <!--== Start Page Header Area Wrapper ==-->
            <div class="page-header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="page-header-content">
                                <h2 class="page-header-title">Wishlist</h2>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home //</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="page-header-thumb">
                                <img src="<?= BASE_URL ?>/public/images/photos/page-title.png" alt="Image-HasTech" width="546"
                                    height="281">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Page Header Area Wrapper ==-->

            <!--== Start Wishlist Area Wrapper ==-->
            <div class="wishlist-page-area section-space">
                <div class="container">
                    <div class="table-responsive">
                        <table class="wishlist-table-content">
                            <thead>
                                <tr>
                                    <th class="width-remove"></th>
                                    <th class="width-thumbnail"></th>
                                    <th class="width-name">Product</th>
                                    <th class="width-price"> Unit price </th>
                                    <th class="width-stock-status"> Stock status </th>
                                    <th class="width-wishlist-cart"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-remove"><a href="shop-wishlist.html">×</a></td>
                                    <td class="product-thumbnail">
                                        <a href="shop-single-product.html"><img src="<?= BASE_URL ?>/public/images/shop/w1.png"
                                                alt="Image" width="96" height="96"></a>
                                    </td>
                                    <td class="product-name">
                                        <h5><a href="shop-single-product.html">D-Phone Android</a></h5>
                                    </td>
                                    <td class="product-price"><span class="amount">$120.00</span></td>
                                    <td class="stock-status">
                                        <span><i class="fa fa-check"></i> In Stock</span>
                                    </td>
                                    <td class="wishlist-cart"><a href="shop-cart.html">Add to Cart</a></td>
                                </tr>
                                <tr>
                                    <td class="product-remove"><a href="shop-wishlist.html">×</a></td>
                                    <td class="product-thumbnail">
                                        <a href="shop-single-product.html"><img src="<?= BASE_URL ?>/public/images/shop/w2.png"
                                                alt="Image" width="96" height="96"></a>
                                    </td>
                                    <td class="product-name">
                                        <h5><a href="shop-single-product.html">Digital Lens Camera</a></h5>
                                    </td>
                                    <td class="product-price"><span class="amount">$120.00</span></td>
                                    <td class="stock-status">
                                        <span><i class="fa fa-check"></i> In Stock</span>
                                    </td>
                                    <td class="wishlist-cart"><a href="shop-cart.html">Add to Cart</a></td>
                                </tr>
                                <tr>
                                    <td class="product-remove"><a href="shop-wishlist.html">×</a></td>
                                    <td class="product-thumbnail">
                                        <a href="shop-single-product.html"><img src="<?= BASE_URL ?>/public/images/shop/w3.png"
                                                alt="Image" width="96" height="96"></a>
                                    </td>
                                    <td class="product-name">
                                        <h5><a href="shop-single-product.html">Headphone Supersonic</a></h5>
                                    </td>
                                    <td class="product-price"><span class="amount">$120.00</span></td>
                                    <td class="stock-status">
                                        <span><i class="fa fa-check"></i> In Stock</span>
                                    </td>
                                    <td class="wishlist-cart"><a href="shop-cart.html">Add to Cart</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--== End Wishlist Area Wrapper ==-->
        </main>
    </div> 
</body>
<!--== Start Footer Area Wrapper ==-->
<?php include_once(__DIR__ . '/../partical/footer.php'); ?>
<!--== End Footer Area Wrapper ==-->
</html>