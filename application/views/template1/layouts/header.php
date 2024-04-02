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
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/<?php if(isset(TEMP_1['HEAD']['TEMP_FAVICON']) && TEMP_1['HEAD']['TEMP_FAVICON'] != NULL && TEMP_1['HEAD']['TEMP_FAVICON'] != "") { echo TEMP_1['HEAD']['TEMP_FAVICON']; } else { echo ""; } ?>" type="image/x-icon" />
    <?php } ?>
    <!-- Font Icons css -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/css/responsive.css">
    <!-- sweetalert2 -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/css/sweetalert2.min.css">
    <!-- intlTelInput -->
    <link href="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/css/intlTelInput.min.css" rel="stylesheet" media="all"/>
    <!-- Switcher css -->
    <link href="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/switcher/css/switcher.css" rel="stylesheet" id="switcher-css" media="all">
</head>

<body>
<?php
    $segment1 = $this->uri->segment(1); 
?>
<!-- Body main wrapper start -->
<div class="body-wrapper">
    <header class="ltn__header-area ltn__header-4 ltn__header-6 ltn__header-transparent--- gradient-color-2---">
        <div class="ltn__header-top-area top-area-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <?php if(isset(TEMP_1['DETAILS']['TEMP_EMAIL']) && TEMP_1['DETAILS']['TEMP_EMAIL'] != NULL && TEMP_1['DETAILS']['TEMP_EMAIL'] != "") { ?>
                                <li><a href="mailto:<?php if(isset(TEMP_1['DETAILS']['TEMP_EMAIL']) && TEMP_1['DETAILS']['TEMP_EMAIL'] != NULL && TEMP_1['DETAILS']['TEMP_EMAIL'] != "") { echo TEMP_1['DETAILS']['TEMP_EMAIL']; } else { echo ""; } ?>"><i class="icon-mail"></i> <?php if(isset(TEMP_1['DETAILS']['TEMP_EMAIL']) && TEMP_1['DETAILS']['TEMP_EMAIL'] != NULL && TEMP_1['DETAILS']['TEMP_EMAIL'] != "") { echo TEMP_1['DETAILS']['TEMP_EMAIL']; } else { echo ""; } ?></a></li>
                                <?php } ?>
                                <?php if(isset(TEMP_1['DETAILS']['TEMP_ADD']) && TEMP_1['DETAILS']['TEMP_ADD'] != NULL && TEMP_1['DETAILS']['TEMP_ADD'] != "") { ?>
                                <li><a href="javascript:void(0)"><i class="icon-placeholder"></i> <?php if(isset(TEMP_1['DETAILS']['TEMP_ADD']) && TEMP_1['DETAILS']['TEMP_ADD'] != NULL && TEMP_1['DETAILS']['TEMP_ADD'] != "") { echo TEMP_1['DETAILS']['TEMP_ADD']; } else { echo ""; } ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="top-bar-right text-end">
                            <div class="ltn__top-bar-menu">
                                <ul>
                                    <?php if(isset(TEMP_1['DETAILS']['TEMP_MOB']) && TEMP_1['DETAILS']['TEMP_MOB'] != NULL && TEMP_1['DETAILS']['TEMP_MOB'] != "") {  ?>
                                        <li>
                                            <a href="tel:<?php if(isset(TEMP_1['DETAILS']['TEMP_MOB']) && TEMP_1['DETAILS']['TEMP_MOB'] != NULL && TEMP_1['DETAILS']['TEMP_MOB'] != "") { echo TEMP_1['DETAILS']['TEMP_MOB']; } else { echo ""; } ?>"><i class="icon-call"></i> <?php if(isset(TEMP_1['DETAILS']['TEMP_MOB']) && TEMP_1['DETAILS']['TEMP_MOB'] != NULL && TEMP_1['DETAILS']['TEMP_MOB'] != "") { echo TEMP_1['DETAILS']['TEMP_MOB']; } else { echo ""; } ?></a>
                                        </li>
                                    <?php } ?>
                                    <?php if(isset(TEMP_1['SOCIAL']) && TEMP_1['SOCIAL'] != NULL && TEMP_1['SOCIAL'] != "") { ?>
                                    <li>
                                        <div class="ltn__social-media">
                                            <ul>
                                                <?php foreach(TEMP_1['SOCIAL'] as $social) { ?>
                                                    <li><a href="<?php if(isset($social['link']) && $social['link'] != NULL && $social['link'] != "") { echo $social['link']; } else { echo ""; } ?>" title="<?php if(isset($social['title']) && $social['title'] != NULL && $social['title'] != "") { echo $social['title']; } else { echo ""; } ?>" <?php if(isset($social['attr']) && $social['attr'] != NULL && $social['attr'] != "") { echo $social['attr']; } else { echo ""; } ?>><i class="<?php if(isset($social['icon']) && $social['icon'] != NULL && $social['icon'] != "") { echo $social['icon']; } else { echo ""; } ?>"></i></a></li>
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

        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white ltn__logo-right-menu-option plr--9">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="site-logo-wrap">
                            <?php if(isset(TEMP_1['HEAD']['TEMP_LOGO']) && TEMP_1['HEAD']['TEMP_LOGO'] != NULL && TEMP_1['HEAD']['TEMP_LOGO'] != "") { ?>
                                <div class="site-logo">
                                    <a href="<?= site_url(); ?>"><img src="<?php if(isset(TEMP_1['HEAD']['TEMP_LOGO']) && TEMP_1['HEAD']['TEMP_LOGO'] != NULL && TEMP_1['HEAD']['TEMP_LOGO'] != "") { echo TEMP_1['HEAD']['TEMP_LOGO']; } else { echo ""; } ?>" class="logo-img" alt="Logo"></a>
                                </div>
                            <?php } ?>
                            <div class="get-support clearfix d-xl-none">
                                <a href="javascript:void(0)" title="Sign In" data-bs-toggle="modal" data-bs-target="#sign_in_modal"><b><i class="icon-user bold"></i> Sign In</b></a>
                            </div>
                            <?php if(isset(TEMP_1['DETAILS']['TEMP_MOB']) && TEMP_1['DETAILS']['TEMP_MOB'] != NULL && TEMP_1['DETAILS']['TEMP_MOB'] != "") { ?>
                            <div class="get-support clearfix d-none d-xl-block">
                                <div class="get-support-icon">
                                    <i class="icon-call"></i>
                                </div>
                                <div class="get-support-info">
                                    <h6>Get Support</h6>
                                    <h4><a href="tel:<?php if(isset(TEMP_1['DETAILS']['TEMP_MOB']) && TEMP_1['DETAILS']['TEMP_MOB'] != NULL && TEMP_1['DETAILS']['TEMP_MOB'] != "") { echo TEMP_1['DETAILS']['TEMP_MOB']; } else { echo ""; } ?>"><?php if(isset(TEMP_1['DETAILS']['TEMP_MOB']) && TEMP_1['DETAILS']['TEMP_MOB'] != NULL && TEMP_1['DETAILS']['TEMP_MOB'] != "") { echo TEMP_1['DETAILS']['TEMP_MOB']; } else { echo ""; } ?></a></h4>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col header-menu-column">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <div class="ltn__main-menu fl-right">
                                    <ul>
                                        <li><a href="<?= site_url(); ?>" class="<?php if($segment1 == "") { echo 'active'; }?>">Home</a></li>
                                        <li onclick="redirectToAboutPage()"><a href="javascript:void(0)">About</a></li>
                                        <li><a href="<?= site_url('product'); ?>" class="<?php if($segment1 == "product" || $segment1 == "product-details") { echo 'active'; }?>">Our Products</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                        <!-- <?php //if($this->session->userdata('customer_id') == NULL) { ?> -->
                                        <li id="signInBtn1">
                                            <a href="javascript:void(0)" title="Sign In" data-bs-toggle="modal" data-bs-target="#sign_in_modal"><b><i class="icon-user bold"></i> Sign In</b></a>
                                        </li>
                                        <!-- <?php //} ?> -->
                                        <!-- <?php //if($this->session->userdata('customer_id') != "") { ?> -->
                                        
                                        <!-- <?php //} ?> -->
                                        <!-- <li class="special-link"><a href="javascript:void(0)">BOOKING</a></li> -->
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <?php //if($this->session->userdata('customer_id') != NULL ) { ?>                       
                    <div class="ltn__header-options ltn__header-options-2 d-none" id="myAccBtn">
                        <!-- header-search-1 -->
                        <!-- <div class="header-search-wrap">
                            <div class="header-search-1">
                                <div class="search-icon">
                                    <i class="icon-search for-search-show"></i>
                                    <i class="icon-cancel  for-search-close"></i>
                                </div>
                            </div>
                            <div class="header-search-1-form">
                                <form id="javascript:void(0)" method="get"  action="javascript:void(0)">
                                    <input type="text" name="search" value="" placeholder="Search here..."/>
                                    <button type="submit">
                                        <span><i class="icon-search"></i></span>
                                    </button>
                                </form>
                            </div>
                        </div> -->
                        <!-- <div class="header-search-wrap">
                            <div class="header-search-1">
                                <div class="search-icon">
                                <a href="javascript:void(0)" title="Vaishnavi Charde" data-bs-toggle="modal" data-bs-target="#sign_in_modal"><b><i class="icon-user bold"></i> Vaishnavi Charde</b></a>
                                </div>
                            </div>
                        </div> -->
                        <!-- <a href="javascript:void(0)" title="Vaishnavi Charde" style="margin-left: 20px;"><b><i class="icon-user bold"></i> Vaishnavi Charde &nbsp;&nbsp;&nbsp;</b></a> -->
                        <!-- user-menu -->
                        <div class="ltn__drop-menu user-menu">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="plr-15"><i class="icon-user bold"></i> <span id="loginUsername"></span> &nbsp;&nbsp;&nbsp;</a>
                                    <ul>
                                        <li><a href="javascript:void(0)">My Profile</a></li>
                                        <li><a href="javascript:void(0)">Test Drive Bookings</a></li>
                                        <li><a href="javascript:void(0)">Bookings</a></li>
                                        <!-- <li><a href="wishlist.html">Wishlist</a></li> -->
                                        <li class="logout-btn"><a href="javascript:void(0)">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- mini-cart -->
                        <!-- <div class="mini-cart-icon">
                            <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle plr-15">
                                <i class="icon-shopping-cart"></i>
                                <sup>2</sup>
                            </a>
                        </div> -->
                        <!-- mini-cart -->
                        <!-- Mobile Menu Button -->
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
                    <?php //} ?>
                </div>
            </div>
        </div>
        
        <!-- <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white ltn__logo-right-menu-option">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="site-logo-wrap">
                            <?php if(isset(TEMP_1['HEAD']['TEMP_LOGO']) && TEMP_1['HEAD']['TEMP_LOGO'] != NULL && TEMP_1['HEAD']['TEMP_LOGO'] != "") { ?>
                                <div class="site-logo">
                                    <a href="<?= site_url(); ?>"><img class="logo-img" src="<?php if(isset(TEMP_1['HEAD']['TEMP_LOGO']) && TEMP_1['HEAD']['TEMP_LOGO'] != NULL && TEMP_1['HEAD']['TEMP_LOGO'] != "") { echo TEMP_1['HEAD']['TEMP_LOGO']; } else { echo ""; } ?>" alt="Logo"></a>
                                </div>
                            <?php } ?>
                            <?php if(isset(TEMP_1['DETAILS']['TEMP_MOB']) && TEMP_1['DETAILS']['TEMP_MOB'] != NULL && TEMP_1['DETAILS']['TEMP_MOB'] != "") { ?>
                                <div class="get-support clearfix d-none d-xl-block">
                                    <div class="get-support-icon">
                                        <i class="icon-call"></i>
                                    </div>
                                    <div class="get-support-info">
                                        <h6>Get Support</h6>
                                        <h4><a href="tel:<?php if(isset(TEMP_1['DETAILS']['TEMP_MOB']) && TEMP_1['DETAILS']['TEMP_MOB'] != NULL && TEMP_1['DETAILS']['TEMP_MOB'] != "") { echo TEMP_1['DETAILS']['TEMP_MOB']; } else { echo ""; } ?>"><?php if(isset(TEMP_1['DETAILS']['TEMP_MOB']) && TEMP_1['DETAILS']['TEMP_MOB'] != NULL && TEMP_1['DETAILS']['TEMP_MOB'] != "") { echo TEMP_1['DETAILS']['TEMP_MOB']; } else { echo ""; } ?></a></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="d-xl-none">
                        <a href="javascript:void(0)" title="Sign In" data-bs-toggle="modal" data-bs-target="#sign_in_modal"><b><i class="icon-user bold"></i> Sign In</b></a>
                    </div>
                    <div class="col header-menu-column">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul>
                                        <li><a href="<?= site_url(); ?>" class="<?php if($segment1 == "") { echo 'active'; }?>">Home</a></li>
                                        <li><a href="#aboutSection">About</a></li>
                                        <li><a href="<?= site_url('product'); ?>" class="<?php if($segment1 == "product") { echo 'active'; }?>">Our Products</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                        <li>
                                            <a href="javascript:void(0)" title="Sign In" data-bs-toggle="modal" data-bs-target="#sign_in_modal"><b><i class="icon-user bold"></i> Sign In</b></a>
                                        </li>
                                        <li class="special-link"><a href="javascript:void(0)">BOOKING</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
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
        </div> -->
    </header>
    <!-- HEADER AREA END -->

    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <?php if(isset(TEMP_1['HEAD']['TEMP_LOGO']) && TEMP_1['HEAD']['TEMP_LOGO'] != NULL && TEMP_1['HEAD']['TEMP_LOGO'] != "") { ?>
                <div class="ltn__utilize-menu-head">
                    <div class="site-logo">
                        <a href="<?= site_url(); ?>"><img  class="logo-img" src="<?php if(isset(TEMP_1['HEAD']['TEMP_LOGO']) && TEMP_1['HEAD']['TEMP_LOGO'] != NULL && TEMP_1['HEAD']['TEMP_LOGO'] != "") { echo TEMP_1['HEAD']['TEMP_LOGO']; } else { echo ""; } ?>" alt="Logo"></a>
                    </div>
                    <button class="ltn__utilize-close">×</button>
                </div>
            <?php } ?>
            <div class="ltn__utilize-menu">
                <ul>
                    <li><a href="<?= site_url(); ?>" class="<?php if($segment1 == "") { echo 'active'; }?>">Home</a></li>
                    <li onclick="redirectToAboutPage()"><a href="javascript:void(0)">About</a></li>
                    <li><a href="<?= site_url('product'); ?>" class="<?php if($segment1 == "product") { echo 'active'; }?>">Our Products</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <?php if(isset(TEMP_1['SOCIAL']) && TEMP_1['SOCIAL'] != NULL && TEMP_1['SOCIAL'] != "") { ?>
            <div class="ltn__social-media-2">
                <ul>
                    <?php foreach(TEMP_1['SOCIAL'] as $social) { ?>
                        <li><a href="<?php if(isset($social['link']) && $social['link'] != NULL && $social['link'] != "") { echo $social['link']; } else { echo ""; } ?>" title="<?php if(isset($social['title']) && $social['title'] != NULL && $social['title'] != "") { echo $social['title']; } else { echo ""; } ?>" <?php if(isset($social['attr']) && $social['attr'] != NULL && $social['attr'] != "") { echo $social['attr']; } else { echo ""; } ?>><i class="<?php if(isset($social['icon']) && $social['icon'] != NULL && $social['icon'] != "") { echo $social['icon']; } else { echo ""; } ?>"></i></a></li>
                    <?php } ?>
                </ul>
            </div>
            <?php } ?>
        </div>
    </div>
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>