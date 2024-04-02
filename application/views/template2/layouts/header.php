<!doctype html>
<html>
<head>
    <title><?php if(isset(TEMP_1['HEAD']['TEMP_TITLE']) && TEMP_1['HEAD']['TEMP_TITLE'] != NULL && TEMP_1['HEAD']['TEMP_TITLE'] != "") { echo TEMP_1['HEAD']['TEMP_TITLE']; } else { echo ""; } ?></title>
    <meta charset="UTF-8">
    <meta name="description" content="<?php if(isset(TEMP_1['HEAD']['TEMP_MDES']) && TEMP_1['HEAD']['TEMP_MDES'] != NULL && TEMP_1['HEAD']['TEMP_MDES'] != "") { echo TEMP_1['HEAD']['TEMP_MDES']; } else { echo ""; } ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if(isset(TEMP_1['HEAD']['TEMP_FAVICON']) && TEMP_1['HEAD']['TEMP_FAVICON'] != NULL && TEMP_1['HEAD']['TEMP_FAVICON'] != "") { ?>
        <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>img/<?php if(isset(TEMP_1['HEAD']['TEMP_FAVICON']) && TEMP_1['HEAD']['TEMP_FAVICON'] != NULL && TEMP_1['HEAD']['TEMP_FAVICON'] != "") { echo TEMP_1['HEAD']['TEMP_FAVICON']; } else { echo ""; } ?>">
    <?php } ?>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>css/bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>css/animate.min.css">

    <!-- Font Icons css -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>css/font-icons.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>fonts/flaticon.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>css/boxicons.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>css/owl.carousel.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>css/nice-select.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>css/meanmenu.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>css/style.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>css/responsive.css">

    <!-- <link rel="stylesheet" href="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>css/theme-dark.css"> -->
    <link href="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>switcher/css/switcher.css" rel="stylesheet" id="switcher-css" media="all">

