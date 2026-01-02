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
                <img src="<?php echo $baseUrl;?>assets/images/breadcrumb_bag.jpg" alt="breadcrumb bg" width="1920" height="292">
            </div>
            <div class="breadcrumb-content text-center">
                <h2 class="mb-2">Contact Us</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>

                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- Contact Form Section Start -->
        <section class="contact-form-section section-space-ptb">
            <div class="container">
                <div class="row gy-10">
                    <div class="col-12 col-md-6">
                        <div class="contact-form-title mb-50">
                            <h3 class="contact-form-title">Contact Info</h3>
                            <p class="fs-16">Have a project or an idea you’d like to collaborate with Us? Let’s get in touch!</p>
                        </div>
                        <ul class="contact-info mt-8">
                            <li class="contact-info-item">
                                <div class="contact-info-item-icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="contact-info-item-content">
                                    <span class="contact-info-item-title">Phone: <a href="tel:+91 8968838347">+91 8968838347</a></span>
                                </div>
                            </li>
                            <li class="contact-info-item">
                                <div class="contact-info-item-icon">
                                    <i class="fa-regular fa-envelope"></i>
                                </div>
                                <div class="contact-info-item-content">
                                    <span class="contact-info-item-title"><a href="mailto:contact@myeverythinghere.in">contact@myeverythinghere.in</a></span>
                                </div>
                            </li>
                            <li class="contact-info-item">
                                <div class="contact-info-item-icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="contact-info-item-content">
                                    <span class="contact-info-item-title">Address: B-1 -14463K, Hambran Road Shere Punjab Colony Ludhiana Punjab India 141001</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="contact-form-title mb-50">
                            <h3 class="contact-form-title">Contact Form</h3>
                            <p class="fs-16">* All fields marked with a asterisk are required</p>
                        </div>
                        <form action="#" class="contact-form mt-8">
                            <div class="contact-form-item">
                                <input type="text" class="contact-form-input" placeholder="Name*">
                            </div>
                            <div class="contact-form-item">
                                <input type="email" class="contact-form-input" placeholder="Email*">
                            </div>
                            <div class="contact-form-item">
                                <textarea class="contact-form-input" placeholder="Message*"></textarea>
                            </div>
                            <div class="contact-form-item">
                                <button type="submit" class="btn btn-primary btn-md">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Form Section End -->
        <!-- Contact Us Section Start -->
        <section class="contact-us-section">
            <div class="container-fluid">
                <div class="google-map-area">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d855.730673622499!2d75.8056783!3d30.916784899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a81588778f493%3A0xdac7e81b9d3f62c0!2sShri%20Kali%20Mata%20Temple!5e0!3m2!1sen!2sin!4v1755606801990!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!-- 
                            src="https://www.google.com/maps/embed/v1/place?
                            key=API_KEY
                            &q=Space+Needle,Seattle+WA"> 
                        -->
                </div>
            </div>
        </section>
        <!-- Contact Us Section End -->


    </main>


    <!-- Product Modal Start -->
    <div class="modal fade" id="login-form-popup-actiove" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered sign-in-modal">
            <div class="modal-content">
                <button type="button" class="btn-close position-absolute end-0 p-2" data-bs-dismiss="modal" aria-label="Close"></button>
                <!-- Logo Start -->
                <div class="logo text-center pt-2">
                    <a href="index.html">
                        <img src="assets/images/logo/logo.svg" height="30" width="120" alt="logo">
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
                            <img src="assets/images/products/product-1.jpg" alt="Product Cart One">
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
                            <img src="assets/images/products/product-2.jpg" alt="Product Cart One">
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
                            <img src="assets/images/products/product-3.jpg" alt="Product Cart One">
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