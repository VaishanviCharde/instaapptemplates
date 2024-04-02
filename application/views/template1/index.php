    <!-- SLIDER AREA START (slider-3) -->
    <?php if(isset(TEMP_1['BANNER']) && TEMP_1['BANNER'] != NULL && TEMP_1['BANNER'] != "") { ?>
    <div class="ltn__slider-area ltn__slider-3  section-bg-1">
        <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
            <?php foreach(TEMP_1['BANNER'] as $banner) { 
                if(isset($banner['isImgLeft']) && $banner['isImgLeft'] != NULL && $banner['isImgLeft'] != "" && $banner['isImgLeft'] != 'true') { ?>
                    <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3">
                        <div class="ltn__slide-item-inner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 align-self-center">
                                        <div class="slide-item-info">
                                            <div class="slide-item-info-inner ltn__slide-animation">
                                                <div class="slide-video mb-50">
                                                    &nbsp;
                                                </div>
                                                <?php if(isset($banner['head']) && $banner['head'] != NULL && $banner['head'] != "") { ?>
                                                    <h1 class="slide-title animated "><?php if(isset($banner['head']) && $banner['head'] != NULL && $banner['head'] != "") { echo $banner['head']; } else { echo ""; } ?></h1>
                                                <?php } ?>
                                                <?php if(isset($banner['sub-title']) && $banner['sub-title'] != NULL && $banner['sub-title'] != "") { ?>
                                                    <h6 class="slide-sub-title animated"><?php if(isset($banner['sub-title']) && $banner['sub-title'] != NULL && $banner['sub-title'] != "") { echo $banner['sub-title']; } else { echo ""; } ?></h6>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <?php if(isset($banner['img']) && $banner['img'] != NULL && $banner['img'] != "") { ?>
                                            <div class="slide-item-img">
                                                <img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/img-slide/<?php if(isset($banner['img']) && $banner['img'] != NULL && $banner['img'] != "") { echo $banner['img']; } else { echo ""; } ?>" alt="<?php if(isset($banner['alt']) && $banner['alt'] != NULL && $banner['alt'] != "") { echo $banner['alt']; } else { echo ""; } ?>">
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="about"></div>
                    </div>
                <?php } else { ?>
                <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3">
                    <div class="ltn__slide-item-inner text-right text-end">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 align-self-center">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <?php if(isset($banner['sub-title']) && $banner['sub-title'] != NULL && $banner['sub-title'] != "") { ?>
                                                <h6 class="slide-sub-title ltn__secondary-color animated"><?php if(isset($banner['sub-title']) && $banner['sub-title'] != NULL && $banner['sub-title'] != "") { echo $banner['sub-title']; } else { echo ""; } ?></h6>
                                            <?php } ?>
                                            <?php if(isset($banner['head']) && $banner['head'] != NULL && $banner['head'] != "") { ?>
                                                <h1 class="slide-title animated "><?php if(isset($banner['head']) && $banner['head'] != NULL && $banner['head'] != "") { echo $banner['head']; } else { echo ""; } ?></h1>
                                            <?php } ?>
                                            <?php if(isset($banner['desc']) && $banner['desc'] != NULL && $banner['desc'] != "") { ?>
                                                <div class="slide-brief animated">
                                                    <p><?php if(isset($banner['desc']) && $banner['desc'] != NULL && $banner['desc'] != "") { echo $banner['desc']; } else { echo ""; } ?></p>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php if(isset($banner['img']) && $banner['img'] != NULL && $banner['img'] != "") { ?>
                                        <div class="slide-item-img slide-img-left">
                                            <img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/img-slide/<?php if(isset($banner['img']) && $banner['img'] != NULL && $banner['img'] != "") { echo $banner['img']; } else { echo ""; } ?>" alt="<?php if(isset($banner['alt']) && $banner['alt'] != NULL && $banner['alt'] != "") { echo $banner['alt']; } else { echo ""; } ?>">
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="about"></div>
                </div>
            <?php } } ?>
        </div>
    </div>
    <?php } ?>

    <!-- SLIDER AREA END -->

    <!-- ABOUT US AREA START -->
    <?php if(isset(TEMP_1['ABOUT']) && TEMP_1['ABOUT'] != NULL && TEMP_1['ABOUT'] != "") {  ?>
    <div class="ltn__why-choose-us-area pt-50 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="why-choose-us-info-wrap">
                        <div class="about-us-info-wrap">
                            <div class="section-title-area ltn__section-title-2">
                                <?php if(isset(TEMP_1['ABOUT']['sub-title']) && TEMP_1['ABOUT']['sub-title'] != NULL && TEMP_1['ABOUT']['sub-title'] != "") { ?>
                                    <h1 class="ltn__section-title-2"><?php echo TEMP_1['ABOUT']['sub-title']; ?></h1>
                                <?php } ?>
                                <?php if(isset(TEMP_1['ABOUT']['head']) && TEMP_1['ABOUT']['head'] != NULL && TEMP_1['ABOUT']['head'] != "") { ?>
                                    <p><?php echo TEMP_1['ABOUT']['head']; ?></p>
                                <?php } ?>
                            </div>
                            <?php if(isset(TEMP_1['ABOUT']['desc']) && TEMP_1['ABOUT']['desc'] != NULL && TEMP_1['ABOUT']['desc'] != "") { ?>
                            <p><?php echo TEMP_1['ABOUT']['desc']; ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php if(isset(TEMP_1['ABOUT']['img']) && TEMP_1['ABOUT']['img'] != NULL && TEMP_1['ABOUT']['img'] != "") {  ?>
                <div class="col-lg-6">
                    <div class="about-us-img-wrap about-img-left">
                        <?php foreach(TEMP_1['ABOUT']['img'] as $aboutImg) {  ?>
                            <img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/about/<?= $aboutImg['img']; ?>" alt="<?= $aboutImg['alt']; ?>">
                        <?php } ?>
                        <?php if(isset(TEMP_1['DETAILS']['EXP_YEAR']) && TEMP_1['DETAILS']['EXP_YEAR'] != NULL && TEMP_1['DETAILS']['EXP_YEAR'] != "") {  ?>
                        <div class="about-us-img-info about-us-img-info-2">
                            <div class="about-us-img-info-inner">
                                <h1><?php echo TEMP_1['DETAILS']['EXP_YEAR']; ?><span>+</span></h1>
                                <h6>Years Experience</h6>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- ABOUT US AREA END -->

    <!-- PRODUCT BRAND AREA START (product-item-3) -->
    <div class="ltn__product-tab-area ltn__product-gutter pt-40 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php if(isset(TEMP_1['TEMP_INDUSTRY_TYPE']) && TEMP_1['TEMP_INDUSTRY_TYPE'] !== NULL && TEMP_1['TEMP_INDUSTRY_TYPE'] != "") { ?>
                        <div class="section-title-area ltn__section-title-2 text-center">
                            <h1 class="section-title"><?php if(TEMP_1['TEMP_INDUSTRY_TYPE'] == 'restaurant') { ?> Top Categories <?php } else { ?> Our Brands <?php } ?></h1>
                        </div>
                    <?php } ?>
                    <?php if(isset($categoryData) && $categoryData !== NULL && $categoryData != "") { ?>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_tab_3_1">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                    <?php foreach($categoryData as $catData) { ?>
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img pt-15 pb-30">
                                                    <a href="<?= site_url('product/'.base64_encode($myToken.'_apptoken_'.$catData->category_id)); ?>"><img src="<?php if(isset($catData->category_url) && $catData->category_url !== NULL && $catData->category_url != "") { echo $catData->category_url; } else { echo ""; } ?>" class="cat-imgs" alt="#"></a>
                                                </div>
                                                <div class="product-info">
                                                    <h2><a href="<?= site_url('product/'.base64_encode($myToken.'_apptoken_'.$catData->category_id)); ?>"><?php if(isset($catData->category) && $catData->category !== NULL && $catData->category != "") { echo $catData->category; } else { echo ""; } ?></a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT BRAND AREA START -->

     <!-- PRODUCT TAB AREA START (product-item-3) -->
     <div class="ltn__product-tab-area ltn__product-gutter pt-50 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2">
                        <!-- <h6 class="section-subtitle ltn__secondary-color">// Cars</h6> -->
                        <h1 class="section-title">Car Best Deals</h1>
                    </div>
                    <div class="ltn__tab-menu ltn__tab-menu-top-right text-uppercase">
                        <div class="nav">
                            <a class="active show" data-bs-toggle ="tab" href="#liton_tab_2_1">Top Cars</a>
                            <a data-bs-toggle ="tab" href="#liton_tab_2_2" class="">Hot Deals</a>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_tab_2_1">
                            <?php if(isset($topProductsData) && $topProductsData !== NULL && $topProductsData != "") { ?>
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                    <?php foreach($topProductsData as $prodData) { ?>
                                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="<?= site_url('product-details/'.base64_encode($myToken.'_apptoken_'.$prodData->product_id)); ?>"><img src="<?= $prodData->product_url; ?>" alt="Product Image"></a>
                                                    <!-- <div class="product-badge">
                                                        <ul>
                                                            <li class="soldout-badge">New</li>
                                                        </ul>
                                                    </div> -->
                                                    <?php /*<div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void(0)" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <!-- <li>
                                                                <a href="javascript:void(0)" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li> -->
                                                            <li>
                                                                <a href="javascript:void(0)" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>*/ ?>
                                                </div>
                                                <div class="product-info">
                                                    <h2 class="product-title mt-10 mb-10"><a href="<?= site_url('product-details/'.base64_encode($myToken.'_apptoken_'.$prodData->product_id)); ?>"><?= $prodData->product_name; ?></a></h2>
                                                    <div class="product-price text-center">
                                                        <span><?= $this->session->userdata('pre_login_data')['appCurrencySymbol']; ?><?= number_format($prodData->price, 2, '.', ','); ?></span>
                                                        <!-- <del>$68,000</del> -->
                                                    </div>
                                                    <div class="product-info-brief">
                                                        <ul>
                                                            <li class="text-black">
                                                                <i class="fas fa-road"></i><?php if(isset($prodData->product_specification->{'KM Driven'})) { echo $prodData->product_specification->{'KM Driven'}; } else { echo "-"; } ?>
                                                            </li>
                                                            <li class="text-black">
                                                                <i class="fas fa-car"></i><?php if(isset($prodData->product_specification->{'Registration Date'})) { echo $prodData->product_specification->{'Registration Date'}; } else { echo "-"; } ?>
                                                            </li>
                                                            <li class="text-black">
                                                                <i class="fas fa-user"></i><?php if(isset($prodData->product_specification->{'Ownership'})) { echo $prodData->product_specification->{'Ownership'}; } else { echo "-"; } ?>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_2_2">
                            <?php if(isset($hotProductsData) && $hotProductsData !== NULL && $hotProductsData != "") { ?>
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                    <?php foreach($hotProductsData as $prodData) { ?>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="javascript:void(0)"><img src="<?= $prodData->product_url; ?>" alt="Product Image"></a>
                                                <!-- <div class="product-badge">
                                                    <ul>
                                                        <li class="soldout-badge">New</li>
                                                    </ul>
                                                </div> -->
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <!-- <li>
                                                            <a href="javascript:void(0)" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li> -->
                                                        <li>
                                                            <a href="javascript:void(0)" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title mt-10 mb-10"><a href="javascript:void(0)"><?= $prodData->product_name; ?></a></h2>
                                                <div class="product-price text-center">
                                                    <span><?= $this->session->userdata('pre_login_data')['appCurrencySymbol']; ?><?= number_format($prodData->price, 2, '.', ','); ?></span></span>
                                                    <!-- <del>$42,000</del> -->
                                                </div>
                                                <div class="product-info-brief">
                                                    <ul>
                                                        <li class="text-black">
                                                            <i class="fas fa-road"></i><?php if(isset($prodData->product_specification->{'KM Driven'})) { echo $prodData->product_specification->{'KM Driven'}; } else { echo "-"; } ?>
                                                        </li>
                                                        <li class="text-black">
                                                            <i class="fas fa-car"></i><?php if(isset($prodData->product_specification->{'Registration Date'})) { echo $prodData->product_specification->{'Registration Date'}; } else { echo "-"; } ?>
                                                        </li>
                                                        <li class="text-black">
                                                            <i class="fas fa-user"></i><?php if(isset($prodData->product_specification->{'Ownership'})) { echo $prodData->product_specification->{'Ownership'}; } else { echo "-"; } ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT TAB AREA END -->
	<?php $this->load->view(TEMPNAME.'/layouts/footer.php'); ?>
</body>
</html>