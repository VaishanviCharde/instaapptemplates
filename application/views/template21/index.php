<?php
    $segment = $this->uri->segment(1);
?>
    <!-- Utilize Cart Menu Start -->
    <!-- <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <span class="ltn__utilize-menu-title">Cart</span>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="mini-cart-product-area ltn__scrollbar">
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/product/1.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Red Hot Tomato</a></h6>
                        <span class="mini-cart-quantity">1 x $65.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/product/2.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Vegetables Juices</a></h6>
                        <span class="mini-cart-quantity">1 x $85.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/product/3.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Orange Sliced Mix</a></h6>
                        <span class="mini-cart-quantity">1 x $92.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/product/4.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Orange Fresh Juice</a></h6>
                        <span class="mini-cart-quantity">1 x $68.00</span>
                    </div>
                </div>
            </div>
            <div class="mini-cart-footer">
                <div class="mini-cart-sub-total">
                    <h5>Subtotal: <span>$310.00</span></h5>
                </div>
                <div class="btn-wrapper">
                    <a href="<?= site_url('cart'); ?>" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                    <a href="<?= site_url('cart'); ?>" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                </div>
                <p>Free Shipping on All Orders Over $100!</p>
            </div>

        </div>
    </div> -->
    <!-- Utilize Cart Menu End -->

    <!-- SLIDER AREA START (slider-3) -->
    <div class="ltn__slider-area ltn__slider-3---  section-bg-1--- mt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <!-- CATEGORY-MENU-LIST START -->
                    <div class="ltn__category-menu-wrap">
                        <?php if(isset(TEMP_1['TEMP_INDUSTRY_TYPE']) && TEMP_1['TEMP_INDUSTRY_TYPE'] !== NULL && TEMP_1['TEMP_INDUSTRY_TYPE'] != "") { ?>
                            <div class="ltn__category-menu-title">
                                <h2 class="section-bg-1 text-color-white---"><?php if(TEMP_1['TEMP_INDUSTRY_TYPE'] == 'restaurant') { ?>Categories <?php } else { ?> Our Categories <?php } ?></h2>
                            </div>
                        <?php } ?>
                        <?php if(isset($categoryData) && $categoryData !== NULL && $categoryData != "") { ?>
                            <div class="ltn__category-menu-toggle ltn__one-line-active">
                                <ul>
                                    <?php foreach($categoryData as $catData) { ?>
                                        <!-- Submenu Column - unlimited -->
                                        <li class="ltn__category-menu-item ltn__category-menu-drop">
                                            <a href="<?= site_url('product/'.base64_encode($myToken.'_apptoken_'.$catData->category_id)); ?>"><i class="icon-shopping-bags"></i><?php if(isset($catData->category) && $catData->category !== NULL && $catData->category != "") { echo $catData->category; } else { echo ""; } ?></a>
                                            <!-- <ul class="ltn__category-submenu ltn__category-column-5">
                                                <li class="ltn__category-submenu-title ltn__category-menu-drop"><a href="#">Handbags</a>
                                                    <ul class="ltn__category-submenu-children">
                                                        <li><a href="#">Clutches Clutches Clutches Clutches </a></li>
                                                        <li><a href="#">Cross Body</a></li>
                                                        <li><a href="#">Satchels</a></li>
                                                        <li><a href="#">Sholuder</a></li>
                                                        <li><a href="#">Toter</a></li>
                                                    </ul>
                                                </li>
                                                <li class="ltn__category-submenu-title ltn__category-menu-drop"><a href="#">Fresh Meat</a>
                                                    <ul class="ltn__category-submenu-children">
                                                        <li><a href="#">Clutches</a></li>
                                                        <li><a href="#">Cross Body</a></li>
                                                        <li><a href="#">Satchels</a></li>
                                                        <li><a href="#">Sholuder</a></li>
                                                        <li><a href="#">Toter</a></li>
                                                    </ul>
                                                </li>
                                                <li class="ltn__category-submenu-title ltn__category-menu-drop"><a href="#">Fish and Seafood</a>
                                                    <ul class="ltn__category-submenu-children">
                                                        <li><a href="#">Clutches</a></li>
                                                        <li><a href="#">Cross Body</a></li>
                                                        <li><a href="#">Satchels</a></li>
                                                        <li><a href="#">Sholuder</a></li>
                                                        <li><a href="#">Toter</a></li>
                                                    </ul>
                                                </li>
                                                <li class="ltn__category-submenu-title ltn__category-menu-drop"><a href="#">Handbags</a>
                                                    <ul class="ltn__category-submenu-children">
                                                        <li><a href="#">Clutches</a></li>
                                                        <li><a href="#">Cross Body</a></li>
                                                        <li><a href="#">Satchels</a></li>
                                                        <li><a href="#">Sholuder</a></li>
                                                        <li><a href="#">Toter</a></li>
                                                    </ul>
                                                </li>
                                                <li class="ltn__category-submenu-title ltn__category-menu-drop"><a href="#">Handbags</a>
                                                    <ul class="ltn__category-submenu-children">
                                                        <li><a href="#">Clutches</a></li>
                                                        <li><a href="#">Cross Body</a></li>
                                                        <li><a href="#">Satchels</a></li>
                                                        <li><a href="#">Sholuder</a></li>
                                                        <li><a href="#">Toter</a></li>
                                                    </ul>
                                                </li>
                                                <li class="ltn__category-submenu-title ltn__category-menu-drop"><a href="#">Handbags</a>
                                                    <ul class="ltn__category-submenu-children">
                                                        <li><a href="#">Clutches</a></li>
                                                        <li><a href="#">Cross Body</a></li>
                                                        <li><a href="#">Satchels</a></li>
                                                        <li><a href="#">Sholuder</a></li>
                                                        <li><a href="#">Toter</a></li>
                                                    </ul>
                                                </li>
                                                <li class="ltn__category-submenu-title ltn__category-menu-drop"><a href="#">Handbags</a>
                                                    <ul class="ltn__category-submenu-children">
                                                        <li><a href="#">Clutches</a></li>
                                                        <li><a href="#">Cross Body</a></li>
                                                        <li><a href="#">Satchels</a></li>
                                                        <li><a href="#">Sholuder</a></li>
                                                        <li><a href="#">Toter</a></li>
                                                    </ul>
                                                </li>
                                                <li class="ltn__category-submenu-title ltn__category-menu-drop"><a href="#">Handbags</a>
                                                    <ul class="ltn__category-submenu-children">
                                                        <li><a href="#">Clutches</a></li>
                                                        <li><a href="#">Cross Body</a></li>
                                                        <li><a href="#">Satchels</a></li>
                                                        <li><a href="#">Sholuder</a></li>
                                                        <li><a href="#">Toter</a></li>
                                                    </ul>
                                                </li>
                                            </ul> -->
                                        </li>
                                        <!-- Single menu end -->
                                    <?php }  ?>
                                </ul>
                            </div>
                        <?php } ?>

                    </div>
                    <!-- END CATEGORY-MENU-LIST -->
                </div>
                <div class="col-lg-9">
                    <div class="ltn__slide-active-2 slick-slide-arrow-1 slick-slide-dots-1">
                        <!-- ltn__slide-item -->
                        <div class="ltn__slide-item ltn__slide-item-10 section-bg-1 bg-image" data-bg="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/slider/61.jpg">
                            <div class="ltn__slide-item-inner">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-7 col-sm-7 align-self-center">
                                            <div class="slide-item-info">
                                                <div class="slide-item-info-inner ltn__slide-animation">
                                                    <h5 class="slide-sub-title ltn__secondary-color animated text-uppercase">Up To 50% Off Today Only!</h5>
                                                    <h1 class="slide-title  animated">Tasty & Healthy <br>  Organic Food</h1>
                                                    <div class="slide-brief animated d-none">
                                                        <p>Predictive analytics is drastically changing the real estate industry. In the past, providing data for quick</p>
                                                    </div>
                                                    <div class="btn-wrapper  animated">
                                                        <a href="<?= site_url('product'); ?>" class="theme-btn-1 btn btn-effect-1 text-uppercase">Shop now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 align-self-center">
                                            <div class="slide-item-img">
                                                <!-- <a href="<?= site_url('product'); ?>"><img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/product/1.png" alt="Image"></a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ltn__slide-item -->
                        <div class="ltn__slide-item ltn__slide-item-10 section-bg-1 bg-image" data-bg="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/slider/62.jpg">
                            <div class="ltn__slide-item-inner">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-7 col-sm-7 align-self-center">
                                            <div class="slide-item-info">
                                                <div class="slide-item-info-inner ltn__slide-animation">
                                                    <h4 class="slide-sub-title ltn__secondary-color animated text-uppercase">Welcome to our shop</h4>
                                                    <h1 class="slide-title  animated">Tasty & Healthy <br>  Organic Food</h1>
                                                    <div class="slide-brief animated d-none">
                                                        <p>Predictive analytics is drastically changing the real estate industry. In the past, providing data for quick</p>
                                                    </div>
                                                    <div class="btn-wrapper  animated">
                                                        <a href="<?= site_url('product'); ?>" class="theme-btn-1 btn btn-effect-1 text-uppercase">Shop now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 align-self-center">
                                            <div class="slide-item-img">
                                                <!-- <a href="<?= site_url('product'); ?>"><img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/slider/62.jpg" alt="Image"></a> -->
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
    </div>
    <!-- SLIDER AREA END -->

    <!-- FEATURE AREA START ( Feature - 3) -->
    <div class="ltn__feature-area mt-35 mt--65--- mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__feature-item-box-wrap ltn__feature-item-box-wrap-2 ltn__border section-bg-6">
                        <div class="ltn__feature-item ltn__feature-item-8">
                            <div class="ltn__feature-icon">
                                <img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/icons/svg/8-trolley.svg" alt="#">
                            </div>
                            <div class="ltn__feature-info">
                                <h4>Free shipping</h4>
                                <p>On all orders over $49.00</p>
                            </div>
                        </div>
                        <div class="ltn__feature-item ltn__feature-item-8">
                            <div class="ltn__feature-icon">
                                <img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/icons/svg/9-money.svg" alt="#">
                            </div>
                            <div class="ltn__feature-info">
                                <h4>15 days returns</h4>
                                <p>Moneyback guarantee</p>
                            </div>
                        </div>
                        <div class="ltn__feature-item ltn__feature-item-8">
                            <div class="ltn__feature-icon">
                                <img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/icons/svg/10-credit-card.svg" alt="#">
                            </div>
                            <div class="ltn__feature-info">
                                <h4>Secure checkout</h4>
                                <p>Protected by Paypal</p>
                            </div>
                        </div>
                        <div class="ltn__feature-item ltn__feature-item-8">
                            <div class="ltn__feature-icon">
                                <img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/icons/svg/11-gift-card.svg" alt="#">
                            </div>
                            <div class="ltn__feature-info">
                                <h4>Offer & gift here</h4>
                                <p>On all orders over</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURE AREA END -->
    
    <!-- CATEGORY AREA START -->
    <?php if(isset($categoryData) && $categoryData !== NULL && $categoryData != "") { ?>
    <div class="ltn__category-area section-bg-1 pt-110 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h1 class="section-title white-color---">Top Catagories</h1>
                        <!-- <p class="white-color---">A highly efficient slip-ring scanner for today's diagnostic requirements.</p> -->
                    </div>
                </div>
            </div>
            <div class="row ltn__category-slider-active slick-arrow-1">
                <?php foreach($categoryData as $catData) { ?>
                    <div class="col-12">
                        <div class="ltn__category-item ltn__category-item-3 text-center">
                            <div class="ltn__category-item-img">
                                <a href="<?= site_url('product/'.base64_encode($myToken.'_apptoken_'.$catData->category_id)); ?>">
                                    <img src="<?php if(isset($catData->category_url) && $catData->category_url !== NULL && $catData->category_url != "") { echo $catData->category_url; } else { echo ""; } ?>" loading="lazy" alt="Image" class="cat-img">
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h5><a href="<?= site_url('product/'.base64_encode($myToken.'_apptoken_'.$catData->category_id)); ?>"><?php if(isset($catData->category) && $catData->category !== NULL && $catData->category != "") { echo $catData->category; } else { echo ""; } ?></a></h5>
                                <!-- <h6>(235 item)</h6> -->
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- CATEGORY AREA END -->

    <!-- BANNER AREA START -->
    <div class="ltn__banner-area mt-120">
        <div class="container">
            <div class="row ltn__custom-gutter--- justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="<?= site_url('product'); ?>"><img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/banner/1.jpg" alt="Banner Image"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="<?= site_url('product'); ?>"><img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/banner/2.jpg" alt="Banner Image"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="<?= site_url('product'); ?>"><img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/banner/1.jpg" alt="Banner Image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNER AREA END -->

    <!-- SMALL PRODUCT LIST AREA START -->
    <div class="ltn__small-product-list-area pt-115 pb-90 d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center---">
                        <h6 class="section-subtitle ltn__secondary-color">//  Products</h6>
                        <h1 class="section-title">Body Parts</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- small-product-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ltn__small-product-item">
                        <div class="small-product-item-img">
                            <a href="<?= site_url('product-details'); ?>"><img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/product/1.png" alt="Image"></a>
                        </div>
                        <div class="small-product-item-info">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="<?= site_url('product-details'); ?>">Red Hot Tomato</a></h2>
                            <div class="product-price">
                                <span>$129.00</span>
                                <del>$140.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- small-product-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ltn__small-product-item">
                        <div class="small-product-item-img">
                            <a href="<?= site_url('product-details'); ?>"><img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/product/2.png" alt="Image"></a>
                        </div>
                        <div class="small-product-item-info">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="<?= site_url('product-details'); ?>">Vegetables Juices</a></h2>
                            <div class="product-price">
                                <span>$145.00</span>
                                <del>$155.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- small-product-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ltn__small-product-item">
                        <div class="small-product-item-img">
                            <a href="<?= site_url('product-details'); ?>"><img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/product/3.png" alt="Image"></a>
                        </div>
                        <div class="small-product-item-info">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="<?= site_url('product-details'); ?>">Orange Fresh Juice</a></h2>
                            <div class="product-price">
                                
                                <span>$135.00</span>
                                <del>$145.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- small-product-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ltn__small-product-item">
                        <div class="small-product-item-img">
                            <a href="<?= site_url('product-details'); ?>"><img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/product/4.png" alt="Image"></a>
                        </div>
                        <div class="small-product-item-info">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="<?= site_url('product-details'); ?>">Poltry Farm Meat</a></h2>
                            <div class="product-price">
                                
                                <span>$149.00</span>
                                <del>$162.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- small-product-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ltn__small-product-item">
                        <div class="small-product-item-img">
                            <a href="<?= site_url('product-details'); ?>"><img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/product/5.png" alt="Image"></a>
                        </div>
                        <div class="small-product-item-info">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="<?= site_url('product-details'); ?>">Coil Spring Kit</a></h2>
                            <div class="product-price">
                                
                                <span>$140.00</span>
                                <del>$150.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- small-product-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ltn__small-product-item">
                        <div class="small-product-item-img">
                            <a href="<?= site_url('product-details'); ?>"><img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/product/6.png" alt="Image"></a>
                        </div>
                        <div class="small-product-item-info">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="<?= site_url('product-details'); ?>">Orange Sliced Mix</a></h2>
                            <div class="product-price">
                                
                                <span>$110.00</span>
                                <del>$120.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- small-product-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ltn__small-product-item">
                        <div class="small-product-item-img">
                            <a href="<?= site_url('product-details'); ?>"><img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/product/7.png" alt="Image"></a>
                        </div>
                        <div class="small-product-item-info">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="<?= site_url('product-details'); ?>">Vegetables Juices</a></h2>
                            <div class="product-price">
                                
                                <span>$130.00</span>
                                <del>$150.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- small-product-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ltn__small-product-item">
                        <div class="small-product-item-img">
                            <a href="<?= site_url('product-details'); ?>"><img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/product/8.png" alt="Image"></a>
                        </div>
                        <div class="small-product-item-info">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="<?= site_url('product-details'); ?>">Orange Fresh Juice</a></h2>
                            <div class="product-price">
                                
                                <span>$180.00</span>
                                <del>$190.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- small-product-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ltn__small-product-item">
                        <div class="small-product-item-img">
                            <a href="<?= site_url('product-details'); ?>"><img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/product/9.png" alt="Image"></a>
                        </div>
                        <div class="small-product-item-info">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="<?= site_url('product-details'); ?>">Orange Sliced Mix</a></h2>
                            <div class="product-price">
                                
                                <span>$125.00</span>
                                <del>$145.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </div>
    <!-- SMALL PRODUCT LIST AREA END -->

	<?php $this->load->view(TEMPNAME.'/layouts/footer.php'); ?>
</body>
</html>