</head>
<body>

    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner"></div>
            </div>
        </div>
    </div>

    <header class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-9">
                    <div class="header-left">
                        <div class="header-left-card">
                            <ul>
                                <?php if(isset(TEMP_1['DETAILS']['TEMP_ADD']) && TEMP_1['DETAILS']['TEMP_ADD'] != NULL && TEMP_1['DETAILS']['TEMP_ADD'] != "") { ?>
                                <li>
                                    <div class="head-icon">
                                        <i class='bx bx-home-smile'></i>
                                    </div>
                                    <a href="javascript:void(0)"><?php if(isset(TEMP_1['DETAILS']['TEMP_ADD']) && TEMP_1['DETAILS']['TEMP_ADD'] != NULL && TEMP_1['DETAILS']['TEMP_ADD'] != "") { echo TEMP_1['DETAILS']['TEMP_ADD']; } else { echo ""; } ?></a>
                                </li>
                                <?php } ?>
                                <?php if(isset(TEMP_1['DETAILS']['TEMP_MOB']) && TEMP_1['DETAILS']['TEMP_MOB'] != NULL && TEMP_1['DETAILS']['TEMP_MOB'] != "") { ?>
                                <li>
                                    <div class="head-icon">
                                        <i class='bx bx-phone-call'></i>
                                    </div>
                                    <a href="tel:<?php if(isset(TEMP_1['DETAILS']['TEMP_MOB']) && TEMP_1['DETAILS']['TEMP_MOB'] != NULL && TEMP_1['DETAILS']['TEMP_MOB'] != "") { echo TEMP_1['DETAILS']['TEMP_MOB']; } else { echo ""; } ?>"><?php if(isset(TEMP_1['DETAILS']['TEMP_MOB']) && TEMP_1['DETAILS']['TEMP_MOB'] != NULL && TEMP_1['DETAILS']['TEMP_MOB'] != "") { echo TEMP_1['DETAILS']['TEMP_MOB']; } else { echo ""; } ?></a>
                                </li>
                                <?php } ?>
                                <?php if(isset(TEMP_1['DETAILS']['TEMP_EMAIL']) && TEMP_1['DETAILS']['TEMP_EMAIL'] != NULL && TEMP_1['DETAILS']['TEMP_EMAIL'] != "") { ?>
                                <li>
                                    <div class="head-icon">
                                        <i class='bx bxs-envelope'></i>
                                    </div>
                                    <a href="mailto:<?php if(isset(TEMP_1['DETAILS']['TEMP_EMAIL']) && TEMP_1['DETAILS']['TEMP_EMAIL'] != NULL && TEMP_1['DETAILS']['TEMP_EMAIL'] != "") { echo TEMP_1['DETAILS']['TEMP_EMAIL']; } else { echo ""; } ?>">
                                     <?php if(isset(TEMP_1['DETAILS']['TEMP_EMAIL']) && TEMP_1['DETAILS']['TEMP_EMAIL'] != NULL && TEMP_1['DETAILS']['TEMP_EMAIL'] != "") { echo TEMP_1['DETAILS']['TEMP_EMAIL']; } else { echo ""; } ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php if(isset(TEMP_1['SOCIAL']) && TEMP_1['SOCIAL'] != NULL && TEMP_1['SOCIAL'] != "") {  ?>
                <div class="col-lg-4 col-md-3">
                    <div class="header-right">
                        <div class="top-social-link">
                            <ul>
                                <?php foreach(TEMP_1['SOCIAL'] as $social) { ?>
                                <li>
                                    <a href="<?php if(isset($social['link']) && $social['link'] != NULL && $social['link'] != "") { echo $social['link']; } else { echo ""; } ?>" <?php if(isset($social['attr']) && $social['attr'] != NULL && $social['attr'] != "") { echo $social['attr']; } else { echo ""; } ?>>
                                        <i class='<?php if(isset($social['icon']) && $social['icon'] != NULL && $social['icon'] != "") { echo $social['icon']; } else { echo ""; } ?>'></i>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </header>

    <div class="navbar-area">
        <?php if(isset(TEMP_1['HEAD']['TEMP_LOGO']) && TEMP_1['HEAD']['TEMP_LOGO'] != NULL && TEMP_1['HEAD']['TEMP_LOGO'] != "") { ?>
            <div class="mobile-nav">
                <a href="<?= site_url(); ?>" class="logo">
                    <img class="logo-img" src="<?php if(isset(TEMP_1['HEAD']['TEMP_LOGO']) && TEMP_1['HEAD']['TEMP_LOGO'] != NULL && TEMP_1['HEAD']['TEMP_LOGO'] != "") { echo TEMP_1['HEAD']['TEMP_LOGO']; } else { echo ""; } ?>" class="logo" alt="Logo">
                </a>
            </div>
        <?php } ?>
        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light ">
                    <?php if(isset(TEMP_1['HEAD']['TEMP_LOGO']) && TEMP_1['HEAD']['TEMP_LOGO'] != NULL && TEMP_1['HEAD']['TEMP_LOGO'] != "") { ?>
                        <a class="navbar-brand" href="<?= site_url(); ?>">
                            <img class="logo-img" src="<?php if(isset(TEMP_1['HEAD']['TEMP_LOGO']) && TEMP_1['HEAD']['TEMP_LOGO'] != NULL && TEMP_1['HEAD']['TEMP_LOGO'] != "") { echo TEMP_1['HEAD']['TEMP_LOGO']; } else { echo ""; } ?>" class="logo" alt="Logo">
                        </a>
                    <?php } ?>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link active">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link">
                                    About
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link">
                                    Our Products
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link">
                                    Test Drive
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link">
                                    Booking
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link">
                                    Contact
                                </a>
                            </li class="nav-item">
                            <li>
                                <div class="others-options d-flex align-items-center">
                                    <div class="option-item">
                                        <div class="add-cart-btn">
                                            <a href="javascript:void(0)" class="lgnBtn mt-10 ml-20 ft-24">
                                                <i class="bx bx-user"></i> Sign In
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="side-nav-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="circle-inner">
                        <div>
                            <a href="javascript:void(0)" class="lgnBtn">
                                <i class="bx bx-user"></i> Sign In
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>