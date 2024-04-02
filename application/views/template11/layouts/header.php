<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php if(isset(TEMP_1['HEAD']['TEMP_TITLE']) && TEMP_1['HEAD']['TEMP_TITLE'] != NULL && TEMP_1['HEAD']['TEMP_TITLE'] != "") { echo TEMP_1['HEAD']['TEMP_TITLE']; } else { echo ""; } ?></title>
    <meta name="description" content="<?php if(isset(TEMP_1['HEAD']['TEMP_MDES']) && TEMP_1['HEAD']['TEMP_MDES'] != NULL && TEMP_1['HEAD']['TEMP_MDES'] != "") { echo TEMP_1['HEAD']['TEMP_MDES']; } else { echo ""; } ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <?php if(isset(TEMP_1['HEAD']['TEMP_FAVICON']) && TEMP_1['HEAD']['TEMP_FAVICON'] != NULL && TEMP_1['HEAD']['TEMP_FAVICON'] != "") { ?>
        <link rel="shortcut icon" href="<?php if(isset(TEMP_1['HEAD']['TEMP_FAVICON']) && TEMP_1['HEAD']['TEMP_FAVICON'] != NULL && TEMP_1['HEAD']['TEMP_FAVICON'] != "") { echo TEMP_1['HEAD']['TEMP_FAVICON']; } else { echo ""; } ?>" type="image/x-icon" />
    <?php } ?>
    <!-- Font Icons css -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/css/responsive.css">
    <!-- Switcher css -->
    <link href="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/switcher/css/switcher.css" rel="stylesheet" id="switcher-css" media="all">
    <!-- Sliver Box CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/css/silverBox.css" />
    <!-- intlTelInput -->
    <link href="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/css/intlTelInput.min.css" rel="stylesheet" media="all"/>
</head>

<body>

