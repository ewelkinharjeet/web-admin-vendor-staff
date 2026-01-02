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
<?php
    $productID = base64_decode($_GET['view']);
    $productDetail = $productArray[$productID];
    $imagesArray = explode(",", $productDetail['images']);
    // echo "<pre>";
    // print_r($productDetail);
    // print_r($imagesArray);
    // echo "</pre>";
?>
<body>
    <?php include('inc/header.php');?>

    <main>
        <section class="breadcrumb-section border-top-1 py-5">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-start">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $productDetail['product_name'];?></li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Product Details Section Start -->
        <section class="product-details-section">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-12 col-lg-7">
                        <div class="slider-gallary-wrap overflow-hidden">
                            <div class="swiper gallery-vertical-thumbs slider-thumb-aside">
                                <div class="swiper-wrapper">
                                    <?php foreach($imagesArray as $key => $val){ ?>
                                        <div class="swiper-slide">
                                            <img src="<?php echo $baseUrl;?>assets/images/products/<?php echo $productID;?>/<?php echo $val;?>" alt="image" />
                                        </div>
                                    <?php } ?>
                                                            
                                        
                                    <!-- <div class="swiper-slide">
                                        <img src="https://qriuk.com/html/perka-preview/perka/assets/images/large-products/large-product-01.jpg" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://qriuk.com/html/perka-preview/perka/assets/images/large-products/large-product-02.jpg" alt="image" />
                                    </div>-->
                                </div>
                            </div>
                            <div class="swiper gallery-main slider-gallery-box">
                                <div class="swiper-wrapper">
                                    <?php foreach($imagesArray as $key => $val){ ?>
                                        <div class="swiper-slide">
                                            <img class="w-full" src="<?php echo $baseUrl;?>assets/images/products/<?php echo $productID;?>/<?php echo $val;?>" alt="image" />
                                        </div>
                                    <?php } ?>

                                    <!-- <div class="swiper-slide">
                                        <img class="w-full" src="https://qriuk.com/html/perka-preview/perka/assets/images/large-products/large-product-01.jpg" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="w-full" src="https://qriuk.com/html/perka-preview/perka/assets/images/large-products/large-product-02.jpg" alt="image" />
                                    </div>-->
                                </div>
                                <div class="product-details-button-next product-details-navigation-next"><i class="fa-solid fa-chevron-right"></i></div>
                                <div class="product-details-button-prev product-details-navigation-prev"><i class="fa-solid fa-chevron-left"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="product-item-details-box">
                            <h4 class="product-item-details-title"><?php echo $productDetail['product_name'];?></h4>
                            <div class="product-item-details-rating d-flex align-items-center gap-2 text-black">
                                <div class="product-item-details-rating-list d-flex">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <a href="#">(Review)</a>
                            </div>
                            <div class="product-card-price mt-2">
                                <span class="product-card-old-price"><del><i class="fa-solid fa-indian-rupee-sign"></i><?php echo $productDetail['old_price'];?></del></span>
                                <span class="product-card-regular-price"><i class="fa-solid fa-indian-rupee-sign"></i><?php echo $productDetail['price'];?></span>
                            </div>

                            <p class="product-item-details-description mt-2 fs-16"><?php echo $productDetail['short_description'];?></p>


                            <!-- <form class="product-color-radio-form">
                                <fieldset class="product-color-radio-wrap">
                                    <h6 class="mb-0 title">Color</h6>
                                    <div class="product-color-radio-buttons">
                                        <input type="radio" id="color-lable-black" name="color" value="black" checked>
                                        <label class="color-lable color-lable-black" for="color-lable-black"></label>

                                        <input type="radio" id="color-lable-green" name="color" value="green">
                                        <label class="color-lable color-lable-green" for="color-lable-green"></label>

                                        <input type="radio" id="color-lable-gray" name="color" value="gray">
                                        <label class="color-lable color-lable-gray" for="color-lable-gray"></label>
                                    </div>
                                </fieldset>
                            </form> -->
                            <!-- <form class="product-size-radio-form">
                                <fieldset class="product-size-radio-wrap">
                                    <h6 class="mb-0 title">Size</h6>
                                    <div class="product-size-radio-buttons">
                                        <input type="radio" id="size-lable-s" name="size" value="S" checked>
                                        <label class="size-lable size-lable-s" for="size-lable-s">S</label>

                                        <input type="radio" id="size-lable-m" name="size" value="M">
                                        <label class="size-lable size-lable-m" for="size-lable-m">M</label>

                                        <input type="radio" id="size-lable-l" name="size" value="L">
                                        <label class="size-lable size-lable-l" for="size-lable-l">L</label>
                                    </div>
                                </fieldset>
                            </form> -->

                            <div class="product-item-stock in-stock mb-3">
                                <span class="stock-label visually-hidden">Availability:</span>
                                <span class="product-item-stock-in"><?php echo $productDetail['quantity'];?> In Stock</span>
                            </div>

                            <div class="product-item-action-box d-flex gap-2 align-items-center">
                                <!-- <form action="#" class="product-item-quantity">
                                    <button class="product-item-quantity-decrement product-item-quantity-button" type="button">-</button>
                                    <input type="text" class="product-item-quantity-input" value="1" id="qty-input">
                                    <button class="product-item-quantity-increment product-item-quantity-button" type="button">+</button>
                                </form> -->
                                <button class="btn btn-primary btn-lg">Add to cart</button>
                            </div>
                            
                            <div class="category mt-2">
                                <span class="category-label fs-16">CATEGORIES:</span>
                                <span class="category-value"><a href="#">Girls Prfume</a></span>
                                <span class="category-value"><a href="#">Men's Prfume</a></span>
                                <span class="category-value"><a href="#">Boys's Prfume</a></span>
                                <span class="category-value"><a href="#">kid's Prfume</a></span>
                                
                            </div>

                            <div class="category mt-2">
                                <span class="category-label fs-16">TAGS:</span>
                                <span class="category-value"><a href="#">kid's Prfume</a></span>
                                <span class="category-value"><a href="#">Boys's Prfume</a></span>
                                <span class="category-value"><a href="#">Men's Prfume</a></span>
                                <span class="category-value"><a href="#">Girls Prfume</a></span>
                            </div>
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
                                    <a class="social-share-link pinterest" href="https://www.pinterest.com/" target="_blank" aria-label="pinterest">
                                        <i class="fa-brands fa-pinterest-p"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Details Section End -->

        <!-- product Info Section Start -->
        <section class="product-info-wrapper section-space-ptb">
            <div class="container">
                <div class="nav product-tab-info justify-content-center" role="tablist">
                    <button class="product-tab-info-link active" data-bs-toggle="tab" data-bs-target="#nav-description" type="button" role="tab">Description</button>
                    <button class="product-tab-info-link" data-bs-toggle="tab" data-bs-target="#nav-additional-information" type="button" role="tab">Additional Information</button>
                    <button class="product-tab-info-link" data-bs-toggle="tab" data-bs-target="#nav-reviews" type="button" role="tab">Reviews</button>
                </div>
                <div class="tab-content mt-6">
                    <div class="tab-pane fade show active" id="nav-description" role="tabpanel" tabindex="0">
                        <p class="fs-16"><?php echo $productDetail['description'];?></p>
                    </div>
                    <div class="tab-pane fade" id="nav-additional-information" role="tabpanel" tabindex="0">
                        <table class="additional-info-table">
                            <tbody>
                                <tr class="additional-info-table-tr">
                                    <th class="additional-info-table-item__label">Color</th>
                                    <td class="additional-info-table-item__value">
                                        <p>Other4</p>
                                    </td>
                                </tr>
                                <tr class="additional-info-table-tr">
                                    <th class="additional-info-table-item__label">Size</th>
                                    <td class="additional-info-table-item__value">
                                        <p>Small</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade " id="nav-reviews" role="tabpanel" tabindex="0">
                        <!-- Product review Start -->
                        <ul class="product-review">
                            <li class="product-review-list">
                                <div class="product-review-item">
                                    <div class="product-review-item-avator">
                                        <img src="https://qriuk.com/html/perka-preview/perka/assets/images/avatars/author-avatar.jpg" alt="author">
                                    </div>
                                    <div class="product-review-item-content">
                                        <div class="product-review-item-content-top">
                                            <div class="product-item-details-rating-list d-flex">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <p class="product-review-item-content-meta"><span class="text-black fw-500">Admin</span> - March 14, 2024</p>
                                        </div>
                                        <p class="fs-16">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard
                                            dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                            and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div>
                                </div>
                            </li>
                        </ul> <!-- Product review End -->

                        <!-- Product comments section start -->
                        <div class="product-add-new-comment section-space-pt">
                            <h4 class="product-add-new-comment">Add a review</h4>
                            <p>Your email address will not be published.</p>
                            <div class="comment-form-rating">
                                <div class="d-flex align-items-center gap-2">
                                    <label class="fs-16 fw-6">Your rating</label>
                                    <div class="product-item-details-rating-list d-flex" id="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="comment-form-group">
                                    <label class="comment-form-label" for="comment">Your review&nbsp;<span class="required">*</span></label>
                                    <textarea id="comment" name="comment" required="" class="comment-form-textarea"></textarea>
                                </div>
                                <div class="comment-form-group">
                                    <label class="comment-form-label" for="author">Name&nbsp;<span class="required">*</span></label>
                                    <input class="comment-form-input" id="author" name="author" type="text" required="" />
                                </div>
                                <div class="comment-form-group">
                                    <label class="comment-form-label" for="email">Email&nbsp;<span class="required">*</span></label>
                                    <input class="comment-form-input" id="email" name="email" type="email" required="" />
                                </div>
                                <div class="comment-form-group">
                                    <input id="comment-cookies-consent" name="comment-cookies-consent" type="checkbox" value="yes">
                                    <label for="comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                                </div>
                                <div class="comment-form-group">
                                    <button class="btn btn-primary btn-md">Submit</button>
                                </div>
                            </div>
                        </div><!-- Product Comments Section End -->

                    </div>
                </div>
            </div>
        </section>
        <!-- product Info Section End -->


        <!-- Related Products Section Start -->
        <section class="related-products-section section-space-pb border-bottom-1">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="title">Related Products</h2>
                </div>
                <!-- Swiper Slider Main Start -->
                <div class="swiper product-slider-active position-relative">
                    <!-- Swiper Wrapper Start -->
                    <div class="swiper-wrapper">

                        <?php foreach($productArray as $key => $val){ ?>

                            <!-- Swiper Slide Item Start -->
                        <div class="swiper-slide">
                            <!-- Product Card Start -->
                            <div class="product-card">
                                <div class="product-card-thumb-area">
                                    <a href="<?php echo $baseUrl;?>product-details.php?view=<?php echo base64_encode($val['id']);?>" class="product-card-thumb">
                                        <img class="product-card-thumb-primary" src="<?php echo $baseUrl;?>assets/images/products/<?php echo $val['id'];?>/<?php echo $val['front_image'];?>" alt="<?php echo $val['product_name'];?>" width="340" height="320" loading="lazy">
                                        <span class="product-card-label">Sale</span>
                                    </a>
                                    <!-- <button class="product-card-action-quickview" data-bs-target="#product-modal-active" data-bs-toggle="modal">Quick View</button> -->
                                     <a class="product-card-action-quickview" href="<?php echo $baseUrl;?>product-details.php?view=<?php echo base64_encode($val['id']);?>" class="product-card-thumb">
                                        Quick View
                                    </a>
                                </div>
                                <ul class="product-card-action-links">
                                    <li class="product-card-action-item">
                                        <a class="product-card-action-link" aria-label="wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="product-card-content">
                                    <h4 class="product-card-title">
                                        <a href="<?php echo $baseUrl;?>product-details.php?view=<?php echo base64_encode($val['id']);?>"><?php echo $val['product_name'];?></a>
                                    </h4>
                                    <div class="product-card-price">
                                        <span class="visually-hidden">Price</span>
                                        <span class="product-card-old-price"><i class="fa-solid fa-indian-rupee-sign"></i><?php echo $val['old_price'];?></del></span>
                                        <span class="product-card-regular-price"><i class="fa-solid fa-indian-rupee-sign"></i><?php echo $val['price'];?></span>
                                    </div>

                                </div>
                            </div> <!-- Product Card End -->
                        </div> <!-- Swiper Slide Item End -->



                       <?php }?>

                    </div>

                    <!-- swiper Navigation -->
                    <div class="product-swiper-button-next swiper-navigation-next"><i class="fa-solid fa-chevron-right"></i></div>
                    <div class="product-swiper-button-prev swiper-navigation-prev"><i class="fa-solid fa-chevron-left"></i></div>

                </div>
                <!-- Swiper Slider Main End -->
            </div>
        </section>
        <!-- Related Products Section End -->

    </main>

    <!-- Offcanvas Menu Start -->
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