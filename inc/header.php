<header class="header">
        <!-- Header Top Area Start -->
         <?php /*
        <div class="header-top-area bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col py-2 py-lg-0 d-flex flex-column align-items-center flex-md-row justify-content-center justify-content-md-between">
                        <div class="header-top-area-left-side d-flex">
                            <!-- social Share Area -->
                            <div class="social-share d-flex gap-2 header-top-area-left-side-item">
                                <a class="social-share-link facebook" href="https://www.facebook.com/" target="_blank" aria-label="facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="social-share-link twitter" href="https://twitter.com/" target="_blank" aria-label="twitter">
                                    <i class="fa-brands fa-x-twitter"></i>
                                </a>
                                <a class="social-share-link instagram" href="https://instagram.com/" target="_blank" aria-label="instagram">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a class="social-share-link youtube" href="https://www.youtube.com/" target="_blank" aria-label="youtube">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                                <a class="social-share-link pinterest" href="https://www.pinterest.com/" target="_blank" aria-label="pinterest">
                                    <i class="fa-brands fa-pinterest-p"></i>
                                </a>
                            </div><!-- social Share Area -->

                            <div class="contact-number header-top-area-left-side-item">
                                <a href="tel:+2234567899">
                                    <i class="icon-rt-call-outline"></i>
                                    <span>+2234567899</span>
                                </a>
                            </div>
                        </div>
                        <div class="header-top-area-right-side d-flex">
                            <div class="header-top-area-right-side-item">
                                <a href="#login-form-popup-actiove" data-bs-toggle="modal">
                                    Sign in
                                </a>
                            </div>
                            <ul class="header-top-area-right-side-item top-bar-item-menu">
                                <li>
                                    <a href="#">Languages <i class="fa-solid fa-chevron-down"></i></a>

                                    <ul class="top-bar-item-menu-dropdow">
                                        <li><a href="#" class="active">English</a></li>
                                        <li><a href="#">Germany</a></li>
                                        <li><a href="#">France</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="header-top-area-right-side-item top-bar-item-menu">
                                <li>
                                    <a href="#">Currencies <i class="fa-solid fa-chevron-down"></i></a>
                                    <ul class="top-bar-item-menu-dropdow">
                                        <li><a href="#" class="active">USD</a></li>
                                        <li><a href="#">Euro</a></li>
                                        <li><a href="#">GBP</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> */ ?>
        <!-- Header Top Area End -->

        <!-- Header Bottom Area Start -->
        <div class="hader-bottom-area sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-4 col-lg-2">
                        <!-- Logo Start -->
                        <div class="logo text-center">
                            <a href="<?php echo $baseUrl;?>">
                                <img src="<?php echo $baseUrl;?>assets/images/logo.png" alt="logo">
                            </a>
                        </div><!-- Logo Start -->
                    </div>
                    <div class="col-4 col-lg-8">
                        <!-- Main Menu Area Start -->
                        <nav class="nav-main-menu d-none d-lg-block">
                            <ul class="main-menu">
                                <li class="main-menu-item active">
                                    <a href="<?php echo $baseUrl;?>" class="main-menu-link">Home</a>
                                </li>
                                <li class="main-menu-item active">
                                    <a href="<?php echo $baseUrl;?>about-us.php" class="main-menu-link">About us</a>
                                </li>
                                <!--<li class="main-menu-item active">
                                    <a href="index.html" class="main-menu-link">Home</a>
                                    <ul class="submenu">
                                        <li class="submenu-item"><a href="index.html" class="submenu-link">Home 01</a></li>
                                        <li class="submenu-item"><a href="index-2.html" class="submenu-link">Home 02</a></li>
                                        <li class="submenu-item"><a href="index-3.html" class="submenu-link">Home 03 </a></li>
                                    </ul>
                                </li>
                                 <li class="main-menu-item has-children--mega">
                                    <a href="#" class="main-menu-link">Shop</a>
                                    
                                    <div class="megamenu megamenu--mega">
                                        <ul class="megamenu--mega-inner">
                                            <li class="megamenu-item">
                                                <h6 class="megamenu-title">LAYOUT</h6>
                                                <ul>
                                                    <li><a href="shop.html" class="megamenu-link">No Sidebar Grid</a></li>
                                                    <li><a href="shop-left-sidebar.html" class="megamenu-link">Left Sidebar Shop Grid</a></li>
                                                    <li><a href="shop-right-sidebar.html" class="megamenu-link">Right Sidebar Shop Grid </a></li>
                                                    <li><a href="shop-list-sidebar.html" class="megamenu-link">Right Sidebar Shop List </a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-item">
                                                <h6 class="megamenu-title">FEATURES</h6>
                                                <ul>
                                                    <li><a href="shop-description-on-top.html" class="megamenu-link">Show description <span class="menu-label">On Top</span></a></li>
                                                    <li><a href="shop-description-on-bottom.html" class="megamenu-link">Show description <span class="menu-label">On Bottom</span></a></li>
                                                    <li><a href="shop-no-sidebar-offcanvas.html" class="megamenu-link">No Sidebar Off – Canvas</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-item">
                                                <h6 class="megamenu-title">Shoping Pages</h6>
                                                <ul>
                                                    <li><a href="my-account.html" class="megamenu-link">My account</a></li>
                                                    <li><a href="checkout.html" class="megamenu-link">Checkout</a></li>
                                                    <li><a href="cart.html" class="megamenu-link">Shopping Cart</a></li>
                                                    <li><a href="wishlist.html" class="megamenu-link">Wishlist</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-item">
                                                <a href="shop.html">
                                                    <img src="https://qriuk.com/html/perka-preview/perka/assets/images/banners/menu-banner.png" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li> -->
                                <li class="main-menu-item has-children">
                                    <a href="<?php echo $baseUrl;?>shop.php" class="main-menu-link">Products</a>
                                    <ul class="megamenu megamenu--mega-lavel-2">
                                        <li class="megamenu-item">
                                            <h6 class="megamenu-title">PRODUCTS</h6>
                                            <ul>
                                                <li><a href="<?php echo $baseUrl;?>product-details.php?view=<?php echo base64_encode($productArray[1]['id']);?>" class="megamenu-link"><?php echo $productArray[1]['product_name'];?></a></li>
                                                <li><a href="<?php echo $baseUrl;?>product-details.php?view=<?php echo base64_encode($productArray[2]['id']);?>" class="megamenu-link"><?php echo $productArray[2]['product_name'];?></a></li>
                                                <li><a href="<?php echo $baseUrl;?>product-details.php?view=<?php echo base64_encode($productArray[3]['id']);?>" class="megamenu-link"><?php echo $productArray[3]['product_name'];?></a></li>
                                                <li><a href="<?php echo $baseUrl;?>product-details.php?view=<?php echo base64_encode($productArray[4]['id']);?>" class="megamenu-link"><?php echo $productArray[4]['product_name'];?></a></li>
                                                <li><a href="<?php echo $baseUrl;?>product-details.php?view=<?php echo base64_encode($productArray[5]['id']);?>" class="megamenu-link"><?php echo $productArray[5]['product_name'];?></a></li>
                                            </ul>
                                        </li>
                                        <li class="megamenu-item">
                                            <h6 class="megamenu-title">FEATURE PRODUCTS</h6>
                                            <ul>
                                                <li><a href="<?php echo $baseUrl;?>product-details.php?view=<?php echo base64_encode($productArray[6]['id']);?>" class="megamenu-link"><?php echo $productArray[6]['product_name'];?></a></li>
                                                <li><a href="<?php echo $baseUrl;?>product-details.php?view=<?php echo base64_encode($productArray[7]['id']);?>" class="megamenu-link"><?php echo $productArray[7]['product_name'];?></a></li>
                                                <li><a href="<?php echo $baseUrl;?>product-details.php?view=<?php echo base64_encode($productArray[8]['id']);?>" class="megamenu-link"><?php echo $productArray[8]['product_name'];?></a></li>
                                                <li><a href="<?php echo $baseUrl;?>product-details.php?view=<?php echo base64_encode($productArray[9]['id']);?>" class="megamenu-link"><?php echo $productArray[9]['product_name'];?></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="main-menu-item has-children">
                                    <a href="#" class="main-menu-link">Page</a>
                                    <ul class="megamenu megamenu--mega-lavel-2">
                                        <li class="megamenu-item">
                                            <h6 class="megamenu-title">ACCOUNT PAGE</h6>
                                            <ul>
                                                <li><a href="my-account.html" class="megamenu-link">My account</a></li>
                                                <li><a href="checkout.html" class="megamenu-link">Checkout</a></li>
                                                <li><a href="cart.html" class="megamenu-link">Shopping Cart</a></li>
                                                <li><a href="wishlist.html" class="megamenu-link">Wishlist</a></li>
                                            </ul>
                                        </li>
                                        <li class="megamenu-item">
                                            <h6 class="megamenu-title">OTHER PAGE</h6>
                                            <ul>
                                                <li><a href="about-us.html" class="megamenu-link">About Us</a></li>
                                                <li><a href="contact-us.html" class="megamenu-link">Contact Us</a></li>
                                                <li><a href="store-locator.html" class="megamenu-link">Store Locator</a></li>
                                                <li><a href="404-page.html" class="megamenu-link">404 Page</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="main-menu-item has-children">
                                    <a href="blog.html" class="main-menu-link">Blogs</a>
                                    <ul class="submenu">
                                        <li><a href="blog.html" class="submenu-link">Blog Grid</a></li>
                                        <li><a href="blog-mask.html" class="submenu-link">Blog Mask</a></li>
                                        <li><a href="blog-list.html" class="submenu-link">Blog List</a></li>
                                        <li><a href="blog-left-sidebar.html" class="submenu-link">Blog Left Sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html" class="submenu-link">Blog Right Sidebar</a></li>
                                        <li><a href="blog-no-sidebar.html" class="submenu-link">No Sidebar</a></li>
                                        <li><a href="blog-details.html" class="submenu-link">Blog Post Details</a></li>
                                        <li><a href="blog-details-two.html" class="submenu-link">Blog Post Details Two</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav><!-- Main Menu Area End -->

                        <!-- Mobile Menu Toggole Button Start -->
                        <button class="header-action-item d-lg-none mobile-menu-action" aria-label="Mobile Menu Action Button" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-mobile-menu">
                            <i class="fa-solid fa-bars"></i>
                        </button> <!-- Mobile Menu Toggole Button End -->

                        <!-- Search Button Start -->
                        <button class="header-action-item d-md-none" title="Search" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button> <!-- Search Button End -->
                    </div>
                    
                    <div class="col-4 col-lg-2">
                        <!-- Heaer Action Area Start -->
                        <div class="header-action d-flex justify-content-end">
                            <button class="header-action-item d-none d-md-block" title="Search" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                            <button class="header-action-item" title="Cart Bag" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-cart">
                                <svg width="24" height="24" fill="none" stroke="#333" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 20a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
                                    <path d="M20 20a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                                <span class="header-action-item-count">3</span>
                            </button>
                        </div> <!-- Heaer Action Area End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Bottom Area End -->

    </header>