<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-5) -->
    <header class="ltn__header-area ltn__header-5 ltn__header-transparent-- gradient-color-4---">
        <div class="ltn__header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <?php if(isset(TEMP_1['DETAILS']['TEMP_ADD']) && TEMP_1['DETAILS']['TEMP_ADD'] != NULL && TEMP_1['DETAILS']['TEMP_ADD'] != "") { ?>
                                    <li><a href="javascript:void(0)"><i class="icon-placeholder"></i> <?php if(isset(TEMP_1['DETAILS']['TEMP_ADD']) && TEMP_1['DETAILS']['TEMP_ADD'] != NULL && TEMP_1['DETAILS']['TEMP_ADD'] != "") { echo TEMP_1['DETAILS']['TEMP_ADD']; } else { echo ""; } ?></a></li>
                                <?php } ?>
                                <?php if(isset(TEMP_1['DETAILS']['TEMP_EMAIL']) && TEMP_1['DETAILS']['TEMP_EMAIL'] != NULL && TEMP_1['DETAILS']['TEMP_EMAIL'] != "") { ?>
                                    <li><a href="mailto:<?php if(isset(TEMP_1['DETAILS']['TEMP_EMAIL']) && TEMP_1['DETAILS']['TEMP_EMAIL'] != NULL && TEMP_1['DETAILS']['TEMP_EMAIL'] != "") { echo TEMP_1['DETAILS']['TEMP_EMAIL']; } else { echo ""; } ?>"><i class="icon-mail"></i> <?php if(isset(TEMP_1['DETAILS']['TEMP_EMAIL']) && TEMP_1['DETAILS']['TEMP_EMAIL'] != NULL && TEMP_1['DETAILS']['TEMP_EMAIL'] != "") { echo TEMP_1['DETAILS']['TEMP_EMAIL']; } else { echo ""; } ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="top-bar-right text-right text-end">
                            <div class="ltn__top-bar-menu">
                                <ul>
                                    <?php if(isset(TEMP_1['DETAILS']['TEMP_MOB']) && TEMP_1['DETAILS']['TEMP_MOB'] != NULL && TEMP_1['DETAILS']['TEMP_MOB'] != "") { ?>
                                        <li><a href="tel:<?php if(isset(TEMP_1['DETAILS']['TEMP_MOB']) && TEMP_1['DETAILS']['TEMP_MOB'] != NULL && TEMP_1['DETAILS']['TEMP_MOB'] != "") { echo TEMP_1['DETAILS']['TEMP_MOB']; } else { echo ""; } ?>"><i class="icon-call"></i> <?php if(isset(TEMP_1['DETAILS']['TEMP_MOB']) && TEMP_1['DETAILS']['TEMP_MOB'] != NULL && TEMP_1['DETAILS']['TEMP_MOB'] != "") { echo TEMP_1['DETAILS']['TEMP_MOB']; } else { echo ""; } ?></a></li>
                                    <?php } ?>
                                    <?php if(isset(TEMP_1['SOCIAL']) && TEMP_1['SOCIAL'] != NULL && TEMP_1['SOCIAL'] != "") {  ?>
                                    <li>
                                        <div class="ltn__social-media">
                                            <ul>
                                                <?php foreach(TEMP_1['SOCIAL'] as $social) { ?>
                                                    <li><a href="<?php if(isset($social['link']) && $social['link'] != NULL && $social['link'] != "") { echo $social['link']; } else { echo ""; } ?>" <?php if(isset($social['attr']) && $social['attr'] != NULL && $social['attr'] != "") { echo $social['attr']; } else { echo ""; } ?> title="<?php if(isset($social['title']) && $social['title'] != NULL && $social['title'] != "") { echo $social['title']; } else { echo ""; } ?>"><i class="<?php if(isset($social['icon']) && $social['icon'] != NULL && $social['icon'] != "") { echo $social['icon']; } else { echo ""; } ?>"></i></a></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white ltn__logo-right-menu-option plr--9---">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="<?= site_url(); ?>"><img class="logo-img" src="<?php if(isset(TEMP_1['HEAD']['TEMP_LOGO']) && TEMP_1['HEAD']['TEMP_LOGO'] != NULL && TEMP_1['HEAD']['TEMP_LOGO'] != "") { echo TEMP_1['HEAD']['TEMP_LOGO']; } else { echo ""; } ?>" alt="Logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col header-menu-column menu-color-white---">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul>
                                        <li><a href="javascript:void(0)" class="tab-active">Home</a></li>
                                        <li><a href="javascript:void(0)">Menu</a></li>
                                        <li><a href="javascript:void(0)">Opening Time</a></li>
                                        <li><a href="javascript:void(0)">Deliveries</a></li>
                                        <li><a href="javascript:void(0)">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="ltn__header-options ltn__header-options-2 mb-sm-20">
                        <div class="mini-cart-icon">
                            <a href="javascript:void(0)" title="Sign In" data-bs-toggle="modal" data-bs-target="#sign_in_modal">
                                <b><i class="icon-user"></i>Sign In</b>
                            </a>
                        </div>
                        <div class="mini-cart-icon">
                            <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle">
                                <i class="icon-shopping-cart"></i>
                                <sup>2</sup>
                            </a>
                        </div>
                        <div class="mobile-menu-toggle d-xl-none">
                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER AREA END -->

    <!-- Utilize Cart Menu Start -->
    <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <span class="ltn__utilize-menu-title">Cart</span>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="mini-cart-product-area ltn__scrollbar">
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="javascript:void(0)"><img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/product/1.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="javascript:void(0)">Red Hot Tomato</a></h6>
                        <span class="mini-cart-quantity">1 x $65.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="javascript:void(0)"><img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/product/2.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="javascript:void(0)">Vegetables Juices</a></h6>
                        <span class="mini-cart-quantity">1 x $85.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="javascript:void(0)"><img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/product/3.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="javascript:void(0)">Orange Sliced Mix</a></h6>
                        <span class="mini-cart-quantity">1 x $92.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="javascript:void(0)"><img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/product/4.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="javascript:void(0)">Orange Fresh Juice</a></h6>
                        <span class="mini-cart-quantity">1 x $68.00</span>
                    </div>
                </div>
            </div>
            <div class="mini-cart-footer">
                <div class="mini-cart-sub-total">
                    <h5>Subtotal: <span>$310.00</span></h5>
                </div>
                <div class="btn-wrapper">
                    <a href="javascript:void(0)" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                    <a href="javascript:void(0)" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                </div>
                <p>Free Shipping on All Orders Over $100!</p>
            </div>

        </div>
    </div>
    <!-- Utilize Cart Menu End -->

    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu">
                <ul>
                    <li><a href="javascript:void(0)" class="tab-active">Home</a></li>
                    <li><a href="javascript:void(0)">Menu</a></li>
                    <li><a href="javascript:void(0)">Opening Time</a></li>
                    <li><a href="javascript:void(0)">Deliveries</a></li>
                    <li><a href="javascript:void(0)">Contact</a></li>
                    <li><a href="javascript:void(0)" title="Sign In" data-bs-toggle="modal" data-bs-target="#sign_in_modal">Sign In/ Sign Up</a></li>
                </ul>
            </div>
            <?php if(isset(TEMP_1['SOCIAL']) && TEMP_1['SOCIAL'] != NULL && TEMP_1['SOCIAL'] != "") {  ?>
            <div class="ltn__social-media-2">
                <ul>
                    <?php foreach(TEMP_1['SOCIAL'] as $social) { ?>
                        <li><a href="<?php if(isset($social['link']) && $social['link'] != NULL && $social['link'] != "") { echo $social['link']; } else { echo ""; } ?>" <?php if(isset($social['attr']) && $social['attr'] != NULL && $social['attr'] != "") { echo $social['attr']; } else { echo ""; } ?> title="<?php if(isset($social['title']) && $social['title'] != NULL && $social['title'] != "") { echo $social['title']; } else { echo ""; } ?>"><i class="<?php if(isset($social['icon']) && $social['icon'] != NULL && $social['icon'] != "") { echo $social['icon']; } else { echo ""; } ?>"></i></a></li>
                    <?php } ?>
                </ul>
            </div>
            <?php } ?>
        </div>
    </div>
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>