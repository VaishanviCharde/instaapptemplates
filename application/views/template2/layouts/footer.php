<footer class="footer-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xxl-3 col-md-6">
                    <div class="footer-widget">
                        <?php if(isset(TEMP_1['HEAD']['TEMP_LOGO']) && TEMP_1['HEAD']['TEMP_LOGO'] != NULL && TEMP_1['HEAD']['TEMP_LOGO'] != "") { ?>
                            <div class="footer-logo">
                                <a href="<?= site_url(); ?>">
                                    <img class="logo-img" src="<?php if(isset(TEMP_1['HEAD']['TEMP_LOGO']) && TEMP_1['HEAD']['TEMP_LOGO'] != NULL && TEMP_1['HEAD']['TEMP_LOGO'] != "") { echo TEMP_1['HEAD']['TEMP_LOGO']; } else { echo ""; } ?>" class="footer-logo-one" alt="Logo">
                                </a>
                            </div>
                        <?php } ?>
                        <?php if(isset(TEMP_1['DETAILS']['TEMP_DSC']) && TEMP_1['DETAILS']['TEMP_DSC'] != NULL && TEMP_1['DETAILS']['TEMP_DSC'] != "") {  ?>
                            <p><?php if(isset(TEMP_1['DETAILS']['TEMP_DSC']) && TEMP_1['DETAILS']['TEMP_DSC'] != NULL && TEMP_1['DETAILS']['TEMP_DSC'] != "") { echo TEMP_1['DETAILS']['TEMP_DSC']; } else { echo ""; } ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-2 col-xxl-3 col-md-6">
                    <div class="footer-widget pl-30 pl-50">
                        <h3>Useful Links</h3>
                        <ul class="footer-list">
                            <li>
                                <a href="javascript:void(0)">About</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Our Products</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Test Drive</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Booking</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php if(isset(TEMP_1['FOOTMENU']) && TEMP_1['FOOTMENU'] != NULL && TEMP_1['FOOTMENU'] != "") { ?>
                <div class="col-lg-3 col-xxl-3 col-md-6">
                    <div class="footer-widget pl-35">
                        <h3>Other Resources</h3>
                        <ul class="footer-list">
                            <?php foreach(TEMP_1['FOOTMENU'] as $footmenu) { ?>
                            <li>
                                <a href="<?php if(isset($footmenu['link']) && $footmenu['link'] != NULL && $footmenu['link'] != "") { echo $footmenu['link']; } else { echo ""; } ?>" <?php if(isset($footmenu['attr']) && $footmenu['attr'] != NULL && $footmenu['attr'] != "") { echo $footmenu['attr']; } else { echo ""; } ?>><?php if(isset($footmenu['title']) && $footmenu['title'] != NULL && $footmenu['title'] != "") { echo $footmenu['title']; } else { echo ""; } ?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <?php } ?>
                <div class="col-lg-3 col-xxl-3 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-widget">
                            <h3>Address</h3>
                            <ul class="footer-list-two">
                                <!-- <li>
                                    <i class='bx bx-time'></i>
                                    Sun - Fri: 8.00am - 6.00pm
                                </li> -->
                                <?php if(isset(TEMP_1['DETAILS']['TEMP_ADD']) && TEMP_1['DETAILS']['TEMP_ADD'] != NULL && TEMP_1['DETAILS']['TEMP_ADD'] != "") { ?>
                                <li>
                                    <i class='bx bx-home-smile'></i>
                                    <a href="javascript:void(0)"><?php if(isset(TEMP_1['DETAILS']['TEMP_ADD']) && TEMP_1['DETAILS']['TEMP_ADD'] != NULL && TEMP_1['DETAILS']['TEMP_ADD'] != "") { echo TEMP_1['DETAILS']['TEMP_ADD']; } else { echo ""; } ?></a>
                                </li>
                                <?php } ?>
                                <?php if(isset(TEMP_1['DETAILS']['TEMP_MOB']) && TEMP_1['DETAILS']['TEMP_MOB'] != NULL && TEMP_1['DETAILS']['TEMP_MOB'] != "") { ?>
                                <li>
                                    <i class='bx bx-phone'></i>
                                    <a href="tel:<?php if(isset(TEMP_1['DETAILS']['TEMP_MOB']) && TEMP_1['DETAILS']['TEMP_MOB'] != NULL && TEMP_1['DETAILS']['TEMP_MOB'] != "") { echo TEMP_1['DETAILS']['TEMP_MOB']; } else { echo ""; } ?>"><?php if(isset(TEMP_1['DETAILS']['TEMP_MOB']) && TEMP_1['DETAILS']['TEMP_MOB'] != NULL && TEMP_1['DETAILS']['TEMP_MOB'] != "") { echo TEMP_1['DETAILS']['TEMP_MOB']; } else { echo ""; } ?></a>
                                </li>
                                <?php } ?>
                                <?php if(isset(TEMP_1['DETAILS']['TEMP_MOB1']) && TEMP_1['DETAILS']['TEMP_MOB1'] != NULL && TEMP_1['DETAILS']['TEMP_MOB1'] != "") { ?>
                                <li>
                                    <i class='bx bx-phone'></i>
                                    <a href="tel:<?php if(isset(TEMP_1['DETAILS']['TEMP_MOB1']) && TEMP_1['DETAILS']['TEMP_MOB1'] != NULL && TEMP_1['DETAILS']['TEMP_MOB1'] != "") { echo TEMP_1['DETAILS']['TEMP_MOB1']; } else { echo ""; } ?>"><?php if(isset(TEMP_1['DETAILS']['TEMP_MOB1']) && TEMP_1['DETAILS']['TEMP_MOB1'] != NULL && TEMP_1['DETAILS']['TEMP_MOB1'] != "") { echo TEMP_1['DETAILS']['TEMP_MOB1']; } else { echo ""; } ?></a>
                                </li>
                                <?php } ?>
                                <?php if(isset(TEMP_1['DETAILS']['TEMP_EMAIL']) && TEMP_1['DETAILS']['TEMP_EMAIL'] != NULL && TEMP_1['DETAILS']['TEMP_EMAIL'] != "") { ?>
                                <li>
                                    <i class='bx bxs-envelope'></i>
                                    <a href="mailto:<?php if(isset(TEMP_1['DETAILS']['TEMP_EMAIL']) && TEMP_1['DETAILS']['TEMP_EMAIL'] != NULL && TEMP_1['DETAILS']['TEMP_EMAIL'] != "") { echo TEMP_1['DETAILS']['TEMP_EMAIL']; } else { echo ""; } ?>">
                                     <?php if(isset(TEMP_1['DETAILS']['TEMP_EMAIL']) && TEMP_1['DETAILS']['TEMP_EMAIL'] != NULL && TEMP_1['DETAILS']['TEMP_EMAIL'] != "") { echo TEMP_1['DETAILS']['TEMP_EMAIL']; } else { echo ""; } ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php if(isset(TEMP_1['DETAILS']['TEMP_COPYRIGHT']) && TEMP_1['DETAILS']['TEMP_COPYRIGHT'] != NULL && TEMP_1['DETAILS']['TEMP_COPYRIGHT'] != "") {  ?>
    <div class="copy-right-area">
        <div class="container">
            <div class="copy-right-text text-center">
                <p>
                <?php if(isset(TEMP_1['DETAILS']['TEMP_COPYRIGHT']) && TEMP_1['DETAILS']['TEMP_COPYRIGHT'] != NULL && TEMP_1['DETAILS']['TEMP_COPYRIGHT'] != "") { echo TEMP_1['DETAILS']['TEMP_COPYRIGHT']; } else { echo ""; } ?>
                </p>
            </div>
        </div>
    </div>
    <?php } ?>
        
    <!-- Start Switcher -->
    <div class="switcher-wrapper">
        <div class="demo_changer">
            <div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>
            <div class="form_holder">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="predefined_styles">
                            <div class="skin-theme-switcher">
                                <h4>Color</h4>
                                <input type="color" value="<?php 
                                                if(TEMPCOLOR !== NULL && TEMPCOLOR != "") { 
                                                    echo TEMPCOLOR; 
                                                } else { 
                                                    echo '#fc8e41'; 
                                                } 
                                            ?>" id="colorPicker" data-switchcolor="color1" class="styleswitch">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->

    <script src="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>js/jquery.min.js"></script>

    <script src="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>js/owl.carousel.min.js"></script>

    <script src="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>js/jquery.nice-select.min.js"></script>

    <script src="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>js/wow.min.js"></script>

    <script src="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>js/meanmenu.js"></script>

    <script src="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>js/jquery.ajaxchimp.min.js"></script>

    <script src="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>js/form-validator.min.js"></script>

    <script src="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>js/contact-form-script.js"></script>

    <script src="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>js/custom.js"></script>

    <script src="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>switcher/js/dmss.js"></script>