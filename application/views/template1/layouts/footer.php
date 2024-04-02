

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
                                                                <input type="text" name="username" id="username" class="form-control" placeholder="Username *" value="<?php if($this->input->cookie('username', TRUE) && $this->input->cookie('rememberme', TRUE) ? print_r(base64_decode($this->input->cookie('username', TRUE))) : print_r("") )?>" autocomplete="username">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-20">
                                                            <div class="form-group">
                                                                <div class="password-input-container">
                                                                    <input class="form-control" type="password" name="password" id="signinpassword" placeholder="Password *" value="<?php if($this->input->cookie('password', TRUE) && $this->input->cookie('rememberme', TRUE) ? print_r(base64_decode($this->input->cookie('password', TRUE))) : print_r("") )?>" autocomplete="current-password">
                                                                    <span class="toggle-password">
                                                                        <i class="fas fa-eye"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5 col-sm-5 form-condition">
                                                            <div class="agree-label">
                                                                <input type="checkbox" id="chb2" name="rememberme" <?php if($this->input->cookie('rememberme', TRUE) ? print_r('checked') : print_r("") )?> >
                                                                <label for="chb2">
                                                                    <b>Remember Me</b>
                                                                </label>
                                                                <input type="hidden" id="remembermechecker" name="remembermechecker" value="<?php if($this->input->cookie('rememberme', TRUE) ? print_r('true') : print_r('false') )?>"/>
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
                                                            <a class="forget" href="javascript:void(0)" title="Forgot Password" data-bs-toggle="modal" data-bs-target="#fotgot_password_modal" data-bs-dismiss="modal"><b>Forgot Password?</b></a>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6 mt-30">
                                                            <a class="forget float-right" href="javascript:void(0)" title="Forgot Username" data-bs-toggle="modal" data-bs-target="#fotgot_username_modal" data-bs-dismiss="modal"><b>Forgot Username?</b></a>
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
        <div class="modal fade z-ind-9999" id="sign_up_modal" tabindex="-1">
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
                                                                    <div class="password-input-container">
                                                                        <input class="form-control" type="password" name="password" id="password" placeholder="Password *">
                                                                        <span class="toggle-password">
                                                                            <i class="fas fa-eye"></i>
                                                                        </span>
                                                                    </div>
                                                                    <!-- <input class="form-control" type="password" name="password" id="password" placeholder="Password *">
                                                                    <span class="toggle-password">
                                                                        <i class="fas fa-eye"></i>
                                                                    </span> -->
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
                                            <div class="contact-form" id="guestModalForm">
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
                                                        <div class="col-lg-12 col-md-12 text-center mt-10 mb-20">
                                                            <button type="submit" class="theme-btn-1 default-btn" id="guestSignInBtn">
                                                                <b>Request OTP</b>
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
                                            <div class="contact-form d-none" id="OTPModalForm">
                                                <div class="section-title text-center mb-20">
                                                    <span class="span-bg">OTP Verification</span>
                                                    <h5 class="mt-20 mb-20">Please enter the OTP sent to <span id="number">+919527276077</span>. <a href="javascript:void(0)" title="Change Number" class="txt-underline" id="changeNumber"><b>Change Number</b></a></h5>
                                                </div>
                                                <form method="post" id="otp-verify-form" class="otp-verify-form" name="otp-verify-form">
                                                    <div class="row">
                                                        <div class="col-lg-12 mb-20">
                                                            <div class="form-group">
                                                                <div class="otp-field mt-10">
                                                                    <input type="number" id="otp1" name="otp1" maxlength="1" />
                                                                    <input type="number" id="otp2" name="otp2" maxlength="1" disabled />
                                                                    <input type="number" id="otp3" name="otp3" maxlength="1" disabled />
                                                                    <input type="number" id="otp4" name="otp4" maxlength="1" disabled />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 text-center mt-10">
                                                            <button type="submit" class="theme-btn-1 default-btn" id="otpBtn">
                                                                <b>Verify</b>
                                                            </button>
                                                            <p class="resend text-muted mt-20">
                                                                Didn't receive code? <a href="javascript:void(0)" class="txt-underline" id="requestOTPAgain">Request again</a>
                                                            </p>
                                                        </div>
                                                        <div class="col-12">
                                                            <p class="account-desc text-center mt-20 mb-0"><b>
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

    <!-- MODAL AREA START (Forgot Password Modal) -->
    <div class="ltn__modal-area ltn__quick-view-modal-area">
        <div class="modal fade" id="fotgot_password_modal" tabindex="-1">
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
                                            <div class="contact-form" id="forgotPassModalForm">
                                                <div class="section-title text-center mb-20">
                                                    <span class="span-bg">Reset Password</span>
                                                </div>
                                                <form method="post" id="forgot-password-form" class="forgot-password-form" name="forgot-password-form">
                                                    <div class="row">
                                                        <div class="col-lg-12 mb-20">
                                                            <div class="form-group">
                                                                <input type="text" name="f_username" id="f_username" class="form-control" placeholder="Enter Username *" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 text-center mt-10 mb-20">
                                                            <button type="submit" class="theme-btn-1 default-btn" id="forgotPassBtn">
                                                                <b>Reset</b>
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

    <!-- MODAL AREA START (Forgot Username Modal) -->
    <div class="ltn__modal-area ltn__quick-view-modal-area">
        <div class="modal fade" id="fotgot_username_modal" tabindex="-1">
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
                                            <div class="contact-form" id="forgotUsernameModalForm">
                                                <div class="section-title text-center mb-20">
                                                    <span class="span-bg">Reset Username</span>
                                                </div>
                                                <form method="post" id="forgot-username-form" class="forgot-username-form" name="forgot-username-form">
                                                    <div class="row">
                                                        <div class="col-lg-12 mb-20">
                                                            <div class="form-group">
                                                                <input type="text" name="f_email" id="f_email" class="form-control" placeholder="Enter Email *" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 text-center mt-10 mb-20">
                                                            <button type="submit" class="theme-btn-1 default-btn" id="forgotEmailBtn">
                                                                <b>Reset</b>
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
    
    <!-- FOOTER AREA START (ltn__footer-2 ltn__footer-color-2) -->
    <footer class="ltn__footer-area ltn__footer-2  ltn__footer-color-2" id="contact">
        <div class="footer-top-area section-bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-about-widget">
                            <h4 class="footer-title">Address : </h4>
                            <div class="footer-address">
                                <ul>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-placeholder"></i>
                                        </div>
                                        <?php if(isset(TEMP_1['DETAILS']['TEMP_ADD']) && TEMP_1['DETAILS']['TEMP_ADD'] != NULL && TEMP_1['DETAILS']['TEMP_ADD'] != "") { ?>
                                        <div class="footer-address-info">
                                            <p><?php echo TEMP_1['DETAILS']['TEMP_ADD']; ?></p>
                                        </div>
                                        <?php } ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-about-widget">
                            <h4 class="footer-title">Contact Details : </h4>
                            <div class="footer-address">
                                <ul>
                                    <?php if(isset(TEMP_1['DETAILS']['TEMP_MOB']) && TEMP_1['DETAILS']['TEMP_MOB'] !== NULL && TEMP_1['DETAILS']['TEMP_MOB'] != "") { ?>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-call"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="tel:<?php echo TEMP_1['DETAILS']['TEMP_MOB']; ?>"><?php echo TEMP_1['DETAILS']['TEMP_MOB']; ?></a></p>
                                        </div>
                                    </li>
                                    <?php } ?>
                                    <?php if(isset(TEMP_1['DETAILS']['TEMP_EMAIL']) && TEMP_1['DETAILS']['TEMP_EMAIL'] !== NULL && TEMP_1['DETAILS']['TEMP_EMAIL'] != "") { ?>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-mail"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="mailto:<?php echo TEMP_1['DETAILS']['TEMP_EMAIL']; ?>"><?php echo TEMP_1['DETAILS']['TEMP_EMAIL']; ?></a></p>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php if(isset(TEMP_1['SOCIAL']) && TEMP_1['SOCIAL'] != NULL && TEMP_1['SOCIAL'] != "") {  ?>
                    <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-about-widget">
                            <h4 class="footer-title">Social Media's : </h4>
                            <div class="ltn__social-media mt-20">
                                <ul>
                                    <?php if(isset(TEMP_1['SOCIAL']) && TEMP_1['SOCIAL'] != NULL && TEMP_1['SOCIAL'] != "") { 
                                        foreach(TEMP_1['SOCIAL'] as $social) { ?>
                                        <li><a href="<?php if(isset($social['link']) && $social['link'] != NULL && $social['link'] != "") { echo $social['link']; } else { echo ""; } ?>" title="<?php if(isset($social['title']) && $social['title'] != NULL && $social['title'] != "") { echo $social['title']; } else { echo ""; } ?>" <?php if(isset($social['attr']) && $social['attr'] != NULL && $social['attr'] != "") { echo $social['attr']; } else { echo ""; } ?>><i class="<?php if(isset($social['icon']) && $social['icon'] != NULL && $social['icon'] != "") { echo $social['icon']; } else { echo ""; } ?>"></i></a></li>
                                    <?php } } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if(isset(TEMP_1['DETAILS']['TEMP_PAY_IMG']) && TEMP_1['DETAILS']['TEMP_PAY_IMG'] != NULL && TEMP_1['DETAILS']['TEMP_PAY_IMG'] != "") { ?>
                    <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-about-widget">
                            <h4 class="footer-title">We Accept : </h4>
                            <div class="footer-address">
                                <img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/payment/<?php if(isset(TEMP_1['DETAILS']['TEMP_PAY_IMG']) && TEMP_1['DETAILS']['TEMP_PAY_IMG'] != NULL && TEMP_1['DETAILS']['TEMP_PAY_IMG'] != "") { echo TEMP_1['DETAILS']['TEMP_PAY_IMG']; } else { echo ""; } ?>" alt="Payment Image">
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="ltn__copyright-area ltn__copyright-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="site-logo-wrap">
                            <?php if(isset(TEMP_1['HEAD']['TEMP_LOGO']) && TEMP_1['HEAD']['TEMP_LOGO'] != NULL && TEMP_1['HEAD']['TEMP_LOGO'] != "") { ?>
                            <div class="site-logo">
                                <a href="<?= site_url(); ?>"><img class="logo-img" src="<?php if(isset(TEMP_1['HEAD']['TEMP_LOGO']) && TEMP_1['HEAD']['TEMP_LOGO'] != NULL && TEMP_1['HEAD']['TEMP_LOGO'] != "") { echo TEMP_1['HEAD']['TEMP_LOGO']; } else { echo ""; } ?>" alt="Logo"></a>
                            </div>
                            <?php } ?>
                            <?php if(isset(TEMP_1['DETAILS']['TEMP_COPYRIGHT']) && TEMP_1['DETAILS']['TEMP_COPYRIGHT'] != NULL && TEMP_1['DETAILS']['TEMP_COPYRIGHT'] != "") { ?>
                            <div class="get-support ltn__copyright-design clearfix">
                                <div class="get-support-info">
                                    <h6><?php if(isset(TEMP_1['DETAILS']['TEMP_COPYRIGHT']) && TEMP_1['DETAILS']['TEMP_COPYRIGHT'] != NULL && TEMP_1['DETAILS']['TEMP_COPYRIGHT'] != "") { echo TEMP_1['DETAILS']['TEMP_COPYRIGHT']; } else { echo ""; } ?></h6>
                                    <h4><span class="current-year"></span></h4>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php if(isset(TEMP_1['FOOTMENU']) && TEMP_1['FOOTMENU'] != NULL && TEMP_1['FOOTMENU'] != "") { ?>
                    <div class="col-md-6 col-12 align-self-center">
                        <div class="ltn__copyright-menu text-end">
                            <ul>
                                <?php if(isset(TEMP_1['FOOTMENU']) && TEMP_1['FOOTMENU'] != NULL && TEMP_1['FOOTMENU'] != "") { 
                                    foreach(TEMP_1['FOOTMENU'] as $footmenu) { ?>
                                        <li><a href="<?php if(isset($footmenu['link']) && $footmenu['link'] != NULL && $footmenu['link'] != "") { echo $footmenu['link']; } else { echo ""; } ?>" <?php if(isset($footmenu['attr']) && $footmenu['attr'] != NULL && $footmenu['attr'] != "") { echo $footmenu['attr']; } else { echo ""; } ?>><?php if(isset($footmenu['title']) && $footmenu['title'] != NULL && $footmenu['title'] != "") { echo $footmenu['title']; } else { echo ""; } ?></a></li>
                                <?php } } ?>
                            </ul>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->
    <input type="hidden" name="site_url" id="site_url" value="<?= site_url(); ?>" />  
    <input type="hidden" name="def_cont" id="def_cont" value="<?= DE_CONT; ?>" />
    <?php
        $customerId = $this->session->userdata('login_data')['customer_id'];
    ?>
    <input type="hidden" name="custId" id="custId" value="<?= $customerId; ?>" />
</div>
<!-- Body main wrapper end -->    

    <!-- preloader area start -->
    <!-- <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div> -->
    <!-- preloader area end -->
    
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
                                        echo '#e53e29'; 
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

    <!-- All JS Plugins -->
    <script src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/js/plugins.js"></script>
    <!-- Main JS -->
    <script src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/js/main.js"></script>
    <!-- switcher JS -->
    <script src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/switcher/js/dmss.js"></script>
    <!-- sweetalert2 JS -->
    <script src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/js/sweetalert2.min.js"></script>
    <!-- jquery validate JS -->
    <script src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/js/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- intlTelInput JS -->
    <script src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/js/intlTelInput.min.js"></script>  
    <script>
        $(function() {
            var custId = $("#custId").val();

            if(custId != "" && custId != undefined ) {
                $("#signInBtn1").hide();
                $("#myAccBtn").removeClass('d-none');
             } else {
                $("#myAccBtn").addClass('d-none');
                $("#signInBtn1").show();
            }
        });
        
        function redirectToAboutPage() {
            var site_url = $("#site_url").val();
            window.location.href = site_url+'#about';
        }

        var phone_number = window.intlTelInput(document.querySelector("#mobile"), {
            separateDialCode: true,
            preferredCountries:['IN', 'US', 'UK'],
            hiddenInput: "full",
            utilsScript: "<?= base_url(); ?>assets/<?= TEMPNAME; ?>/js/utils.js"
        });
        var guest_mobile_number = window.intlTelInput(document.querySelector("#guest_mobile"), {
            separateDialCode: true,
            preferredCountries:['IN', 'US', 'UK'],
            hiddenInput: "full",
            utilsScript: "<?= base_url(); ?>assets/<?= TEMPNAME; ?>/js/utils.js"
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const otpInputs = document.querySelectorAll('.otp-field input');
            
            otpInputs.forEach(function (input, index) {
                input.addEventListener('input', function () {
                    if (input.value && index < otpInputs.length - 1) {
                        otpInputs[index + 1].removeAttribute('disabled');
                        otpInputs[index + 1].focus();
                    }
                });

                input.addEventListener('keydown', function (e) {
                    if (e.key === 'Backspace' && index > 0 && !input.value) {
                        otpInputs[index - 1].focus();
                    }
                });
            });
            
            // Focus on the first input by default
            otpInputs[0].focus();
        });

    </script>
    <!-- App Common Custom JS -->
    <script src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/js/app-custom.js"></script>