<style>
    
</style>
    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image plr--9 mb-20"
        data-bg="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>/img/bg/9.jpg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">// Welcome to our company</h6>
                            <h1 class="section-title white-color">Product Details</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="<?= site_url(); ?>">Home</a></li>
                                <li>Product Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->
    <!-- SHOP DETAILS AREA START -->
    <div class="ltn__shop-details-area pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__shop-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="ltn__shop-details-img-gallery">
                                    <?php if(isset($productImgData) && $productImgData != "" && $productImgData != NULL) { ?>
                                    <div class="ltn__shop-details-large-img">
                                        <?php $i=1; foreach($productImgData as $prdImgData) { if($i == 1) { ?>
                                        <div class="single-large-img">
                                            <a href="javascript:void(0)" data-rel="lightcase:myCollection">
                                                <img src="<?= $prdImgData->image_url; ?>" alt="Image">
                                            </a>
                                        </div>
                                        <?php } else { ?>
                                        <div class="single-large-img">
                                            <a href="javascript:void(0)" data-rel="lightcase:myCollection">
                                                <img src="<?= $prdImgData->image_url; ?>" alt="Image">
                                            </a>
                                        </div>
                                        <?php } $i++; } ?>
                                    </div>
                                    <div class="ltn__shop-details-small-img slick-arrow-2">
                                        <?php $i=1; foreach($productImgData as $prdImgData) { ?>
                                        <div class="single-small-img">
                                            <img src="<?= $prdImgData->image_url; ?>" alt="Image">
                                        </div>
                                        <?php $i++; } ?>
                                    </div>
                                    <?php } else { ?>
                                        <div class="ltn__shop-details-large-img">
                                            <div class="single-large-img">
                                                <a href="javascript:void(0)" data-rel="lightcase:myCollection">
                                                    <img src="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>/img/car_dummy.jpeg" alt="Image">
                                                </a>
                                            </div>
                                            <div class="single-large-img">
                                                <a href="javascript:void(0)" data-rel="lightcase:myCollection">
                                                    <img src="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>/img/car_dummy.jpeg" alt="Image">
                                                </a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="shop-details-info modal-product-info">
                                    
                                    <h3><?php if(isset($productData->product_name)) { echo $productData->product_name; } else { echo ""; } ?></h3>
                                    <div class="product-price">
                                        <span><?php if(isset($productData->price)) { echo $this->session->userdata('pre_login_data')['appCurrencySymbol'].number_format($productData->price, 2, '.', ','); } else { echo ""; } ?></span>
                                        <!-- <del>$65.00</del> -->
                                    </div>
                                    <input type="hidden" name="product_id" id="product_id" value="<?php if(isset($productData->product_id)) { echo $productData->product_id; } else { echo ""; } ?>" />
                                    <input type="hidden" name="price" id="price" value="<?php if(isset($productData->price)) { echo $productData->price; } else { echo ""; } ?>" />
                                    <hr class="bold-hr">
                                    <div class="ltn__product-details-menu-2">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="theme-btn-1 btn btn-effect-1 p-10" title="Book Now" id="BookNowBtn">
                                                    <span>Book Now</span>
                                                </a>    
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="theme-btn-1 btn btn-effect-1 p-10" title="Free Test Drive" id="TestDriveBtn">
                                                    <span>Free Test Drive</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP DETAILS AREA END -->

    <!-- SHOP DETAILS TAB AREA START -->
    <div class="ltn__shop-details-tab-area pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__shop-details-tab-inner">
                        <div class="ltn__shop-details-tab-menu">
                            <div class="nav">
                                <a class="active show" data-bs-toggle ="tab" href="#liton_tab_details_1_1">Key Specification</a>
                                <a data-bs-toggle ="tab" href="#liton_tab_details_1_2" class="">Inspection Key Report</a>
                                <a data-bs-toggle ="tab" href="#liton_tab_details_1_3" class="">Description</a>
                                <!-- <a data-bs-toggle ="tab" href="#liton_tab_details_1_4" class="">Shipping Policy</a> -->
                                <!-- <a data-bs-toggle ="tab" href="#liton_tab_details_1_5" class="">Size Chart</a> -->
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="liton_tab_details_1_1">
                                <div class="ltn__shop-details-tab-content-inner">
                                    <?php if(isset($productData->specification) && $productData->specification != "" && $productData->specification != NULL) { ?>
                                    <div class="container">
                                        <div class="row">
                                            <?php foreach($productData->specification as $prdSpecify) { 
                                                $icon = 'ic_cooling.png';
                                                if(strpos($prdSpecify->addon_content_name, 'Bags') !== false) {
                                                    $icon = 'airbag.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'ABS') !== false) {
                                                    $icon = 'ic_abs_light.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'Central') !== false) {
                                                    $icon = 'ic_cruise_control.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'Lamps') !== false) {
                                                    $icon = 'ic_headlight.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'Wheels') !== false) {
                                                    $icon = 'ic_wheel.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'Sunroof') !== false) {
                                                    $icon = 'ic_sunroof.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'Brake') !== false) {
                                                    $icon = 'ic_brakes.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'Cylinders') !== false) {
                                                    $icon = 'ic_cylinder.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'Displacement') !== false) {
                                                    $icon = 'ic_engine_power.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'Body') !== false) {
                                                    $icon = 'ic_car_body.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'Sitting') !== false) {
                                                    $icon = 'ic_car_seat.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'Tank') !== false) {
                                                    $icon = 'ic_tank.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'Steering') !== false) {
                                                    $icon = 'ic_steering_wheel.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'Connectivity') !== false) {
                                                    $icon = 'ic_cooling.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'Sensors') !== false) {
                                                    $icon = 'ic_sensor.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'Control') !== false) {
                                                    $icon = 'ic_cruise_control2.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'Power') !== false) {
                                                    $icon = 'ic_engine_power.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'Date') !== false) {
                                                    $icon = 'ic_date.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'Number') !== false) {
                                                    $icon = 'ic_licence_plate.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'Engine') !== false) {
                                                    $icon = 'ic_engine.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'Variant') !== false) {
                                                    $icon = 'ic_cell_variant.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'Color') !== false) {
                                                    $icon = 'ic_km.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'Seats') !== false) {
                                                    $icon = 'ic_car_seat.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'Fuel') !== false) {
                                                    $icon = 'ic_fuel.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'Ownership') !== false) {
                                                    $icon = 'ic_ownershipicon.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'Driven') !== false) {
                                                    $icon = 'ic_km.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'Validity') !== false) {
                                                    $icon = 'ic_date.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'Transmission') !== false) {
                                                    $icon = 'ic_transmission.png';
                                                } else if(strpos($prdSpecify->addon_content_name, 'Insurance') !== false) {
                                                    $icon = 'ic_nsurance.png';
                                                } 

                                                if($prdSpecify->type == 'Specification') {
                                            ?>
                                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                <div class="box">
                                                    <p><img src="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>/img/icon-img/<?= $icon; ?>" alt="Image" width="20" style="color: red;">&nbsp;<strong><?= $prdSpecify->addon_content_name; ?></strong></p>
                                                </div>
                                            </div>
                                            
                                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-1">
                                                <div class="box">
                                                    <p>:</p>
                                                </div>
                                            </div>
                                            
                                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
                                                <div class="box">
                                                    <p><span><?= $prdSpecify->values; ?></span></p>
                                                </div>
                                            </div>
                                            <?php } } ?>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="liton_tab_details_1_2">
                                <div class="ltn__shop-details-tab-content-inner">
                                    <?php if(isset($productData->specification) && $productData->specification != "" && $productData->specification != NULL) { ?>
                                        <div class="container">
                                            <div class="row">
                                                <?php foreach($productData->specification as $prdSpecify) { 
                                                    $icon = 'ic_cooling.png';
                                                    if(strpos($prdSpecify->addon_content_name, 'Bags') !== false) {
                                                        $icon = 'airbag.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'ABS') !== false) {
                                                        $icon = 'ic_abs_light.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'Central') !== false) {
                                                        $icon = 'ic_cruise_control.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'Lamps') !== false) {
                                                        $icon = 'ic_headlight.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'Wheels') !== false) {
                                                        $icon = 'ic_wheel.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'Sunroof') !== false) {
                                                        $icon = 'ic_sunroof.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'Brake') !== false) {
                                                        $icon = 'ic_brakes.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'Cylinders') !== false) {
                                                        $icon = 'ic_cylinder.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'Displacement') !== false) {
                                                        $icon = 'ic_engine_power.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'Body') !== false) {
                                                        $icon = 'ic_car_body.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'Sitting') !== false) {
                                                        $icon = 'ic_car_seat.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'Tank') !== false) {
                                                        $icon = 'ic_tank.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'Steering') !== false) {
                                                        $icon = 'ic_steering_wheel.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'Connectivity') !== false) {
                                                        $icon = 'ic_cooling.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'Sensors') !== false) {
                                                        $icon = 'ic_sensor.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'Control') !== false) {
                                                        $icon = 'ic_cruise_control2.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'Power') !== false) {
                                                        $icon = 'ic_engine_power.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'Date') !== false) {
                                                        $icon = 'ic_date.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'Number') !== false) {
                                                        $icon = 'ic_licence_plate.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'Engine') !== false) {
                                                        $icon = 'ic_engine.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'Variant') !== false) {
                                                        $icon = 'ic_cell_variant.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'Color') !== false) {
                                                        $icon = 'ic_km.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'Seats') !== false) {
                                                        $icon = 'ic_car_seat.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'Fuel') !== false) {
                                                        $icon = 'ic_fuel.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'Ownership') !== false) {
                                                        $icon = 'ic_ownershipicon.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'Driven') !== false) {
                                                        $icon = 'ic_km.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'Validity') !== false) {
                                                        $icon = 'ic_date.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'Transmission') !== false) {
                                                        $icon = 'ic_transmission.png';
                                                    } else if(strpos($prdSpecify->addon_content_name, 'Insurance') !== false) {
                                                        $icon = 'ic_nsurance.png';
                                                    }  else {
                                                        $icon = 'ic_steering_wheel.png';
                                                    } 
                                                    if($prdSpecify->type == 'Inspection') {
                                                ?>
                                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="box">
                                                        <p><img src="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>/img/icon-img/<?= $icon; ?>" alt="Image" width="20" style="color: red;">&nbsp;<strong><?= $prdSpecify->addon_content_name; ?></strong></p>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-1">
                                                    <div class="box">
                                                        <p>:</p>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
                                                    <div class="box">
                                                        <p><span><?= $prdSpecify->values; ?></span></p>
                                                    </div>
                                                </div>
                                                <?php } } ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="liton_tab_details_1_3">
                                <div class="ltn__shop-details-tab-content-inner">
                                    <?php if(isset($productData->extra)) { echo $productData->extra; } else { echo ""; } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP DETAILS TAB AREA END -->

    <!-- MODAL AREA START (Add To Cart Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="book_now_modal" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3 class="text-center">Booking Confirmation</h3>
                                        <div class="modal-product-img w-35">
                                            <ul class="no-bullets">
                                                <li class="mt-0">Brand</li>
                                                <li class="mt-0">Modal</li>
                                                <li class="mt-0">Price</li>
                                                <li class="mt-0">Booking Amount</li>
                                                <!-- <li class="mt-10"><a href="javascript:void(0)" class="theme-btn-1 btn btn-effect-1">Cancel</a></li> -->
                                            </ul>
                                        </div>
                                        <div class="modal-product-img">
                                            <ul class="no-bullets">
                                                <li class="mt-0">-</li>
                                                <li class="mt-0">-</li>
                                                <li class="mt-0">-</li>
                                                <li class="mt-0">-</li>
                                            </ul>
                                        </div>
                                        <div class="modal-product-info">
                                            <ul class="no-bullets">

                                                <li class="mt-0" id="b_productName"><?php if(isset($productData->brand_name)) { echo $productData->brand_name; } else { echo "&nbsp;"; } ?></li>
                                                <li class="mt-0" id="b_modalName"><?php if(isset($productData->product_name)) { echo $productData->product_name; } else { echo "&nbsp;"; } ?></li>
                                                <li class="mt-0" id="b_price"><?php if(isset($productData->price)) { echo $this->session->userdata('pre_login_data')['appCurrencySymbol'].number_format($productData->price, 2, '.', ','); } else { echo "&nbsp;"; } ?></li>
                                                <li class="mt-0" id="b_bookAmount"><?php if(isset($productData->price)) { echo $this->session->userdata('pre_login_data')['appCurrencySymbol'].number_format(($productData->price * 100)/20, 2, '.', ','); } else { echo "&nbsp;"; } ?></li>
                                                <!-- <li class="mt-10"><a href="javascript:void(0)" class="theme-btn-1 btn btn-effect-1">Book Now</a></li> -->
                                            </ul>
                                        </div>
                                        <div class="ltn__product-details-menu-2 text-center">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)" class="theme-btn-2 btn btn-effect-1 p-10" data-bs-dismiss="modal" aria-label="Close">
                                                        <!-- <i class="fas fa-shopping-cart"></i> -->
                                                        <span>Cancel</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" id="UniqueBookNowBtn" class="theme-btn-1 btn btn-effect-1 p-10" title="Book Now">
                                                        Book Now
                                                    </a>    
                                                </li>
                                            </ul>
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
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Add To Cart Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="book_test_drive_modal" tabindex="-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3 class="text-center">Book Your Test Drive</h3>
                                        <div class="container">
                                            <form id="test-drive-form" name="test-drive-form" method="post">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-6 mt-30 mb-10">
                                                        <h4>Product Name : <span class="ltn__secondary-color"><?php if(isset($productData->product_name)) { echo $productData->product_name; } else { echo ""; } ?></span></h4>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-6 mt-30 mb-10">
                                                        <h4>Price : <span class="ltn__secondary-color"><?php if(isset($productData->price)) { echo $this->session->userdata('pre_login_data')['appCurrencySymbol'].number_format($productData->price, 2, '.', ','); } else { echo ""; } ?></span></h4>
                                                    </div>
                                                    <hr class="bold-hr mb-20">
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-12 mb-10">
                                                        <h5>Would you like to test drive this car?</h5>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-12 mb-10 mb-30">
                                                        <div class="radio-btn">
                                                            <label><input type="radio" class="input-radio" name="select_option">&nbsp; Home &nbsp;&nbsp;&nbsp;</label>
                                                            <label><input type="radio" class="input-radio" name="select_option">&nbsp; Company Hub</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-1 mb-10 mb-20">
                                                        <h5>Date</h5>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-1 mb-10 mb-20">
                                                        <h5>:</h5>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mb-10 mb-20">
                                                        <div class="input-item">
                                                            <input type="date" class="form-control" name="date" id="date" placeholder="Select your date">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-1 mb-10 mb-30">
                                                        <h5>Time</h5>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-1 mb-10 mb-30">
                                                        <h5>:</h5>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mb-10 mb-30">
                                                        <select class="nice-select list" name="time" id="time">
                                                            <option>HH:MM</option>
                                                            <option>01:00 - 02:00</option>
                                                            <option>02:00 - 03:00</option>
                                                            <option>03:00 - 04:00</option>
                                                            <option>04:00 - 05:00</option>
                                                            <option>05:00 - 06:00</option>
                                                            <option>06:00 - 07:00</option>
                                                            <option>07:00 - 08:00</option>
                                                            <option>08:00 - 09:00</option>
                                                            <option>09:00 - 10:00</option>
                                                            <option>10:00 - 11:00</option>
                                                            <option>11:00 - 12:00</option>
                                                            <option>12:00 - 13:00</option>
                                                            <option>13:00 - 14:00</option>
                                                            <option>14:00 - 15:00</option>
                                                            <option>15:00 - 16:00</option>
                                                            <option>16:00 - 17:00</option>
                                                            <option>17:00 - 18:00</option>
                                                            <option>18:00 - 19:00</option>
                                                            <option>19:00 - 20:00</option>
                                                            <option>20:00 - 21:00</option>
                                                            <option>21:00 - 22:00</option>
                                                            <option>22:00 - 23:00</option>
                                                            <option>23:00 - 01:00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="ltn__product-details-menu-2 text-center mt-20">
                                            <!-- <ul>
                                                <li> -->
                                                    <button type="submit" class="theme-btn-1 default-btn w-50" id="signUpSubmitBtn">
                                                        Confirm Test Drive
                                                    </button>
                                                    <!-- <a href="javascript:void(0)" id="UniqueTestDriveBtn" class="theme-btn-1 btn btn-effect-1 p-10" title="Confirm Test Drive">
                                                        Confirm Test Drive
                                                    </a>     -->
                                                <!-- </li>
                                            </ul> -->
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
    <!-- MODAL AREA END -->

    <!-- PRODUCT TAB AREA END -->
	<?php $this->load->view(TEMP_1['TEMP_VIEW_PATH'].'/layouts/footer.php'); ?>
    
</body>
</html>