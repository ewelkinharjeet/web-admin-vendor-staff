<?php include('inc/connection.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Perka - Perfume Store HTML5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="Googlebot" content="noindex">
    <meta name="description" content="Floka - Perfume Store HTML5 Template description text">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include('inc/header-css.php'); ?>

</head>

<body>
    <?php include('inc/header.php');?>
    <main>
        <section class="breadcrumb-section">
            <div class="breadcrumb-image">
                <img src="https://qriuk.com/html/perka-preview/perka/assets/images/banners/breadcrumb_bag.jpg" alt="breadcrumb bg" width="1920" height="292">
            </div>
            <div class="breadcrumb-content text-center">
                <h2 class="mb-2">My Accounts</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>

                        <li class="breadcrumb-item active" aria-current="page">My Accounts</li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="my-account-page section-space-ptb border-bottom-1">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="account-dashboard fs-16">

                            <div class="row">
                                <div class="col-md-12 col-lg-2">
                                    <!-- Nav tabs -->
                                    <ul role="tablist" class="nav flex-column dashboard-list">
                                        <li><a href="#dashboard" data-bs-toggle="tab" class="nav-link active" aria-selected="true" role="tab">Dashboard</a></li>
                                        <li> <a href="#orders" data-bs-toggle="tab" class="nav-link" aria-selected="false" tabindex="-1" role="tab">Orders</a></li>
                                        <li><a href="#downloads" data-bs-toggle="tab" class="nav-link" aria-selected="false" tabindex="-1" role="tab">Downloads</a></li>
                                        <li><a href="#address" data-bs-toggle="tab" class="nav-link" aria-selected="false" tabindex="-1" role="tab">Addresses</a></li>
                                        <li><a href="#account-details" data-bs-toggle="tab" class="nav-link" aria-selected="false" tabindex="-1" role="tab">Account details</a></li>
                                        <li><a href="login-register.html" class="nav-link" aria-selected="false" tabindex="-1" role="tab">logout</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-12 col-lg-7">
                                    <!-- Tab panes -->
                                    <div class="tab-content dashboard-content">
                                        <div class="tab-pane active" id="dashboard" role="tabpanel">
                                            <h3>Dashboard </h3>
                                            <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">edit your password and account details.</a></p>
                                        </div>
                                        <div class="tab-pane fade" id="orders" role="tabpanel">
                                            <h3>Orders</h3>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Order</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Total</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>May 20, 2024</td>
                                                            <td>Processing</td>
                                                            <td>$25.00 for 1 item </td>
                                                            <td><a href="cart.html" class="view">view</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>May 20, 2024</td>
                                                            <td>Processing</td>
                                                            <td>$17.00 for 1 item </td>
                                                            <td><a href="cart.html" class="view">view</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="downloads" role="tabpanel">
                                            <h3>Downloads</h3>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Product</th>
                                                            <th>Downloads</th>
                                                            <th>Expires</th>
                                                            <th>Download</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Doan - Free PSD Template</td>
                                                            <td>May 20, 2024</td>
                                                            <td>never</td>
                                                            <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Morni - ecommerce html template</td>
                                                            <td>Sep 11, 2018</td>
                                                            <td>never</td>
                                                            <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="address" role="tabpanel">
                                            <p>The following addresses will be used on the checkout page by default.</p>
                                            <h4 class="billing-address">Billing address</h4>
                                            <a href="#" class="view">edit</a>
                                            <p class="biller-name">Johan Don</p>
                                            <p>UK</p>
                                        </div>
                                        <div class="tab-pane fade" id="account-details" role="tabpanel">
                                            <h3>Account details </h3>
                                            <div class="login">
                                                <div class="login-form-container">
                                                    <div class="account-login-form">
                                                        <form action="#">
                                                            <p>Already have an account? <a href="#">Log in instead!</a></p>
                                                            <label>Social title</label>
                                                            <div class="input-radio">
                                                                <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mr.</span>
                                                                <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mrs.</span>
                                                            </div>
                                                            <div class="account-input-box">
                                                                <label>First Name</label>
                                                                <input type="text" name="first-name">
                                                                <label>Last Name</label>
                                                                <input type="text" name="last-name">
                                                                <label>Email</label>
                                                                <input type="text" name="email-name">
                                                                <label>Password</label>
                                                                <input type="password" name="user-password">
                                                                <label>Birthdate</label>
                                                                <input type="text" placeholder="MM/DD/YYYY" value="" name="birthday">
                                                            </div>
                                                            <div class="example">
                                                                (E.g.: 05/31/1970)
                                                            </div>
                                                            <div class="custom-checkbox">
                                                                <input type="checkbox" value="1" name="optin">
                                                                <label>Receive offers from our partners</label>
                                                            </div>
                                                            <div class="custom-checkbox">
                                                                <input type="checkbox" value="1" name="newsletter">
                                                                <label>Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em></label>
                                                            </div>
                                                            <div class="button-box">
                                                                <button class="btn default-btn" type="submit">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-3">
                                    <div class="dashboard-upper-info">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="d-single-info">
                                                    <p class="user-name">Hello <span>Yourmail@info</span></p>
                                                    <p>(not yourmail@info? <a href="#">Log Out</a>)</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="d-single-info">
                                                    <p>Need Assistance? Customer service at.</p>
                                                    <p>admin@exmple.com.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="d-single-info">
                                                    <p>E-mail them at </p>
                                                    <p>support@yoursite.com</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="d-single-info text-lg-center">
                                                    <a href="cart.html" class="view-cart"><i class="fa fa-cart-plus"></i> View cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Product Modal Start -->
    <div class="modal fade" id="login-form-popup-actiove" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered sign-in-modal">
            <div class="modal-content">
                <button type="button" class="btn-close position-absolute end-0 p-2" data-bs-dismiss="modal" aria-label="Close"></button>
                <!-- Logo Start -->
                <div class="logo text-center pt-2">
                    <a href="index.html">
                        <img src="https://qriuk.com/html/perka-preview/perka/assets/images/logo/logo.svg" height="30" width="120" alt="logo">
                    </a>
                </div><!-- Logo Start -->
                <div class="sign-in-modal-body px-4 pb-10">
                    <div class="modal-box-wrapper">
                        <ul class="nav sign-in-tablist" role="tablist">
                            <li class="sign-in-tab--item nav-item" role="presentation">
                                <a class="sign-in-tab--link active" data-bs-toggle="tab" href="#tab_list_06" role="tab" aria-selected="true">Login</a>
                            </li>
                            <li class="sign-in-tab--item nav-item" role="presentation">
                                <a class="sign-in-tab--link" data-bs-toggle="tab" href="#tab_list_07" role="tab" aria-selected="false" tabindex="-1">Our Register</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab_list_06" role="tabpanel">
                                <form action="#" class="account-form-box max-w-400 mx-auto">
                                    <div class="single-input-gruop">
                                        <label class="single-input-label" for="login-username">Username or email address*</label>
                                        <input class="single-input-fild" type="text" id="login-username">
                                    </div>
                                    <div class="single-input-gruop">
                                        <label class="single-input-label" for="login-password">Password*</label>
                                        <input class="single-input-fild" type="password" id="login-password">
                                    </div>
                                    <div class="checkbox-wrap mt-3 mb-4 d-flex align-items-center justify-content-between fs-16">
                                        <label class="label-for-checkbox d-flex gap-1 align-items-center">
                                            <input class="input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Remember me</span>
                                        </label>
                                        <a href="#">Lost your password?</a>
                                    </div>
                                    <div class="button-box">
                                        <a href="#" class="btn btn-full btn-md btn-primary">Log in</a>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="tab_list_07" role="tabpanel">
                                <form action="#" class="account-form-box  max-w-400 mx-auto">
                                    <div class="single-input-gruop">
                                        <label class="single-input-label" for="register-name">Username*</label>
                                        <input class="single-input-fild" type="text" id="register-name">
                                    </div>
                                    <div class="single-input-gruop">
                                        <label class="single-input-label" for="register-email">Email address*</label>
                                        <input class="single-input-fild" type="email" id="register-email">
                                    </div>
                                    <div class="single-input-gruop">
                                        <label class="single-input-label" for="register-password">Password*</label>
                                        <input class="single-input-fild" type="password" id="register-password">
                                    </div>
                                    <p class="mt-3 text-center">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#" class="privacy-policy-link" target="_blank">privacy policy</a>.</p>
                                    <div class="button-box mt-4">
                                        <button type="submit" class="btn btn-full btn-primary btn-md">Register</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Product Modal End -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-cart">
        <div class="offcanvas-cart-wrap">
            <div class="offcanvas-cart-header">
                <div class="offcanvas-cart-title">
                    YOUR CART
                </div>
                <button type="button" class="btn-close text-end" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="cart-product">
                    <!-- Cart Product Item Start -->
                    <div class="cart-product-item">
                        <a href="product-details.html" class="cart-product-thum">
                            <img src="https://qriuk.com/html/perka-preview/perka/assets/images/products/product-1.jpg" alt="Product Cart One">
                        </a>
                        <div class="cart-product-content">
                            <h6 class="cart-product-content-title">
                                <a href="product-details.html">Augue nisi non neque</a>
                            </h6>
                            <div class="cart-product-content-bottom">
                                <span class="cart-product-content-quantity">1 × </span>
                                <span class="cart-product-content-amount">
                                <bdi>
                                <span class="visually-hidden">Price:</span>
                                <span class="price-currency-symbol">$</span>75.00
                                </bdi>
                                </span>
                            </div>
                        </div>
                        <button class="cart-product-close">×</button>
                    </div> <!-- Cart Product Item End -->
                    <!-- Cart Product Item Start -->
                    <div class="cart-product-item">
                        <a href="product-details.html" class="cart-product-thum">
                            <img src="https://qriuk.com/html/perka-preview/perka/assets/images/products/product-2.jpg" alt="Product Cart One">
                        </a>
                        <div class="cart-product-content">
                            <h6 class="cart-product-content-title">
                                <a href="product-details.html">Sit voluptatem rhoncus</a>
                            </h6>
                            <div class="cart-product-content-bottom">
                                <span class="cart-product-content-quantity">1 × </span>
                                <span class="cart-product-content-amount">
                                <bdi>
                                <span class="visually-hidden">Price:</span>
                                <span class="price-currency-symbol">$</span>79.00
                                </bdi>
                                </span>
                            </div>
                        </div>
                        <button class="cart-product-close">×</button>
                    </div> <!-- Cart Product Item End -->
                    <!-- Cart Product Item Start -->
                    <div class="cart-product-item">
                        <a href="product-details.html" class="cart-product-thum">
                            <img src="https://qriuk.com/html/perka-preview/perka/assets/images/products/product-3.jpg" alt="Product Cart One">
                        </a>
                        <div class="cart-product-content">
                            <h6 class="cart-product-content-title">
                                <a href="product-details.html">LAUDANTIUM ENIM FRINGI</a>
                            </h6>
                            <div class="cart-product-content-bottom">
                                <span class="cart-product-content-quantity">1 × </span>
                                <span class="cart-product-content-amount">
                                <bdi>
                                <span class="visually-hidden">Price:</span>
                                <span class="price-currency-symbol">$</span>79.00
                                </bdi>
                                </span>
                            </div>
                        </div>
                        <button class="cart-product-close">×</button>
                    </div> <!-- Cart Product Item End -->
                </div>
                <div class="offcanvas-cart-footer">
                    <div class="mini-cart-total">
                        <strong class="mini-cart-subtotal">Subtotal</strong>
                        <span class="mini-cart-amount">
                        <bdi>
                            <span class="currency-symbol">$</span>279.00
                        </bdi>
                        </span>
                    </div>
                    <div class="cart-button-action-wrap gap-2 d-flex flex-column">
                        <a href="cart.html" class="btn-outline-dark btn btn-full btn-lg">View Cart</a>
                        <a href="checkout.html" class="btn-outline-dark btn btn-full btn-lg">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="offcanvas offcanvas-top offcanvas-search-area" tabindex="-1" id="offcanvas-search">
        <div class="offcanvas-search-wrap">
            <div class="offcanvas-search-header">
                <div class="offcanvas-search-title">
                    <span class="visually-hidden">Search</span>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-search-body">
                <div class="offcanvas-search-box">
                    <form action="#" class="offcanvas-search-form">
                        <input type="text" placeholder="Search..." class="offcanvas-search-input">
                        <button type="submit" class="offcanvas-search-submit"> <i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <div class="offcanvas-search-content">
                        <div class="offcanvas-search-keywords-list">
                            <p class="offcanvas-search-key-title">Popular searches :</p>
                            <ul class="offcanvas-search-popular d-flex gap-1">
                                <li><a href="#" class="btn btn-xs btn-gray btn-rounde-2">Flower</a></li>
                                <li><a href="#" class="btn btn-xs btn-gray btn-rounde-2">Rose</a></li>
                                <li><a href="#" class="btn btn-xs btn-gray btn-rounde-2">Bouquet</a></li>
                                <li><a href="#" class="btn btn-xs btn-gray btn-rounde-2">Tulips</a></li>
                                <li><a href="#" class="btn btn-xs btn-gray btn-rounde-2">Natural flowers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas-mobile-menu">
        <div class="offcanvas-header">
            <h6>Menu</h6>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <nav class="navbar-mobile-menu">
                <ul class="mobile-menu">
                    <li class="mobile-menu-item">
                        <a href="#" class="mobile-menu-link">
                            Demos
                            <span class="menu-expand"><i class="fa-solid fa-chevron-down"></i></span>
                        </a>
                        <ul class="mega-menu mobile-menu--mega">
                            <li><a href="index.html" class="sub-menu-link">Home 01</a></li>
                            <li><a href="index-2.html" class="sub-menu-link">Home 02</a></li>
                            <li><a href="index-3.html" class="sub-menu-link">Home 03</a></li>
                        </ul>
                    </li>
                    <li class="mobile-menu-item">
                        <a href="#" class="mobile-menu-link">Shop <span class="menu-expand"><i class="fa-solid fa-chevron-down"></i></span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#" class="sub-menu-link">
                                    LAYOUT
                                    <span class="menu-expand"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="shop.html" class="megamenu-link">No Sidebar Grid</a></li>
                                    <li><a href="shop-left-sidebar.html" class="megamenu-link">Left Sidebar Shop Grid</a></li>
                                    <li><a href="shop-right-sidebar.html" class="megamenu-link">Right Sidebar Shop Grid </a></li>
                                    <li><a href="shop-list-sidebar.html" class="megamenu-link">Right Sidebar Shop List </a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="sub-menu-link">
                                    FEATURES
                                    <span class="menu-expand"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="shop-description-on-top.html" class="megamenu-link">Show description <span class="menu-label">On Top</span></a></li>
                                    <li><a href="shop-description-on-bottom.html" class="megamenu-link">Show description <span class="menu-label">On Bottom</span></a></li>
                                    <li><a href="shop-no-sidebar-offcanvas.html" class="megamenu-link">No Sidebar Off – Canvas</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="mobile-menu-item">
                        <a href="#" class="mobile-menu-link">Product <span class="menu-expand"><i class="fa-solid fa-chevron-down"></i></span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#" class="sub-menu-link">
                                    PRODUCT GALLERY
                                    <span class="menu-expand"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="product-details.html" class="megamenu-link">Simple Style</a></li>
                                    <li><a href="product-top-gallay-details.html" class="megamenu-link">Image Top</a></li>
                                    <li><a href="product-details-grid-1-column.html" class="megamenu-link">Grid - 1 column</a></li>
                                    <li><a href="product-details-grid-2-column.html" class="megamenu-link">Grid - 2 column</a></li>
                                    <li><a href="product-details-variation.html" class="megamenu-link">Gallery For Variation</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="sub-menu-link">
                                    FEATURES
                                    <span class="menu-expand"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="product-details-variation-vertical-thumbs.html" class="megamenu-link">Vertical Thumbnails</a></li>
                                    <li><a href="product-details-variable.html" class="megamenu-link">Variable Product</a></li>
                                    <li><a href="product-details-countdown.html" class="megamenu-link">Countdown Product</a></li>
                                    <li><a href="product-details-tab-accordion.html" class="megamenu-link">Tab Accordion</a></li>
                                    <li><a href="product-details-tab-accordion-vertical.html" class="megamenu-link">Tab Accordion Vertical</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="mobile-menu-item">
                        <a href="#" class="mobile-menu-link">Page <span class="menu-expand"><i class="fa-solid fa-chevron-down"></i></span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#" class="sub-menu-link">
                                    ACCOUNT PAGE
                                    <span class="menu-expand"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="my-account.html" class="megamenu-link">My account</a></li>
                                    <li><a href="checkout.html" class="megamenu-link">Checkout</a></li>
                                    <li><a href="cart.html" class="megamenu-link">Shopping Cart</a></li>
                                    <li><a href="wishlist.html" class="megamenu-link">Wishlist</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="sub-menu-link">
                                    OTHER PAGE
                                    <span class="menu-expand"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="about-us.html" class="megamenu-link">About Us</a></li>
                                    <li><a href="contact-us.html" class="megamenu-link">Contact Us</a></li>
                                    <li><a href="store-locator.html" class="megamenu-link">Store Locator</a></li>
                                    <li><a href="404-page.html" class="megamenu-link">404 Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="mobile-menu-item">
                        <a href="#" class="mobile-menu-link">
                            Blogs
                            <span class="menu-expand"><i class="fa-solid fa-chevron-down"></i></span>
                        </a>
                        <ul class="mega-menu mobile-menu--mega">
                            <li><a href="blog.html" class="sub-menu-link">Blog Grid</a></li>
                            <li><a href="blog-mask.html" class="sub-menu-link">Blog Mask</a></li>
                            <li><a href="blog-list.html" class="sub-menu-link">Blog List</a></li>
                            <li><a href="blog-left-sidebar.html" class="sub-menu-link">Blog Left Sidebar</a></li>
                            <li><a href="blog-right-sidebar.html" class="sub-menu-link">Blog Right Sidebar</a></li>
                            <li><a href="blog-no-sidebar.html" class="sub-menu-link">No Sidebar</a></li>
                            <li><a href="blog-details.html" class="sub-menu-link">Blog Post Details</a></li>
                            <li><a href="blog-details-two.html" class="sub-menu-link">Blog Post Details Two</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>



    <!-- Product Modal Start -->
    <div class="modal fade" id="product-modal-active" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered product-quick-view-modal">
            <div class="modal-content">
                <button type="button" class="btn-close position-absolute end-0 p-2" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="product-item-details px-3 py-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="swiper product-quickview-lg-active">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="w-full" src="https://qriuk.com/html/perka-preview/perka/assets/images/large-products/large-product-01.jpg" alt="image" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="w-full" src="https://qriuk.com/html/perka-preview/perka/assets/images/large-products/large-product-02.jpg" alt="image" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="w-full" src="https://qriuk.com/html/perka-preview/perka/assets/images/large-products/large-product-03.jpg" alt="image" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="w-full" src="https://qriuk.com/html/perka-preview/perka/assets/images/large-products/large-product-04.jpg" alt="image" loading="lazy" />
                                    </div>
                                </div>
                                <div class="product-details-button-next product-details-navigation-next"><i class="fa-solid fa-chevron-right"></i></div>
                                <div class="product-details-button-prev product-details-navigation-prev"><i class="fa-solid fa-chevron-left"></i></div>
                            </div>
                            <div class="swiper product-quickview-sm-thum-active mt-2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="https://qriuk.com/html/perka-preview/perka/assets/images/large-products/large-product-01.jpg" alt="image" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://qriuk.com/html/perka-preview/perka/assets/images/large-products/large-product-02.jpg" alt="image" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://qriuk.com/html/perka-preview/perka/assets/images/large-products/large-product-03.jpg" alt="image" loading="lazy" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://qriuk.com/html/perka-preview/perka/assets/images/large-products/large-product-04.jpg" alt="image" loading="lazy" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product-item-details-box">
                                <h4 class="product-item-details-title">Rendering sofa isolated</h4>
                                <div class="product-item-details-rating d-flex align-items-center gap-2 text-black">
                                    <div class="product-item-details-rating-list d-flex">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <a href="#" class="fs-16">(1 customer review)</a>
                                </div>

                                <div class="product-card-price mt-2">
                                    <span class="product-card-old-price"><del>$60.00</del></span>
                                    <span class="product-card-regular-price">$50.00</span>
                                </div>

                                <p class="product-item-details-description mt-2 fs-16">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...</p>

                                <div class="product-item-stock in-stock mb-3">
                                    <span class="stock-label visually-hidden">Availability:</span>
                                    <span class="product-item-stock-in">994 In Stock</span>
                                </div>

                                <div class="product-item-action-box d-flex gap-2 align-items-center">
                                    <form action="#" class="product-item-quantity">
                                        <button class="product-item-quantity-decrement product-item-quantity-button" type="button">-</button>
                                        <input type="text" class="product-item-quantity-input" value="1">
                                        <button class="product-item-quantity-increment product-item-quantity-button" type="button">+</button>
                                    </form>
                                    <button class="btn btn-primary btn-lg">Add to cart</button>
                                </div>
                                <a href="wishlist.html" class="product-item-wishlist-action mt-3">
                                    <i class="fa-regular fa-heart"></i><span>Add to wishlist</span>
                                </a>
                                <div class="social-share-wrap d-flex gap-1 mt-3">
                                    <p class="fs-16">SHARE: </p>
                                    <div class="social-share social-share-in-color d-flex gap-2">
                                        <a class="social-share-link facebook" href="https://www.facebook.com/" target="_blank" aria-label="facebook">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a class="social-share-link twitter" href="https://twitter.com/" target="_blank" aria-label="twitter">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                        <a class="social-share-link instagram" href="https://instagram.com/" target="_blank" aria-label="instagram">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Product Modal End -->

    <?php include('inc/footer.php');?>
    <?php include('inc/footer-js.php');?>
</body>

</html>