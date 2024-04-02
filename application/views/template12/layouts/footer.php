    <!-- FOOTER AREA START -->
    <footer class="ltn__footer-area ">
        <div class="ltn__copyright-area ltn__copyright-2 section-bg-2 ltn__border-top-2 plr--5">
            <div class="container-fluid">
                <div class="row">
                    <?php if(isset(TEMP_1['DETAILS']['TEMP_COPYRIGHT']) && TEMP_1['DETAILS']['TEMP_COPYRIGHT'] != NULL && TEMP_1['DETAILS']['TEMP_COPYRIGHT'] != "") { ?>
                        <div class="col-md-6 col-12">
                            <div class="ltn__copyright-design clearfix">
                                <p><?php echo TEMP_1['DETAILS']['TEMP_COPYRIGHT']; ?></p>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if(isset(TEMP_1['FOOTMENU']) && TEMP_1['FOOTMENU'] != NULL && TEMP_1['FOOTMENU'] != "") { ?>
                        <div class="col-md-6 col-12 align-self-center">
                            <div class="ltn__copyright-menu text-right text-end">
                                <ul>
                                    <?php foreach(TEMP_1['FOOTMENU'] as $footmenu) { ?>
                                        <li><a href="<?php if(isset($footmenu['link']) && $footmenu['link'] != NULL && $footmenu['link'] != "") { echo $footmenu['link']; } else { echo ""; } ?>" <?php if(isset($footmenu['attr']) && $footmenu['attr'] != NULL && $footmenu['attr'] != "") { echo $footmenu['attr']; } else { echo ""; } ?>><?php if(isset($footmenu['title']) && $footmenu['title'] != NULL && $footmenu['title'] != "") { echo $footmenu['title']; } else { echo ""; } ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->

    <!-- MODAL AREA START (Sign In Modal) -->
    <div class="ltn__modal-area ltn__quick-view-modal-area">
        <div class="modal fade" id="sign_in_modal" tabindex="-1">
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
                                    <div class="col-lg-12 col-12">
                                        <div class="sign-in-area">
                                            <div class="contact-form">
                                                <div class="section-title text-center mb-20">
                                                    <span class="span-bg">Sign In</span>
                                                    <h4 class="mt-20 mb-20">Sign In to Your Account!</h4>
                                                </div>
                                                <form method="post" id="signin-form" name="signin-form">
                                                    <div class="row">
                                                        <div class="col-lg-12 mb-20">
                                                            <div class="form-group">
                                                                <input type="text" name="username" id="username" class="form-control" placeholder="Username *">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-20">
                                                            <div class="form-group">
                                                                <input class="form-control" type="password" name="password" placeholder="Password *">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5 col-sm-5 form-condition">
                                                            <div class="agree-label">
                                                                <input type="checkbox" id="chb2" name="rememberme">
                                                                <label for="chb2">
                                                                    <b>Remember Me</b>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-sm-7">
                                                            <p class="account-desc float-right"><b>
                                                                Login as Guest?
                                                                <a href="javascript:void(0)" title="Sign Up" data-bs-toggle="modal" data-bs-target="#guest_sign_in_modal" data-bs-dismiss="modal">Guest Sign In</a></b>
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 text-center mt-10 mb-20">
                                                            <button type="submit" class="theme-btn-1 default-btn" id="signInBtn">
                                                                <b>Sign In Now</b>
                                                            </button>
                                                        </div>
                                                        <div class="col-12">
                                                            <p class="account-desc text-center mb-10"><b>
                                                                Not a member?
                                                                <a href="javascript:void(0)" title="Sign Up" data-bs-toggle="modal" data-bs-target="#sign_up_modal" data-bs-dismiss="modal">Sign Up</a></b>
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6 mt-30">
                                                            <a class="forget" href="javascript:void(0)"><b>Forgot Password?</b></a>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6 mt-30">
                                                            <a class="forget float-right" href="javascript:void(0)"><b>Forgot Username?</b></a>
                                                        </div>
                                                    </div>
                                                </form>
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
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Sign Up Modal) -->
    <div class="ltn__modal-area ltn__quick-view-modal-area">
        <div class="modal fade" id="sign_up_modal" tabindex="-1">
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
                                    <div class="col-lg-12 col-12">
                                        <div class="sign-in-area">
                                            <div class="contact-form">
                                                <div class="contact-form">
                                                    <div class="section-title text-center">
                                                        <span class="span-bg">Sign Up</span>
                                                        <h4 class="mt-20 mb-20">Create an Account!</h4>
                                                    </div>
                                                    <form id="signup-form" name="signup-form" method="post">
                                                        <div class="row">
                                                            <div class="col-lg-12 mb-20">
                                                                <select class="nice-select list" name="salutation" id="salutation">
                                                                    <option value="">Select Salutation *</option>
                                                                    <option value="Mr.">Mr.</option>
                                                                    <option value="Mrs.">Mrs.</option>
                                                                    <option value="Miss.">Miss.</option>
                                                                    <option value="Ms.">Ms.</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-lg-12 mb-20">
                                                                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name *">
                                                            </div>
                                                            <div class="col-lg-12 mb-20">
                                                                <div class="form-group">
                                                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name *">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 mb-20">
                                                                <div class="form-group">
                                                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email *">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 mb-20">
                                                                <div class="form-group">
                                                                    <input type="text" name="mobile[main]" id="mobile" class="form-control" placeholder="Mobile Number *" onkeypress="return isNumber(event)">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 mb-20">
                                                                <div class="form-group">
                                                                    <input type="text" name="signup_username" id="signup_username" class="form-control" placeholder="Username *">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mb-20">
                                                                <div class="form-group">
                                                                    <input class="form-control" type="password" name="password" id="password" placeholder="Password *">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mb-20">
                                                                <div class="form-group">
                                                                    <input class="form-control" type="password" name="conf_password" id="conf_password" placeholder="Confirm Password *">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 text-center mb-20">
                                                                
                                                                <button type="submit" class="theme-btn-1 default-btn" id="signUpSubmitBtn">
                                                                    Sign Up
                                                                    <!-- <i id="icon" style="display:none;"></i> -->
                                                                    <!-- <span class="text" id="text">Sign Up</span> -->
                                                                </button>
                                                            </div>
                                                            <div class="col-12">
                                                                <p class="account-desc text-center mt-10">
                                                                    <b>
                                                                        Already have an account?
                                                                        <a href="javascript:void(0)" title="Sign In" data-bs-toggle="modal" data-bs-target="#sign_in_modal" data-bs-dismiss="modal">Sign In</a>
                                                                    </b>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </form>
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
    </div>
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Guest Sign In Modal) -->
    <div class="ltn__modal-area ltn__quick-view-modal-area">
        <div class="modal fade" id="guest_sign_in_modal" tabindex="-1">
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
                                    <div class="col-lg-12 col-12">
                                        <div class="sign-in-area">
                                            <div class="contact-form">
                                                <div class="section-title text-center mb-20">
                                                    <span class="span-bg">Guest Sign In</span>
                                                    <h4 class="mt-20 mb-20">Sign In as a Guest User!</h4>
                                                </div>
                                                <form method="post" id="guest-login-form" class="guest-login-form" name="guest-login-form">
                                                    <div class="row">
                                                        <div class="col-lg-12 mb-20">
                                                            <div class="form-group">
                                                                <input type="text" name="guest_mobile[main]" id="guest_mobile" class="form-control" placeholder="Mobile Number *" onkeypress="return isNumber(event)">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5 col-sm-5 form-condition">
                                                            <div class="agree-label">
                                                                <input type="checkbox" id="chb1">
                                                                <label for="chb1">
                                                                    <b>Remember Me</b>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 text-center mt-10 mb-20">
                                                            <button type="submit" class="theme-btn-1 default-btn" id="guestSignInBtn">
                                                                <b>Sign In</b>
                                                            </button>
                                                        </div>
                                                        <div class="col-12">
                                                            <p class="account-desc text-center mb-10"><b>
                                                                Not a member?
                                                                <a href="javascript:void(0)" title="Sign Up" data-bs-toggle="modal" data-bs-target="#sign_up_modal" data-bs-dismiss="modal">Sign Up</a></b>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </form>
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
    <!-- MODAL AREA END -->
    <input type="hidden" name="site_url" id="site_url" value="<?= site_url(); ?>">
    <input type="hidden" name="def_cont" id="def_cont" value="<?= DE_CONT; ?>">
</div>
<!-- Body main wrapper end -->
    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->
        
    <!-- Start Switcher -->
    <!-- <div class="switcher-wrapper"> 
        <div class="demo_changer">
            <div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>
            <div class="form_holder">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="predefined_styles">
                            <div class="skin-theme-switcher">
                                <h4>Color</h4>
                                <input type="color" value="<?php if(TEMPCOLOR !== NULL && TEMPCOLOR != "") { echo TEMPCOLOR; } else { echo '#e53e29'; } ?>" id="colorPicker" data-switchcolor="color1" class="styleswitch">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <input type="hidden" value="<?php if(TEMPCOLOR !== NULL && TEMPCOLOR != "") { echo TEMPCOLOR; } else { echo '#e53e29'; } ?>" id="colorPicker" data-switchcolor="color1" class="styleswitch">

    <!-- End Switcher -->

    <!-- All JS Plugins -->
    <script src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/js/plugins.js"></script>
    <!-- Main JS -->
    <script src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/js/main.js"></script>
    <!-- Switcher JS -->
    <script src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/switcher/js/dmss.js"></script>
    <!-- jquery validate JS -->
    <script src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/js/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- SilverBox JS -->
    <script src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/js/silverBox.js"></script>
    <!-- intlTelInput JS -->
    <script src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/js/intlTelInput.min.js"></script>  
    <script>
        // $(document).ready(function() {
        //     var errorMsg = 'Hiiiii';

        //     if(errorMsg != "") {
        //         silverBox({
        //             // position: "center",
        //             alertIcon: "error",
        //             text: errorMsg,
        //             centerContent: true,
        //             showCloseButton: true,
        //             timer: 1500000
        //         });
        //     }
        // });

        var phone_number = window.intlTelInput(document.querySelector("#mobile"), {
            separateDialCode: true,
            preferredCountries:['US', 'UK', 'IN'],
            hiddenInput: "full",
            utilsScript: "<?= base_url(); ?>assets/<?= TEMPNAME; ?>/js/utils.js"
        });
        var guest_mobile_number = window.intlTelInput(document.querySelector("#guest_mobile"), {
            separateDialCode: true,
            preferredCountries:['US', 'UK', 'IN'],
            hiddenInput: "full",
            utilsScript: "<?= base_url(); ?>assets/<?= TEMPNAME; ?>/js/utils.js"
        });
    </script>
    <!-- App Common Custom JS -->
    <script src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/js/app-custom.js"></script>