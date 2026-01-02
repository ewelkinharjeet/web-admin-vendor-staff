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
        <section class="breadcrumb-section border-top-1 py-5">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-start">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">checkout</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- Checkout Section Start -->
        <section class="checkout-section section-space-ptb border-bottom-1">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="coupon-area">
                            <!-- coupon-accordion start -->
                            <div class="coupon-accordion">
                                <div class="coupon-form-toggle">
                                    <p>Have a coupon?
                                        <span class="coupon-toggle-text" id="showcoupon">Click here to enter your code</span>
                                    </p>
                                </div>
                                <form action="#" class="coupon-form-content">
                                    <p class="fs-16">If you have a coupon code, please apply it below.</p>
                                    <div class="coupon-form-box">
                                        <input class="coupon-input" type="text" placeholder="Coupon code">
                                        <button type="submit" class="btn btn-md btn-primary flex-grow flex-shrink" name="apply-coupon" value="Apply coupon">Apply Coupon</button>
                                    </div>
                                </form>
                            </div>
                            <!-- coupon-accordion end -->
                        </div>
                    </div>
                </div>
                <!-- checkout-details-wrapper start -->
                <div class="checkout-details-wrapper">
                    <div class="row gy-8 gx-lg-10">
                        <div class="col-lg-6 col-md-6">
                            <!-- billing-details-wrap start -->
                            <div class="billing-details-wrap">
                                <form action="#">
                                    <h4 class="shoping-checkboxt-title">BILLING DETAILS</h4>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="checkout-form-row">
                                                <label class="checkout-form-label">First name <span class="required">*</span></label>
                                                <input class="checkout-form-input" type="text" name="First name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="checkout-form-row">
                                                <label class="checkout-form-label">Username or email <span class="required">*</span></label>
                                                <input class="checkout-form-input" type="text" name="Last name">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="checkout-form-row">
                                                <label class="checkout-form-label">Company name</label>
                                                <input class="checkout-form-input" type="text" name="email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="checkout-form-row">
                                                <label class="checkout-form-label">Country <span class="required">*</span></label>
                                                <div class="checkout-form-select-box">
                                                    <select class="checkout-form-select">
                                                        <option>Select Country...</option>
                                                        <option>Albania</option>
                                                        <option>Angola</option>
                                                        <option>Argentina</option>
                                                        <option>Austria</option>
                                                        <option>Azerbaijan</option>
                                                        <option>UK</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="checkout-form-row">
                                                <label class="checkout-form-label">Street address <span class="required">*</span></label>
                                                <input class="checkout-form-input" type="text" placeholder="House number and street name" name="address">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="checkout-form-row">
                                                <input class="checkout-form-input" type="text" placeholder="Apartment, suite, unit etc. (optional)" name="address">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="checkout-form-row">
                                                <label class="checkout-form-label">Town / City <span class="required">*</span></label>
                                                <input class="checkout-form-input" type="text" name="address">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="checkout-form-row">
                                                <label class="checkout-form-label">State / County</label>
                                                <input class="checkout-form-input" type="text" name="address">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="checkout-form-row">
                                                <label class="checkout-form-label">Postcode / ZIP <span class="required">*</span></label>
                                                <input class="checkout-form-input" type="text" name="address">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="checkout-form-row">
                                                <label class="checkout-form-label">Phone</label>
                                                <input class="checkout-form-input" type="text" name="address">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="checkout-form-row">
                                                <label class="checkout-form-label">Email address <span class="required">*</span></label>
                                                <input class="checkout-form-input" type="text" name="Email address ">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="checkout-box-wrap mt-4">
                                                <label class="checkout-form-label">
                                                    <input type="checkbox" id="create-account-box"> Create an account?
                                                </label>
                                                <div class="checkout-account-create checkout-form-row">
                                                    <p class="fs-16">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                                    <label class="checkout-form-label">Create account password <span>*</span></label>
                                                    <input class="checkout-form-input" type="password" class="input-text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="checkout-box-wrap mt-4">
                                                <label id="chekout-box-2" class="fs-16">
                                                    <input type="checkbox"> Ship to a different address?
                                                </label>

                                                <div class="ship-box-info">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="checkout-form-row">
                                                                <label class="checkout-form-label">First name <span class="required">*</span></label>
                                                                <input class="checkout-form-input" type="text" name="First name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="checkout-form-row">
                                                                <label class="checkout-form-label">Username or email <span class="required">*</span></label>
                                                                <input class="checkout-form-input" type="text" name="Last name ">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="checkout-form-row">
                                                                <label class="checkout-form-label">Company name</label>
                                                                <input class="checkout-form-input" type="text" name="email">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="checkout-form-row">
                                                                <label class="checkout-form-label">Country <span class="required">*</span></label>
                                                                <div class="checkout-form-select-box">
                                                                    <select class="checkout-form-select">
                                                                        <option>Select Country...</option>
                                                                        <option>Albania</option>
                                                                        <option>Angola</option>
                                                                        <option>Argentina</option>
                                                                        <option>Austria</option>
                                                                        <option>Azerbaijan</option>
                                                                        <option>UK</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="checkout-form-row">
                                                                <label class="checkout-form-label">Street address <span class="required">*</span></label>
                                                                <input class="checkout-form-input" type="text" placeholder="House number and street name" name="address">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="checkout-form-row">
                                                                <input class="checkout-form-input" type="text" placeholder="Apartment, suite, unit etc. (optional)" name="address">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="checkout-form-row">
                                                                <label class="checkout-form-label">Town / City <span class="required">*</span></label>
                                                                <input class="checkout-form-input" type="text" name="address">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="checkout-form-row">
                                                                <label class="checkout-form-label">State / County</label>
                                                                <input class="checkout-form-input" type="text" name="address">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="checkout-form-row">
                                                                <label class="checkout-form-label">Postcode / ZIP <span class="required">*</span></label>
                                                                <input class="checkout-form-input" type="text" name="address">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="checkout-form-row">
                                                <label class="checkout-form-label">Order notes</label>
                                                <textarea class="checkout-form-textarea" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- billing-details-wrap end -->
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <!-- Order Summary-wrapper start -->
                            <div class="order-summary">
                                <h4 class="shoping-checkboxt-title mb-4 text-center">YOUR ORDER</h4>
                                <!-- your-order-wrap start-->
                                <div class="order-summary-wrap">
                                    <!-- order-summary-table start -->
                                    <div class="order-summary-table table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="product-name">Product</th>
                                                    <th class="product-total">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        Vestibulum suscipit <strong class="product-quantity"> × 1</strong>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount">£165.00</span>
                                                    </td>
                                                </tr>
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        Vestibulum magna <strong class="product-quantity"> × 1</strong>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount">£50.00</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr class="cart-subtotal">
                                                    <th>Cart Subtotal</th>
                                                    <td><span class="amount">£215.00</span></td>
                                                </tr>
                                                <tr class="shipping">
                                                    <th>Shipping</th>
                                                    <td>
                                                        <ul>
                                                            <li class="d-flex gap-3 align-items-center">
                                                                <input id="flat-rate" class="checkout-form-radio" type="radio" name="shipping-type">
                                                                <label class="checkout-form-label mb-0" for="flat-rate">
                                                                    Flat Rate: <span class="amount">£7.00</span>
                                                                </label>
                                                            </li>
                                                            <li class="d-flex gap-3 align-items-center">
                                                                <input id="free-shipping" class="checkout-form-radio" type="radio" name="shipping-type">
                                                                <label class="checkout-form-label mb-0" for="free-shipping">Free Shipping</label>
                                                            </li>
                                                            <li></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Order Total</th>
                                                    <td><strong><span class="amount">£215.00</span></strong>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- your-order-table end -->

                                    <!-- your-order-wrap end -->
                                    <div class="payment-method mt-6">
                                        <div class="payment-method-accordion">
                                            <div class="accordion" id="paymentMethod">
                                                <div class="payment-method-accordion-card active">
                                                    <div class="payment-method-accordion-card-header">
                                                        <button data-bs-toggle="collapse" data-bs-target="#checkPayments" aria-expanded="true" class="">Check payments</button>
                                                    </div>
                                                    <div id="checkPayments" class="collapse show" data-bs-parent="#paymentMethod">
                                                        <div class="payment-method-accordion-card-body">
                                                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="payment-method-accordion-card">
                                                    <div class="payment-method-accordion-card-header">
                                                        <button data-bs-toggle="collapse" data-bs-target="#cashkPayments" class="collapsed" aria-expanded="false">Cash on delivery </button>
                                                    </div>
                                                    <div id="cashkPayments" class="collapse" data-bs-parent="#paymentMethod">
                                                        <div class="payment-method-accordion-card-body">
                                                            <p>Pay with cash upon delivery.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="payment-method-accordion-card">
                                                    <div class="payment-method-accordion-card-header">
                                                        <button data-bs-toggle="collapse" data-bs-target="#payPalPayments" class="collapsed" aria-expanded="false">PayPal <img src="https://qriuk.com/html/perka-preview/perka/assets/images/others/pay-2.jpg" alt=""></button>
                                                    </div>
                                                    <div id="payPalPayments" class="collapse" data-bs-parent="#paymentMethod">
                                                        <div class="payment-method-accordion-card-body">
                                                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center border-top-1 pt-4">
                                            <p class="payment-note fs-16">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                                            <button class="btn btn-primary btn-full btn-md">Place Order</button>
                                        </div>
                                    </div>
                                    <!-- your-order-wrapper start -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- checkout-details-wrapper end -->
            </div>
        </section>
        <!-- Checkout Section End -->
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
    <?php include('inc/footer.php');?>
    <?php include('inc/footer-js.php');?>
</body>

</html>